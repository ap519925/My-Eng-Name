// Hide/Show forms
$(".type-buttons").click(function(){
	var button_id = this.id;
	var div_id = button_id.substr(0, button_id.indexOf('_')).trim();
	$("#"+div_id).show();
 	$(".type-div:not(#" + div_id +")").hide();
});

$(document).ready(function(){
	$(".type-div").hide();
});

(function() {
	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
		new SelectFx(el);
	} );
	})();
	
// Datepicker Chinese Locale 
  $( function() {
    $("#datepicker1").datepicker($.datepicker.regional[ "zh-TW" ]);
	$("#datepicker2").datepicker($.datepicker.regional[ "zh-TW" ]);
    $("#datepicker3").datepicker($.datepicker.regional[ "zh-TW" ]);
	$("#datepicker4").datepicker($.datepicker.regional[ "zh-TW" ]);
    $("#locale").on("change", function() {
    });
  } )
  
// Smooth Scroll JS
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 700);
        return false;
      }
    }
  });
});
// Button-Pressed JS
$('.trait-choices, .gender-choices').click(function(){
    if($(this).hasClass('active')){
        $(this).removeClass('active')
    } else {
        $(this).addClass('active')
    }
});