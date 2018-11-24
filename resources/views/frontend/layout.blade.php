@php
	$banner = DB::table('slides')
         ->where('type','Banner')
         ->where('status',1)->get();
    $menus = getMenu();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
<title>3D Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Global Tours Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="{{ asset('web/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="{{ asset('web/css/style.css') }}" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="{{ asset('web/css/font-awesome.css') }}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- phone style -->
<link rel="stylesheet" href="{{ asset('web/css/phone-style.css') }}" type="text/css" media="all" />
<!-- phone style -->
<!-- my style css -->
<link rel="stylesheet" href="{{ asset('web/css/my-style.css') }}" type="text/css" media="all" />
<!-- my style css -->
<!-- gallery -->
<link rel="stylesheet" href="{{ asset('web/css/lightbox.css') }}">
<!-- //gallery -->
<!-- font -->

<!-- //font -->
<script src="{{ asset('web/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('web/js/bootstrap.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	@include('frontend.partials.banner_top')
	<!-- banner -->
	@include('frontend.partials.banner')
	<!-- //banner -->
	@yield('pages')
	<!-- footer -->
	@include('frontend.partials.footer')
	<!-- //footer -->
	<script src="{{ asset('web/js/responsiveslides.min.js') }}"></script>
	<script src="{{ asset('web/js/SmoothScroll.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('web/js/move-top.js') }}"></script>
	<script type="text/javascript" src="{{ asset('web/js/easing.js') }}"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<script type="text/javascript">
		var urlEnv = "{{ route('category.posts') }}";
		var urlProduct = "{{ route('product.posts.home') }}"
	</script>
	<script type="text/javascript" src="{{ asset('web/js/my-js.js') }}"></script>
<!-- //here ends scrolling icon -->
</body>	
</html>