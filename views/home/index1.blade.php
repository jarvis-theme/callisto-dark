<!-- BEGIN .catalog -->
<!-- <div class="message-welcome" style="text-align: center; padding: 23px 0px 30px 0; background:none"> -->
	<div class="homepage-slider">
		<div id="hompage-slider_content" class="slides">
			@foreach(horizontal_banner() as $banner)
			<a href="{{url($banner->url)}}">{{HTML::image(banner_image_url($banner->gambar),'Info Promo',array('width'=>'100%'))}}</a>
			@endforeach
		</div>
	</div>

	<div class="featured-items">
		<div class="main-title">
			<p class="custom-font-1">Produk Kami</p>
		</div>

		<div class="items-wrapper">
			<div class="items">
				@foreach(home_product() as $myproduk)
				<div class="item-block-1">
					@if($myproduk->koleksiId != 0)
					<!-- <div class="item-tag tag-off custom-font-1">
						<span>{{$myproduk->koleksi->nama}}</span>
					</div> -->
					@endif
					<div class="image-wrapper-3 imagepro">
						@if(is_outstok($myproduk))
						{{is_outstok($myproduk)}}
						@elseif(is_terlaris($myproduk))
						{{is_terlaris($myproduk)}}
						@elseif(is_produkbaru($myproduk))
						{{is_produkbaru($myproduk)}}
						@endif
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
								{{HTML::image(product_image_url($myproduk->gambar1,'medium'),$myproduk->nama)}}
							</a>
						</div>
					</div>
					<h3><a href="{{product_url($myproduk)}}" class="custom-font-1">{{short_description($myproduk->nama,16)}}</a></h3>
					<p><b class="custom-font-1">{{price($myproduk->hargaJual)}}</b></p>
				</div>
				@endforeach
			</div>
		</div>

		<div class="clear"></div>
		
		<div class="pages custom-font-1">
			{{home_product()->links()}}
		</div>

		<div class="clear"></div>
	</div>
	<!-- END .catalog -->
	<br><br>

	<!-- BEGIN .homepage-about -->
	<div class="col-xs-12 col-sm-2">
		<div class="main-title">
			<p class="custom-font-1">Hubungi Kami</p>
		</div>
		<div class="text">
			<div class="title-legend">
				@if(!empty($shop->ym))
				{{$shop->ym ? ymyahoo($shop->ym) : ''}}
				<br><br>
				@endif

				@if($shop->telepon)
				<a href="#" class="comments" title="Telepon">{{$shop->telepon}}</a>
				@endif
				
				@if($shop->hp)
				<br>
				<a href="#" class="comments" title="SMS">{{$shop->hp}}</a>
				@endif
				
				@if($shop->bb)
				<br>
				<!-- <img src="{{url('img/bbm.png')}}" class="bbm"> -->
				<a href="#" class="comments" title="Pin BB">{{$shop->bb}}</a>
				<br><br>
				@endif
			</div>
		</div>
		<br><br>
	</div>
	<!-- END .homepage-about -->

	<!-- BEGIN .homepage-latest-news -->
	<div class="col-xs-12 col-sm-5">
		<div class="main-title">
			<p class="custom-font-1">Testimonial</p>
			<a href="{{url('testimoni')}}" class="view">Lihat semua</a>
		</div>
		@if(list_testimonial()->count() > 0)
		<div class="items">
			@foreach(list_testimonial() as $items)
			<div class="item">
				<div class="text">
					<h5><a href="#" class="custom-font-1">"{{$items->isi}}"</a></h5>
					<p><a href="#"><i>~ {{$items->nama}}</i></a></p>
				</div>
			</div>
			<br>
			@endforeach
			<br>
		</div>
		@else
		<p class="notfound">Belum ada testimonial.</p>
		@endif
	</div>
	<!-- END .homepage-latest-news -->
	@if(vertical_banner()->count() > 0)
	<!-- BEGIN .homepage-best-sellers -->
	<div class="col-xs-12 col-sm-3 promo">
		<div class="main-title">
			<p class="custom-font-1">Promo</p>
		</div>

		<div class="items">
			@foreach(vertical_banner() as $banner)
			<a target="_blank" href="{{url($banner->url)}}">
				{{HTML::image(banner_image_url($banner->gambar),'Info Promo')}}
			</a>
			<br>
			@endforeach
		</div>
		<div class="clear"></div>
	</div>
	<!-- END .homepage-best-sellers -->
	@endif
	<div class="clear"></div>

	<div class="powerup">
		<div class="cekresi">
			{{pluginSidePowerup()}}
		</div>
		<br>
	</div>
	<div class="clear"></div>
	<br><br><br>