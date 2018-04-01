(function ($) {
    "use strict";

	
		
		/*---------------------
		 jQuery MeanMenu
		--------------------- */
		jQuery('nav#dropdown').meanmenu();

		/*==========================
		Blog carousel js active
		==========================*/
		$(".blog_list_area").owlCarousel({
			  navigation : true, 
			  slideSpeed : 300,
			  paginationSpeed : 400,
			  singleItem:true,
			  pagination:false,
			  autoPlay:true,
		  });
		  
		/*==========================
		Clothing Carousel list js active
		==========================*/
		$(".clothing_carousel_list").owlCarousel({
			  autoPlay: false, 
			  items : 1,
			  itemsDesktop : [1199,1],
			  itemsDesktopSmall : [979,1],
			  itemsTablet:[768,1],
			  itemsMobile:[479,1],
			  pagination:false
		 
		  });
		  /*==========================
		Carousel Branding js active
		==========================*/
		$(".carousel_branding").owlCarousel({
			items:6,
			itemsDesktop:[1199,6],
			itemsDesktopSmall:[979,4],
			itemsTablet:[768,3],
			itemsMobile:[479,2],
			slideSpeed : 500,
			paginationSpeed : 500,
			rewindSpeed : 500,
			pagination:false,
			navigation:true
		}); 
		/*==========================
		fancybox js active
		==========================*/
		$('.fancybox').fancybox();
		
		/*==========================
		scroll up js active
		==========================*/
		$('[data-toggle="tooltip"]').tooltip();
			$.scrollUp({
			scrollText: '<div id="backtop"></div>'
		});	   
		/*==========================
		Upsell Product list js active
		==========================*/
		$(".upsell_product_list").owlCarousel({
			items:4,
			itemsDesktop:[1199,4],
			itemsDesktopSmall:[979,3],
			itemsTablet:[768,2],
			itemsMobile:[479,1],
			slideSpeed : 500,
			paginationSpeed : 500,
			rewindSpeed : 500,
			pagination:false,
			navigation:true
		});
		/*==========================
		Carousel Blog list js active
		==========================*/
		$(".carousel_blog_list").owlCarousel({
			items:4,
			itemsDesktop:[1199,4],
			itemsDesktopSmall:[979,3],
			itemsTablet:[768,2],
			itemsMobile:[479,1],
			slideSpeed : 500,
			paginationSpeed : 500,
			rewindSpeed : 500,
			pagination:false,
			navigation:true
		}); 
		/*==========================
		Testimonial list js active
		==========================*/
		$(".testimonial_list").owlCarousel({
			singleItem:true,
			slideSpeed : 500,
			paginationSpeed : 500,
			rewindSpeed : 500,
			pagination:true,
			navigation:false
		}); 

			/*==========================
		Search Box js active
		==========================*/
		var nameElement = document.forms.myForm.Name;

		function nameFocus( e ) {
		  var element = e.target || window.event.srcElement;
		  if ( element.value == "Search" )
			element.value = "";
		}
		function nameBlur(e) {
		  var element = e.target || window.event.srcElement;
		  if ( element.value === "" )
			element.value = "Search";
		}
		if ( nameElement.addEventListener ) {
		  nameElement.addEventListener("focus", nameFocus, false);
		  nameElement.addEventListener("blur", nameBlur, false);
		} else if ( nameElement.attachEvent ) {
		  nameElement.attachEvent("onfocus", nameFocus);
		  nameElement.attachEvent("onblur", nameBlur);
		}
		
		 /*==========================
		Product Pricing js active
		==========================*/
			$( "#slider-range" ).slider({
			   range: true,
			   min: 40,
			   max: 600,
			   values: [ 60, 570 ],
			   slide: function( event, ui ) {
				$( "#amount" ).val( "$" + ui.values[ 0 ] + "  $" + ui.values[ 1 ] );
			   }
			  });
		  $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
		   "  $" + $( "#slider-range" ).slider( "values", 1 ) );
		   
	
				
				/*---------------------
				   Circular Bars - Knob
				--------------------- */	
					  if(typeof($.fn.knob) != 'undefined') {
						$('.knob').each(function () {
						  var $this = $(this),
							  knobVal = $this.attr('data-rel');
					
						  $this.knob({
							'draw' : function () { 
							  $(this.i).val(this.cv + '%')
							}
						  });
						  
						  $this.appear(function() {
							$({
							  value: 0
							}).animate({
							  value: knobVal
							}, {
							  duration : 2000,
							  easing   : 'swing',
							  step     : function () {
								$this.val(Math.ceil(this.value)).trigger('change');
							  }
							});
						  }, {accX: 0, accY: -150});
						});
					  }	
			
/*----- cart-plus-minus-button -----*/
	 $(".cart-plus-minus").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
	  $(".qtybutton").on("click", function() {
		var $button = $(this);
		var oldValue = $button.parent().find("input").val();
		if ($button.text() == "+") {
		  var newVal = parseFloat(oldValue) + 1;
		} else {
		   // Don't allow decrementing below zero
		  if (oldValue > 0) {
			var newVal = parseFloat(oldValue) - 1;
			} else {
			newVal = 0;
		  }
		  }
		$button.parent().find("input").val(newVal);
	  });	

			   

	
	

})(jQuery);