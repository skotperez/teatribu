jQuery(document).ready(function($) {

	// click menus
	$("#sidebar-menu .menu-item-has-children>a").addClass("inactive");
	$("#sidebar-menu .menu-item-has-children ul.sublist").hide();

	$("#sidebar-menu .menu-item-has-children>a").click(function( event ){
		// prevent default anchor click behavior
		event.preventDefault();
	  $(this).next("ul.sublist").slideToggle("500")
	  .siblings("ul.sublist:visible").slideUp("500");
	  $(this).toggleClass("active").toggleClass("inactive");
	});

});
