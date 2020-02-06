(function($) {
	
	"use strict";
	
		var holidayTours	=$(".owl-holidays");
		

	holidayTours.owlCarousel({
		items : 3,
		itemsCustom : false,
		itemsDesktop : [1199,2],
		itemsDesktopSmall : [991,2],
		itemsTablet: [768,2],
		itemsTabletSmall: [767,1],
		itemsMobile : [479,1],
		singleItem : false,
		itemsScaleUp : false,
	
		//Autoplay
		autoPlay : true,
		stopOnHover : true,
	 
		// Navigation
		navigation : true,
		navigationText : ['<i class="fa fa-angle-left" saria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		rewindNav : true,
		scrollPerPage : false,
	 
		//Pagination
		pagination : false,
		paginationNumbers: false,
	 
		// Responsive 
		responsive: true,
		responsiveRefreshRate : 200,
		responsiveBaseWidth: window,    
	});

})(jQuery);
