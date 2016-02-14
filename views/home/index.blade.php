<div class="homepage-slider">
	<div id="hompage-slider_content main-banner">
		@foreach(horizontal_banner() as $banner)
		<a href="{{url($banner->url)}}">
			{{HTML::image(banner_image_url($banner->gambar),'Info Promo',array('width'=>'100%'))}}
		</a>
		@endforeach
	</div>
</div>
<br>
<!-- BEGIN .featured-items -->
<div class="featured-items">
	<div class="main-title">
		<p class="custom-font-1">Produk Kami</p>
		<a href="{{url('produk')}}" class="view">Lihat produk yang lainnya</a>
	</div>

	<div class="items-wrapper">
		<div class="items">
			@foreach(home_product() as $myproduk)
			<div class="item-block-1">
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
				<h3><a href="{{product_url($myproduk)}}" class="custom-font-1">{{short_description($myproduk->nama,20)}}</a></h3>
				<p><b class="custom-font-1">{{price($myproduk->hargaJual)}}</b></p>
			</div>
			@endforeach
		</div>
	</div>

	<div class="clear"></div>
</div>
<!-- END .featured-items -->
@if(vertical_banner()->count() > 0)
<!-- BEGIN .homepage-about -->
<div class="homepage-about">
	<div class="main-title">
		<p class="custom-font-1">Promo</p>
	</div>

	<p class="caps">
		@foreach(vertical_banner() as $banner)
		<a href="{{url($banner->url)}}">
			<img src="{{banner_image_url($banner->gambar)}}" alt="Info Promo" />
		</a>
		@endforeach
	</p>
</div>
<!-- END .homepage-about -->
@endif
<!-- BEGIN .homepage-latest-news -->
<div class="homepage-latest-news">
	<div class="main-title">
		<p class="custom-font-1">Artikel Terbaru</p>
		<a href="{{url('blog')}}" class="view">lihat artikel lainnya</a>
	</div>
	@if(recentBlog()->count() > 0)
	<div class="items">
		@foreach(recentBlog(null,3) as $key=>$blog)
		<div class="item">
			<div class="text">
				<h3><a href="{{blog_url($blog)}}" class="custom-font-1">{{$blog->judul}}</a></h3>
				<div class="title-legend">
					<a href="{{blog_url($blog)}}" class="date">{{waktuTgl($blog->updated_at)}}</a>
				</div>
				<p>{{short_description($blog->isi,130)}}. <a href="{{blog_url($blog)}}" class="more-link">Baca selengkapnya</a></p>
			</div>
		</div>
		@endforeach 
	</div>
	@else
	<p class="notfound">Tidak ada artikel terbaru.</p>
	@endif
</div>
<!-- END .homepage-latest-news -->
@if(best_seller()->count() > 0)
<!-- BEGIN .homepage-best-sellers -->
<div class="homepage-best-sellers">
	<div class="main-title">
		<p class="custom-font-1">Produk Terlaris</p>
	</div>

	<div class="items">
		@foreach(best_seller(3) as $key=>$best)
		<div class="item">
			<div class="image-wrapper-1">
				<div class="image">
					<div class="image-overlay-1 trans-1">
						<table>
							<tr>
								<td>
									<a href="{{url(product_image_url($best->gambar1,'medium'))}}" class="button-2 trans-1"></a>
								</td>
							</tr>
						</table>
					</div>
					<a href="{{url(product_image_url($best->gambar1,'medium'))}}">
						<img src="{{url(product_image_url($best->gambar1,'medium'))}}" class="best" alt="{{$best->nama}}" />
					</a>
				</div>
			</div>
			<div class="text">
				<p class="nr custom-font-1">{{$key+1}}</p>
				<small><b class="custom-font-1 bestprice">{{price($best->hargaJual)}}</b></small>
				<p class="more-link-wrapper"><a href="{{product_url($best)}}" class="more-link">Detail</a></p>
			</div>
		</div>
		@endforeach
	</div>
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