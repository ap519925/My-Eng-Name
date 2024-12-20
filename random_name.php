<?php
// Function to generate a unique index based on date of birth
function generateIndexFromDate($date) {
    $timestamp = strtotime($date);
    if ($timestamp === false) {
        error_log("Error: Failed to parse date: $date");
        return 0;
    }
    
    // Use day of year (1-366) as index for more even distribution
    $dayOfYear = date('z', $timestamp);
    error_log("Date $date converted to day of year: $dayOfYear");
    return $dayOfYear;
}

// Read the names.json file
$names_json = file_get_contents('names.json');
if ($names_json === false) {
    error_log("Error: Could not read names.json file");
    echo "Error: Could not read names database.";
    exit;
}

$names_data = json_decode($names_json, true);
if ($names_data === null) {
    error_log("Error: Invalid JSON in names.json - " . json_last_error_msg());
    echo "Error: Could not parse names database.";
    exit;
}

error_log("Successfully loaded names.json with " . count($names_data) . " countries");

// Log all POST data for debugging
error_log("POST data received: " . print_r($_POST, true));

// Get and validate form inputs
$gender = $_POST["gender"] ?? null;
$country = $_POST["country"] ?? "us";
$form_type = $_POST["form_type"] ?? "";

// Determine which datepicker to use based on form type
$datepicker_field = "datepicker1";
switch ($form_type) {
    case "baby":
        $datepicker_field = "datepicker1";
        break;
    case "student":
        $datepicker_field = "datepicker2";
        break;
    case "professional":
        $datepicker_field = "datepicker3";
        break;
    default:
        $datepicker_field = "datepicker4";
}

error_log("Looking for date in field: " . $datepicker_field);
$date_of_birth = $_POST[$datepicker_field] ?? null;

error_log("Form data - Gender: $gender, Country: $country, Form Type: $form_type, DOB Field: $datepicker_field, DOB Value: $date_of_birth");

// Validate inputs
if (!isset($gender) || empty($gender)) {
    error_log("Error: Missing gender parameter");
    echo "Error: Gender is required.";
    exit;
}

if (!isset($date_of_birth) || empty($date_of_birth)) {
    error_log("Error: Missing date of birth parameter");
    echo "Error: Date of birth is required.";
    exit;
}

if (!in_array($gender, ["male", "female"])) {
    error_log("Error: Invalid gender value: $gender");
    echo "Error: Invalid gender.";
    exit;
}

if (!in_array($country, ["us", "ca", "gb", "au"])) {
    error_log("Error: Invalid country value: $country");
    echo "Error: Invalid country.";
    exit;
}

// Validate date format (yy/mm/dd from datepicker)
if (!empty($date_of_birth)) {
    // Convert from yy/mm/dd to yyyy-mm-dd for PHP
    $date_parts = explode('/', $date_of_birth);
    if (count($date_parts) === 3) {
        // Add 20 or 19 prefix to year if needed
        if (strlen($date_parts[0]) == 2) {
            $date_parts[0] = (intval($date_parts[0]) > 50 ? '19' : '20') . $date_parts[0];
        }
        $date_of_birth = implode('-', $date_parts);
        
        if (!strtotime($date_of_birth)) {
            error_log("Error: Could not parse date after conversion: $date_of_birth");
            echo "Error: Invalid date format.";
            exit;
        }
    } else {
        error_log("Error: Date not in expected format (yy/mm/dd): $date_of_birth");
        echo "Error: Invalid date format.";
        exit;
    }
} else {
    error_log("Error: Empty date of birth");
    echo "Error: Date of birth is required.";
    exit;
}

// Map country values to the keys in names.json
$country_map = [
    "us" => "US",
    "ca" => "CA",
    "gb" => "GB",
    "au" => "AU",
];

$mapped_country = $country_map[$country];

// Debug output
error_log("Gender: " . $gender);
error_log("Country: " . $country);
error_log("Mapped Country: " . $mapped_country);
error_log("Date of birth: " . $date_of_birth);

// Debug output
error_log("Gender: " . $gender);
error_log("Country: " . $country);
error_log("Mapped Country: " . $mapped_country);
error_log("Names data: " . json_encode(array_keys($names_data)));

// Filter names based on country and gender
$filtered_names = [];
if (isset($names_data[$mapped_country])) {
    foreach ($names_data[$mapped_country] as $region_data) {
        if (isset($region_data["names"])) {
            foreach ($region_data["names"] as $name_data) {
                error_log("Processing name: " . json_encode($name_data));
                if (isset($name_data["gender"]) && isset($name_data["romanized"]) &&
                    $name_data["gender"] === strtoupper(substr($gender, 0, 1)) &&
                    !empty($name_data["romanized"])) {
                    $filtered_names[] = $name_data["romanized"][0];
                }
            }
        }
    }
}

error_log("Filtered names: " . json_encode($filtered_names));

// If no names are found, return an error
if (empty($filtered_names)) {
    error_log("No names found. Filtered names array is empty.");
    echo "Error: No names found for the given criteria.";
    exit;
}

// If we have filtered names, select one based on date of birth
if (empty($filtered_names)) {
    error_log("No names found for gender $gender and country $mapped_country");
    echo "Error: No names found for the given criteria.";
    exit;
}

error_log("Found " . count($filtered_names) . " matching names");

// Generate a unique index based on the date of birth
$index = generateIndexFromDate($date_of_birth);
error_log("Generated index from date: $index");

// Ensure the index is within the bounds of the filtered names array
$name_index = $index % count($filtered_names);
error_log("Final name index: $name_index");

// Get and return the name
$selected_name = $filtered_names[$name_index];
error_log("Selected name: $selected_name");
echo $selected_name;
?>
