<!-- BEGIN .catalog -->

<!-- BEGIN .message-welcome -->
<!-- <div class="message-welcome" style="text-align: center; padding: 23px 0px 30px 0; background:none"> -->
	<div class="homepage-slider">
		<div id="hompage-slider_content" style="text-align: center; padding: 1px 0 30px; height: auto;">
		@foreach(horizontal_banner() as $banner)
			<a href="{{url($banner->url)}}">{{HTML::image(banner_image_url($banner->gambar),'slideshow',array('width'=>'100%'))}}</a>
		@endforeach
<!-- END .message-welcome -->
		</div>
	</div>

<div class="featured-items">
	<div class="main-title">
		<p class="custom-font-1">Produk Kami</p>
	</div>

	<div class="items-wrapper">
		<div class="items">
			@foreach(list_product(9,@$category) as $myproduk)
			<div class="item-block-1">
				@if($myproduk->koleksiId != 0)
				<div class="item-tag tag-off custom-font-1">
					<span>{{$myproduk->koleksi->nama}}</span>
				</div>
				@endif
				<div class="image-wrapper-3" style="position: relative;">
					{{is_terlaris($myproduk)}}
					{{is_produkbaru($myproduk)}}
					{{is_outstok($myproduk)}}
					<div class="image">
						<div class="image-overlay-1 trans-1">
							<table>
								<tr>
									<td>
										<a href="{{product_url($myproduk)}}" class="button-1 custom-font-1 trans-1"><span>Lihat</span></a>
									</td>
								</tr>
							</table>
						</div>
						<a href="{{product_url($myproduk)}}">
							{{HTML::image(product_image_url($myproduk->gambar1),'',array('width'=>'294','style'=>'left: 50%; margin-left: -147px; top: 50%; margin-top: -188px;'))}}
						</a>
					</div>
				</div>
				<h3><a href="{{product_url($myproduk)}}" class="custom-font-1">{{$myproduk->nama}}</a></h3>
				<p><b class="custom-font-1">{{price($myproduk->hargaJual)}}</b></p>
			</div>
			@endforeach

		</div>
	</div>

	<div class="clear"></div>
	
	<div class="pages custom-font-1">
		{{list_product(9,@$category)->links()}}
	</div>

	<div class="clear"></div>
<!-- END .catalog -->

</div>
<br><br>

<!-- BEGIN .homepage-about -->
<div class="homepage-best-sellers" style="margin-right: 50px; width: auto;">

	<div class="main-title">
		<p class="custom-font-1">Hubungi Kami</p>
	</div>
	<div class="text">
		<div class="title-legend">
			{{$shop->ym ? ymyahoo($shop->ym) : ''}}
			
			@if($shop->telepon)
				<a href="#" class="comments">{{$shop->telepon}}</a>
				<br>
			@endif
			
			@if($shop->hp)
				<a href="#" class="comments">{{$shop->hp}}</a>
				<br>
			@endif
			
			@if($shop->bb)
				<!-- <img src="{{url('img/bbm.png')}}" style="width: 30px;"> -->
				<a href="#" class="comments">{{$shop->bb}}</a>
				<br><br>
			@endif
		</div>
	</div>
<!-- END .homepage-about -->
</div>

<!-- BEGIN .homepage-latest-news -->
<div class="" style="float: left;margin: 0px 45px 0px 0px;width: 350px;">
	<div class="main-title">
		<p class="custom-font-1">Testimonial</p>
		<a href="{{url('testimoni')}}" class="view">Lihat semua</a>
	</div>

	<div class="items">
		@foreach(list_testimonial() as $items)
		<div class="item">
			<div class="text">
				<h5><a href="#" class="custom-font-1">"{{$items->isi}}"</a></h5>
				<!-- <div class="title-legend">
					<a href="#" class="date">May 23, 2012</a>
					<a href="#" class="comments">9</a>
				</div> -->
				<p><a href="#">&nbsp;   {{$items->nama}}</a></p>
			</div>
		</div>
		@endforeach
		<br>
	</div>
<!-- END .homepage-latest-news -->
</div>

<!-- BEGIN .homepage-best-sellers -->
<div class="homepage-about">
	<div class="main-title">
		<p class="custom-font-1">Banner</p>
	</div>

	<div class="items">
		@foreach(vertical_banner() as $banner)
			<a target="_blank" href="{{url($banner->url)}}">
			{{HTML::image(banner_image_url($banner->gambar))}}
			</a>
		@endforeach
	</div>
	<div class="clear"></div>
<!-- END .homepage-best-sellers -->
</div>
<div class="clear"></div><br><br><br>