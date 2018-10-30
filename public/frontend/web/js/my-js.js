$(document).on('click','.change-color-menu', function(){
	//do something
	$(this).parent().find("li").css('background-color', '#eee')
	$(this).css('background-color', '#4DD0E1');
})