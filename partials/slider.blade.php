<!-- BEGIN .homepage-slider -->
<div class="homepage-slider">

	<!-- BEGIN  #hompage-slider_content -->
	<div id="hompage-slider_content" style="height: 410px;">
		@foreach ($slideshow as $val)
		<div class="item">
			@if($val->text)
 				<div class="title">
				<!--<h3 class="custom-font-1">New 2012 summer apparel collection</h3> -->
				<p>{{ $val->text }}</p>
			</div> 
			@endif
			
			<a href="#">
				<img src="{{URL::to(getPrefixDomain().'/galeri/'.$val->gambar.'?'.Time())}}" alt="{{$val->gambar}}" style="width:944px" />
			</a>
		</div>
		@endforeach
		
	<!-- END #hompage-slider_content -->
	</div>
	
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

<!-- END .homepage-slider --> 
</div>
