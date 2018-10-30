
$(document).on('click','.click_me',function(e){
	e.preventDefault();
	link = $(this).attr('href');
	$.ajax({
		headers: {
			  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
		},
		type:"post",
		url:"{{route('abc')}}",
		data:{'open_link':link},
		success:function(data){
			// data = abc
			data = {status:true,message:"tao da nhan duoc link"}
		},
		cache:false,
		dataType: 'html'
	});
});
