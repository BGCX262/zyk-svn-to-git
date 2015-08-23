$(function() {
	initContentHeight();
	
    $(window).resize(function(){
	  initContentHeight();
	});
		
	//alert($('#content').get(0).innerHTML)
	$('#menu li a').each(function(){
		$(this).bind("focus", function(){
		  $(this).blur(); 
		});
		
		$(this).bind("click", function(){
		  $('#menu li a').each(function(){
			 $(this).removeClass('on')							
		  });
		  
		  $(this).addClass("on"); 
		});
		
	});
});

function initContentHeight()
{
	$('#content').css('height', 
					  document.documentElement.clientHeight - $('#header').height() + 'px'
					  );
}