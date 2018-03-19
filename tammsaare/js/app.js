jQuery(document).ready(function($) {
	$(document).foundation();
	
	$('.image-gallery-block').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			}
		}
	});
	
	$('.image-popup-vertical-fit').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true
		}
		
	});
	
});	

jQuery(window).load( function($) {

    jQuery('.image-gallery-block').masonry({
        "itemSelector": ".image-frame",
        "columnWidth": ".grid-sizer",
    });

});


jQuery(window).scroll(function($) {    
    var scroll = jQuery(window).scrollTop();

    if (scroll >= 50) {
        jQuery(".header").addClass("collapse");
    } else {
        jQuery(".header").removeClass("collapse");
    }
});
