jQuery(document).ready(function($) {
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).fadeIn("fast");
        },
        function() {
            $('.dropdown-menu', this).fadeOut("fast");
        });
    $('[data-toggle="tooltip"]').tooltip();
    $('select').select2({
        minimumResultsForSearch: -1
    });
    new WOW().init();

	
	 $('body').append('<div id="toTop" class="btn"><span class="fa fa-chevron-up"></span></div>');
    	$(window).scroll(function () {
			if ($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		}); 
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
	
    $('.se-pre-con').delay(1200).fadeOut('slow');
	
    $('.fixme ul li a').on('click', function(){
        $('.fixme ul li a').removeClass('act');
        $(this).addClass('act');
    });	


    $('.sliderheader').owlCarousel({
        animateOut: 'slideOutDown',
        animateIn: 'flipInX',
        items: 1,
        margin: 30,
        stagePadding: 30,
        nav: true,
        smartSpeed: 450,
        autoplayTimeout: 1000,
        autoplayHoverPause: true
     });

    
});