jQuery(function($) {
		$('.myMenu > li').bind('mouseover', openSubMenu);
		$('.myMenu > li').bind('mouseout', closeSubMenu);
		
		function openSubMenu() {
			$(this).find('ul').css('visibility', 'visible');	
		};
		
		function closeSubMenu() {
			$(this).find('ul').css('visibility', 'hidden');	
		};
		
		

	
	
	//for gallery page
	
	$("#work_thumbs img").fadeTo("fast", 0.8); // This sets the opacity of the thumbs to fade down to 60% when the page loads

	$("#work_thumbs img").hover(function(){
		$(this).fadeTo("fast", 1.0); // This should set the opacity to 100% on hover
	},function(){
   		$(this).fadeTo("fast", 0.8); // This should set the opacity back to 60% on mouseout
	});
	
	$("#work_thumbs img").fadeTo("fast", 0.8); // This sets the opacity of the thumbs to fade down to 60% when the page loads

	$("#work_thumbs img").hover(function(){
		$(this).fadeTo("fast", 1.0); // This should set the opacity to 100% on hover
	},function(){
   		$(this).fadeTo("fast", 0.8); // This should set the opacity back to 60% on mouseout
	});
	

});
