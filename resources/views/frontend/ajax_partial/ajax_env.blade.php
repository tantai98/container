@foreach($posts as $post)
<div class="col-md-3 gallery-grid height-env">
	<div class="grid height-100">
		<figure class="effect-apollo">
			<a class="example-image-link" href="{{ route('frontend.bai-viet.slug',['id'=>$post->id,'slug'=>$post->slug]) }}" data-lightbox="example-set" data-title="$post->title" target="_blank">
				<img src="{{ asset($post->img) }}" alt="" class="height-100" />
				<figcaption>
				</figcaption>	
			</a>
		</figure>
	</div>
</div>
@endforeach