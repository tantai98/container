<div class="banner">
	<div class="header">
		<div class="container">
			<div class="header-left">
				<div class="w3layouts-logo">
					<h1>
						<a href="index.html">3D <span>Panel</span></a>
					</h1>
				</div>
			</div>
			<div class="header-right">
				<p><i class="fa fa-phone" aria-hidden="true"></i>0982 60 1111</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="container">
			<div class="top-nav">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav menu">
							@foreach($menus as $keyMenu => $valueMenu)
								<li class="@if(isset($valueMenu['child']) && count($valueMenu['child']) > 0) menu-has-child @endif">
									<a class="@if($keyMenu == 0) active list-border @endif scroll" href="index.html">{{ $valueMenu['menuParents']->name }}</a>
									@if(isset($valueMenu['child']) && count($valueMenu['child']) > 0)
									<div class="menu-child">
										<ul>
											@foreach($valueMenu['child'] as $childMenu)
											<li>
												<a href="" class="">{{ $childMenu->name }}</a>
											</li>
											@endforeach
										</ul>
									</div>
									@endif
								</li>
							@endforeach
							<!-- <li><a class="active list-border scroll" href="index.html">Trang Chủ</a></li>
							<li><a href="#about" class="scroll">Về Chúng Tôi</a></li>
							<li><a href="#services" class="scroll">Dịch vụ</a></li>
							<li><a href="#gallery" class="scroll">Môi Trường</a></li>
							<li class="menu-has-child"><a href="#news" class="scroll">Sản Phẩm</a>
								<div class="menu-child">
									<ul>
										<li><a href="file:///C:/Users/quangvm/tantai/Project/container/web/category.html" class="">Danh sách sản phẩm 1</a></li>
										<li><a href="file:///C:/Users/quangvm/tantai/Project/container/web/category.html" class="">Danh sách sản phẩm 2</a></li>
										<li><a href="file:///C:/Users/quangvm/tantai/Project/container/web/category.html" class="">Danh sách sản phẩm 3</a></li>
										<li><a href="file:///C:/Users/quangvm/tantai/Project/container/web/category.html" class="">Danh sách sản phẩm 4</a></li>
										<li><a href="file:///C:/Users/quangvm/tantai/Project/container/web/category.html" class="">Danh sách sản phẩm 5</a></li>
									</ul>
								</div>
							</li>
							<li class="menu-has-child"><a href="#contact" class="scroll">Dự Án</a>
								<div class="menu-child">
									<ul>
										<li><a href="file:///C:/Users/quangvm/tantai/Project/container/web/category.html" class="">Dự án Tây Nguyên</a></li>
										<li><a href="file:///C:/Users/quangvm/tantai/Project/container/web/category.html" class="">Dự án Đông Bắc Bộ</a></li>
										<li><a href="file:///C:/Users/quangvm/tantai/Project/container/web/category.html" class="">Dự án Tây Bắc Bộ</a></li>
										<li><a href="file:///C:/Users/quangvm/tantai/Project/container/web/category.html" class="">Dự án Miền Trung</a></li>
										<li><a href="file:///C:/Users/quangvm/tantai/Project/container/web/category.html" class="">Dự án Miền Nam</a></li>
									</ul>
								</div>
							</li> -->
						</ul>	
						<div class="clearfix"></div>
					</div>	
				</nav>		
			</div>
		</div>
	</div>
</div>