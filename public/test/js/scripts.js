function init() {
    
}
window.onload = init();
		
$(window).load(function () {
	$('.fixed-overlay').hide();
	$('.item-Height').matchHeight();
    $('select.ori-input').niceSelect();
    
//	$('.carousel').flickity({
//		// options
//		cellAlign: 'center',
//		"wrapAround": true 
//	});
    
     
//    fixHeight();
//    $( window ).resize(function() {
//        fixHeight(); 
//    });
    $('#btn-nav-input').on('change', function(){
       if($('#btn-nav-input').is(':checked')){
           $('body').css('overflow', 'hidden');
           $('body').css('height', 'calc(100% - 100px)');
           $('body').css('position', 'fixed');
       }else{
           $('body').css('overflow', 'auto');
           $('body').css('position', 'relative');
       }
    });
});


$(document).ready(function(){
     $("form").submit(function(e) {
                var ref = $(this).find("[required]");
                $(ref).each(function(){
                    if ( $(this).val() == '' )
                    {
                        alert("Required field should not be blank.");

                        $(this).focus();

                        e.preventDefault();
                        return false;
                    }
                });  return true;
            }); 

     $('#user-form').validate({
        rules:{
            email: {
                required: true,
                email: true
            }
        },                 
        errorPlacement: function(error,element) {
        return true;
        },
        highlight: function(element, errorClass, validClass) { 
          $(element).nextAll('.form-control-feedback').show().removeClass('glyphicon-ok').addClass('glyphicon-remove');    
        },
        unhighlight: function(element, errorClass, validClass) { 
          $(element).nextAll('.form-control-feedback').show().removeClass('glyphicon-remove').addClass('glyphicon-ok');
        }

      });

        $('.inputText').blur(function(){
            if($(this).val() == '') { 
                $(this).nextAll('.form-control-feedback').hide();
            }
        });

          $('.area-field').blur(function(){
            if($(this).val() == '') { 
                $(this).nextAll('.form-control-feedback').hide();
            }
        });
    
    
    
});

function fixHeight(){
    $('.img-banner').css('height', $( window ).height() - $('header').outerHeight() - $('footer').outerHeight() - 35 );
}