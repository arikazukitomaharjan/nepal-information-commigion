jQuery(document).ready(function($){

	//side menu ======================================
	var $sidemenu =  $('#side-menu');

	$sidemenu.find('li ul').hide();

	$sidemenu.find('li').hover(function(){
		// $this = $(this);
		$('ul', this).stop().show();

		$(this).addClass('current-active');

	}, function(){
		$('ul', this).stop().hide();
		// $this = $(this);
		$(this).removeClass('current-active');
	});

	// auto add caret in the menu
	$sidemenu.find('li').each(function(){

		$this = $(this);

		if ( $this.find('ul').length > 0 ){
			$this.find('a:first').append( '<span class="glyphicon glyphicon-chevron-right"></span>' );
		}

	})


	$('.flexslider').flexslider({
		animation: "slide",
		controlNav: false,
		nextText: '<i class="glyphicon glyphicon-chevron-right"></i>',
		prevText: '<i class="glyphicon glyphicon-chevron-left"></i>',
	});


	$('.success-story-slider').flexslider({
		animation: "slide",
		controlNav: false,
		itemWidth: 300,
		nextText: '<i class="glyphicon glyphicon-chevron-right"></i>',
		prevText: '<i class="glyphicon glyphicon-chevron-left"></i>',
	});


	//==================================

	$("#header-news-scroll").newsTicker({
		base : {
			time : 40000
		},
		itemWidth : "auto",
	});
	

}); //dont delete this