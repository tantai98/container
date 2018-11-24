<div class="gallery" id="gallery">
	<div class="w3-gallery-top">
		<h3>M</h3>
	</div>
	<div class="w3l-about w3l-gallery">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Môi trường làm việc</h3>
			</div>
			<div class="text-center margin-top-15">
				<ul class="menu-in-box">
					@foreach($categorieChilds as $categorieChild)
					<li class="change-color-menu">
						<a href="javascript:void(0)" data-id="{{ $categorieChild->id }}">{{ $categorieChild->name }}</a>
					</li>
					@endforeach
				</ul>
				<div class="clearfix"> </div>
			</div>
			<div class="gallery-grids" id="post_env">
					@foreach($posts as $post)
					<div class="col-md-3 gallery-grid height-env">
						<div class="grid height-100">
							<figure class="effect-apollo">
								<a class="example-image-link" href="{{ route('frontend.bai-viet.slug',['id'=>$post->id,'slug'=>$post->slug]) }}" data-lightbox="example-set" data-title="$post->title" target="_blank">
									<img src="{{ asset($post->img) }}" alt="" />
									<figcaption>
									</figcaption>	
								</a>
							</figure>
						</div>
					</div>
					@endforeach
					<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>