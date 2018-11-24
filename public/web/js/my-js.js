$(document).on('click','.change-color-menu', function(){
	idCate = $(this).find("a").attr('data-id');
	$(this).parent().find("li").css('background-color', '#eee')
	$(this).css('background-color', '#4DD0E1');
	$.ajax({
        type:"get",
        url:urlEnv+'?id='+idCate,
        success:function(data){
        	console.log(data.html)
    		$('#post_env').html(data.html)
        },
        cache:false,
        dataType:'json'
    });
})

$(document).on('click','.change-color-menu-product', function(){
	idCate = $(this).find("a").attr('id-cate');
	$(this).parent().find("li").css('background-color', '#eee')
	$(this).css('background-color', '#4DD0E1');
	$.ajax({
        type:"get",
        url:urlProduct+'?id='+idCate,
        success:function(data){
        	console.log(data.html)
    		$('#post_pro').html(data.html)
        },
        cache:false,
        dataType:'json'
    });
})