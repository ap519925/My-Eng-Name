// Hide/Show forms
$(".type-buttons").click(function(){
    var button_id = this.id;
    var div_id = button_id.substr(0, button_id.indexOf('_')).trim();
    $("#"+div_id).show();
    $(".type-div:not(#" + div_id +")").hide();
});

$(document).ready(function(){
    $(".type-div").hide();
    
    // Initialize datepickers
    var datepickerOptions = {
        changeMonth: true,
        changeYear: true,
        yearRange: "1900:2023",
        dateFormat: "yy/mm/dd",
        onSelect: function(dateText, inst) {
            $(this).val(dateText);
            console.log('Date selected:', dateText, 'for input:', this.id);
        }
    };

    $("#datepicker1").datepicker($.extend({}, $.datepicker.regional["zh-TW"], datepickerOptions));
    $("#datepicker2").datepicker($.extend({}, $.datepicker.regional["zh-TW"], datepickerOptions));
    $("#datepicker3").datepicker($.extend({}, $.datepicker.regional["zh-TW"], datepickerOptions));
    $("#datepicker4").datepicker($.extend({}, $.datepicker.regional["zh-TW"], datepickerOptions));

    // Form submission handling
    $('form').on('submit', function(e) {
        console.log('Form submit triggered');
        e.preventDefault();
        
        var form = $(this);
        console.log('Form action:', form.attr('action'));
        
        // Get the form type and corresponding datepicker
        var formType = form.find('input[name="form_type"]').val();
        console.log('Form type:', formType);
        
        var datepickerId = formType === 'baby' ? 'datepicker1' :
                          formType === 'student' ? 'datepicker2' :
                          formType === 'professional' ? 'datepicker3' : 'datepicker4';
        
        console.log('Using datepicker:', datepickerId);
        
        // Get all form data
        var formData = form.serializeArray();
        
        // Get the datepicker value
        var dateValue = $('#' + datepickerId).val();
        console.log('Date value:', dateValue);
        
        // Validate date value
        if (!dateValue) {
            alert('请选择生日 (Please select a date of birth)');
            $('#' + datepickerId).focus();
            return;
        }
        
        // Add the datepicker value to form data
        formData.push({name: datepickerId, value: dateValue});
        
        // Log form data
        console.log('Submitting form data:', formData);
        
        // Make the AJAX request
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: $.param(formData),
            success: function(response) {
                console.log('Received response:', response);
                
                // Find the closest payment div and update it
                var paymentDiv = $('#payment' + (formType === 'baby' ? '1' : 
                                               formType === 'student' ? '2' : 
                                               formType === 'professional' ? '3' : '4'));
                
                console.log('Updating payment div:', paymentDiv.attr('id'));
                paymentDiv.find('.fa-wechat center ruby').text(response);
                
                // Hide form and show payment div
                form.closest('.type-div').hide();
                paymentDiv.show();
                
                // Scroll to payment div
                $('html, body').animate({
                    scrollTop: paymentDiv.offset().top
                }, 700);
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
                console.error('Response:', xhr.responseText);
                alert('Error generating name. Please try again.');
            }
        });
    });
});

// Button-Pressed JS
$('.trait-choices, .gender-choices').click(function(){
    if($(this).hasClass('active')){
        $(this).removeClass('active');
    } else {
        $(this).addClass('active');
    }
});

// SelectFx initialization
(function() {
    [].slice.call(document.querySelectorAll('select.cs-select')).forEach(function(el) {    
        new SelectFx(el);
    });
})();