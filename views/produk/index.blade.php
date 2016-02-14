<!-- BEGIN .catalog -->
<div class="catalog">
	<div class="main-title">
		<p class="breadcrumbpro">
			{{breadcrumbProduk(null,'; <span>/</span>',';', true, @$category, @$colection)}}
		</p>
	</div>
	<!-- <div class="main-title"> -->
		<!-- <a href="#" class="grid-2">4 column view</a>
		<a href="#" class="grid-1">3 column view</a> -->
	<!-- </div> -->

	<form action="#" class="navigation">
		<label>Cari Produk Kategori:</label>
		<div class="category">
			<select onchange="if(this.options[this.selectedIndex].value != ''){window.top.location.href=this.options[this.selectedIndex].value}">
				<option value="{{url('produk')}}">Semua produk</option>
				@foreach(list_category() as $key => $menu)
					@if($menu->parent == 0)
						@if(count($menu->anak) == 0)
							<option value="{{category_url($menu)}}" {{URL::current() == category_url($menu) ? 'selected="selected"' : ''}}>{{$menu->nama}}</option>
						@elseif(count($menu->anak) >= 1)
							<option value="{{category_url($menu)}}" {{URL::current() == category_url($menu) ? 'selected="selected"' : ''}}>{{$menu->nama}}</option>
							@foreach($menu->anak as $key=>$submenu)
								@if($menu->id==$submenu->parent)
								<option value="{{category_url($submenu)}}" class="submenu" {{URL::current() == category_url($submenu) ? 'selected="selected"' : ''}}>{{$submenu->nama}}</option>
								@endif
								@if(count($submenu->anak) > 0)
									@foreach($submenu->anak as $submenu2)
									<option value="{{category_url($submenu2)}}" class="submenu2" {{URL::current() == category_url($submenu2) ? 'selected="selected"' : ''}}>{{$submenu2->nama}}</option>
									@endforeach
								@endif
							@endforeach
						@endif
					@endif
				@endforeach
			</select>
		</div>
		<!-- <label class="label-sort">Sort by:</label>
		<div class="sort">
			<select>
				<option>date added (newest first)</option>
				<option>date added (oldest first)</option>
				<option>popularity (most popular first)</option>
			</select>
		</div> -->
		<!-- <label class="total">97 items total</label> -->
	</form>

	<div class="items-wrapper">
		<div class="items">
			@foreach(list_product(null,@$category,@$colection) as $myproduk)
			<div class="item-block-2">
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
							{{HTML::image(product_image_url($myproduk->gambar1,'large'),$myproduk->nama)}}
						</a>
					</div>
				</div>
				<h3><a href="{{product_url($myproduk)}}" class="custom-font-1">{{short_description($myproduk->nama, 20)}}</a></h3>
				<p><b class="custom-font-1">{{price($myproduk->hargaJual)}}</b></p>
			</div>
			@endforeach
		</div>
	</div>

	<div class="clear"></div>
	
	<div class="pages custom-font-1">
		{{list_product(null,@$category,@$colection)->links()}}
	</div>

	<div class="clear"></div>
</div>
<!-- END .catalog -->
<div class="powerup">
    <div class="cekresi">
        {{pluginSidePowerup()}}
    </div>
    <br>
</div>
<br><br><br>