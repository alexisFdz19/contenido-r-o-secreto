//Nuevo Método

$(document).ready(function(){

	var altura = $('#navMenu').offset().top;
	
	$(window).on('scroll', function(){

		if ( $(window).scrollTop() > altura ){

            $('#navMenu').addClass('fixed-top');
            $('#navMenu').removeClass('navMenuMargin1');
            $('#navMenu').addClass('navMenuMargin2');
            $('#divMenuXS').addClass('navMenuXSMargin');

            
		} else {

            $('#navMenu').removeClass('fixed-top');
            $('#navMenu').removeClass('navMenuMargin2');
            $('#navMenu').addClass('navMenuMargin1');
            $('#divMenuXS').removeClass('navMenuXSMargin');
            
        }
        
	});
 
});

//Método anterior

/* jQuery(document).ready(function($){

    $(window).scroll(function() {

        if ($("#navMenu").offset().top > 400) {

            $("#navMenu").addClass("fixed-top");

        } else {

            $("#navMenu").removeClass("fixed-top");


        }

    });

}); */
