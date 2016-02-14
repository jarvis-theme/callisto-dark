<!-- BEGIN .homepage-slider -->
<div class="homepage-slider">
	<!-- BEGIN  #hompage-slider_content -->
	<div id="hompage-slider_content">
		@foreach (slideshow() as $val)
		<div class="item">
			@if(!empty($val->text))
			<div class="title">
				<h3 class="custom-font-1">{{ $val->text }}</h3> 
			</div>
			@endif
			
			@if(!empty($slides->url))
			<a href="{{filter_link_url($slides->url)}}" target="_blank">
			@else
			<a href="#">
			@endif
				<img src="{{url(slide_image_url($val->gambar))}}" alt="{{$val->gambar}}">
			</a>
		</div>
		@endforeach
	</div>
	<!-- END #hompage-slider_content -->
	
	<div class="navigation custom-font-1">
		<table>
			<tr>
				<td>
					<a href="#" class="previous">Previous</a>
					<span id="pager">
						<a href="#" class="bullet"></a>
						<a href="#" class="bullet"></a>
						<a href="#" class="bullet"></a>
					</span>
					<a href="#" class="next">Next</a>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- END .homepage-slider -->