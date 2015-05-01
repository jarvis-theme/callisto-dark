<!-- BEGIN .main-item-wrapper -->
<div class="main-item-wrapper">

	<div class="main-title">
		<p class="" style="font-size: large;">
			{{breadcrumbProduk($produk,'; <span>/</span>',';',true)}}
		</p>
		<!-- <a onclick="window.open(this.href, 'mywin', 'left=20, top=20, width=500, height=500, toolbar=1, resizable=0'); return false;" href="https://www.facebook.com/sharer/sharer.php?u={{product_url($produk)}}" class="share">share this item</a> -->
		<a class="pull-right twitter-share-button" href="https://twitter.com/share" data-count="none">Tweet </a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>&nbsp;&nbsp;
		<iframe class="pull-right" src="//www.facebook.com/plugins/share_button.php?href={{URL::to(product_url($produk))}}&amp;layout=button" scrolling="no" frameborder="0" style="border:none; overflow:hidden;height:20px;width:70px;" allowTransparency="true"></iframe>
	</div>

	<div class="main-image">
		<div class="image-wrapper-3">
			<div id="single-product-slider">
				@if($produk->gambar1!='')
			    <div class="image">
					<a href="#">
						{{ HTML::image(product_image_url($produk->gambar1),'',array('width'=>'470')) }}
					</a>
				</div>
			  	@endif
			  	@if($produk->gambar2!='')			  	
			    <div class="image">
					<a href="#">
						{{ HTML::image(product_image_url($produk->gambar2),'',array('width'=>'470')) }}
					</a>
				</div>
			  	@endif
			  	@if($produk->gambar3!='')			  	
			    <div class="image">
					<a href="#">
						{{ HTML::image(product_image_url($produk->gambar3),'',array('width'=>'470')) }}
					</a>
				</div>
			  	@endif
			  	@if($produk->gambar4!='')			  	
			    <div class="image">
					<a href="#">
						{{ HTML::image(product_image_url($produk->gambar4),'',array('width'=>'470')) }}
					</a>
				</div>
			  	@endif
			</div>
		</div>
		<div class="clear"></div>
		<table>
			<tr>
				@if($produk->gambar1!='')			  	
			    <td>
					<div class="image-wrapper-4 active">
						<div class="image">
							<a href="#">
								{{ HTML::image(product_image_url($produk->gambar1,'thumb'),'',array('width'=>'60')) }}
							</a>
						</div>
					</div>
				</td>
			  	@endif
			  	@if($produk->gambar4!='')			  	
			    <td>
					<div class="image-wrapper-4 active">
						<div class="image">
							<a href="#">
								{{ HTML::image(product_image_url($produk->gambar2,'thumb'),'',array('width'=>'60')) }}
							</a>
						</div>
					</div>
				</td>
			  	@endif
			  	@if($produk->gambar3!='')			  	
			    <td>
					<div class="image-wrapper-4 active">
						<div class="image">
							<a href="#">
								{{ HTML::image(product_image_url($produk->gambar3,'thumb'),'',array('width'=>'60')) }}
							</a>
						</div>
					</div>
				</td>
			  	@endif
			  	@if($produk->gambar4!='')			  	
			    <td>
					<div class="image-wrapper-4 active">
						<div class="image">
							<a href="#">
								{{ HTML::image(product_image_url($produk->gambar4,'thumb'),'',array('width'=>'60')) }}
							</a>
						</div>
					</div>
				</td>
			  	@endif
			</tr>
		</table>
	</div>

	<div class="text">		
		<h2 class="custom-font-1"><a href="#">{{$produk->nama}}</a></h2>
		<div class="price custom-font-1" >
			<div style="width: auto">
				<p>{{ price($produk->hargaJual) }}</p>
				@if($produk->hargaCoret != 0)
				<p><s>{{ price($produk->hargaCoret) }}</s></p>
				@endif
			</div>
			
			<div class="clear"></div>
		</div>

		<div class="options">
			<form action="#" id='addorder'>
				<div class="item">
					<label>Jumlah :</label>
					<div class="select">
          				<input type="text" class="input-text-1" name='qty' value="1">
          			</div>
          			<div class="clear"></div><br>
          		</div>
				@if($opsiproduk->count()>0)		
					<div class="item">
						<label>Pilih Opsi:</label>
						<div class="select">	
							<select name="opsiproduk">
								<option value="">-- Pilih Opsi --</option>
								@foreach ($opsiproduk as $key => $opsi)
								<option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
									
									{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{price($opsi->harga)}}
									
								</option>
								@endforeach
							</select>
						</div>
						<div class="clear"></div><br>
						
					</div>
				@endif
				<div class="item">
					<button class="button-3 custom-font-1 trans-1 add_cart"><span>Masukan ke Keranjang</span></button>
				</div>
			</form>
		</div>
		
		<div class="description">
			<div class="button-navigation custom-font-1">
				<table style="margin:0;">
					<tr>
						<td>
							<a href="#" class="active"><span>Deskripsi</span></a>
							<a href="#"><span>Reviews</span></a>
						</td>
					</tr>
				</table>
			</div>
			<div class="items">
				<div id="description_slider">
					<div class="item" style="text-align:justify;width:100%;">
						<p>{{$produk->deskripsi}}</p>
					</div>
					<div class="item">
						{{pluginTrustklik()}}
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="clear"></div>

<!-- END .main-item-wrapper -->
</div>

@if(count(other_product($produk)) > 0)
<!-- BEGIN .related-items -->
<div class="featured-items related-items">
	<div class="main-title">
		<p class="custom-font-1">Related items</p>
	</div>

	<div class="items-wrapper">
		<div class="items">
			@foreach(other_product($produk) as $myproduk)
			<div class="item-block-1" >
				<!-- <div class="item-tag tag-off custom-font-1">
					<span>Sale</span>
				</div> -->
				
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
						<a href="#">
							{{HTML::image(product_image_url($myproduk->gambar1),$myproduk->nama,array('width'=>'214','style'=>'left: 50%; margin-left: -107px; top: 50%; margin-top: -106px;'))}}
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
<!-- END .related-items -->
</div>
@endif
<div class="clear"></div><br><br><br>