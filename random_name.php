<?php
// Function to generate a unique index based on date of birth
function generateIndexFromDate($date) {
    $timestamp = strtotime($date);
    return $timestamp % 100; // Using modulo to keep the index within a reasonable range
}

// Read the names.json file
$names_json = file_get_contents('names.json');
$names_data = json_decode($names_json, true);

// Get the gender, country, and date of birth from the form
$gender = $_POST["gender"];
$country = $_POST["country"];
$date_of_birth = $_POST["datepicker1"] ?? $_POST["datepicker2"] ?? $_POST["datepicker3"];

// Validate inputs
if (!isset($gender) || !isset($country) || !isset($date_of_birth)) {
    echo "Error: Missing required parameters.";
    exit;
}

if (!in_array($gender, ["male", "female"])) {
    echo "Error: Invalid gender.";
    exit;
}

if (!in_array($country, ["usa", "canada", "england", "australia"])) {
    echo "Error: Invalid country.";
    exit;
}

// Map country values to the keys in names.json
$country_map = [
    "usa" => "US",
    "canada" => "CA",
    "england" => "GB",
    "australia" => "AU",
];

$mapped_country = $country_map[$country];

// Filter names based on country and gender
$filtered_names = [];
foreach ($names_data as $country_code => $country_data) {
    if ($country_code === $mapped_country) {
        foreach ($country_data as $region_data) {
            foreach ($region_data["names"] as $name_data) {
                if ($name_data["gender"] === strtoupper(substr($gender, 0, 1))) {
                    $filtered_names[] = $name_data["romanized"][0];
                }
            }
        }
    }
}

// If no names are found, return an error
if (empty($filtered_names)) {
    echo "Error: No names found for the given criteria.";
    exit;
}

// Generate a unique index based on the date of birth
$index = generateIndexFromDate($date_of_birth);

// Ensure the index is within the bounds of the filtered names array
$name_index = $index % count($filtered_names);

// Get the name
$selected_name = $filtered_names[$name_index];

// Return the selected name
echo $selected_name;
?>
