<!-- BEGIN .catalog -->
<div class="catalog">

	<div class="main-title">
		
			@if(!empty($kategoridetail))
                <p class="">
					{{breadcrumbProduk(null,'; <span>/</span>',';', true, $kategoridetail)}}
				</p>
            @else
            <ul style="float:left" class="breadcurm">
                <li><a>Produk</a></li>
            </ul>
            @endif
		

		<!-- <a href="#" class="grid-2">4 column view</a>
		<a href="#" class="grid-1">3 column view</a> -->
	</div>

	<form action="#" class="navigation">
		<label>Cari by Kategori:</label>
		<div class="category">
			<select onchange="if(this.options[this.selectedIndex].value != ''){window.top.location.href=this.options[this.selectedIndex].value}">
				<option>Semua produk</option>
				@foreach($kategori as $value)
				<option value="{{URL::to(strtolower('category/'.generateSlug($value)))}}">{{$value->nama}}</option>
				@endforeach
				<!-- <option>Pull &amp; Bear</option>
				<option>Reserved</option>
				<option>United Colors of Benetton</option> -->
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


			@foreach($produk as $myproduk)
			<div class="item-block-2">
				@if($myproduk->koleksiId!=0)
                <!-- <div class="item-tag tag-off custom-font-1">
                    <span>{{$myproduk->koleksi->nama}}</span>
                </div> -->
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
										<a href="{{slugProduk($myproduk)}}" class="button-1 custom-font-1 trans-1"><span>Lihat</span></a>
									</td>
								</tr>
							</table>
						</div>
						<a href="{{slugProduk($myproduk)}}"><img src="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}" alt="{{$myproduk->nama}}" width="294" style="left: 50%; margin-left: -148px; top: 50%; margin-top: -148px;" /></a>
					</div>
				</div>
				<h3><a href="{{slugProduk($myproduk)}}" class="custom-font-1">{{$myproduk->nama}}</a></h3>
				<p><b class="custom-font-1">{{jadiRupiah($myproduk->hargaJual)}}</b></p>
			</div>
			@endforeach

		</div>
	</div>

	<div class="clear"></div>
	
	<div class="pages custom-font-1">
		{{$produk->links()}}
	</div>

	<div class="clear"></div>

<!-- END .catalog -->
</div>
<br><br><br>

<style type="text/css">
	.breadcurm li{
		float:left;
	}
	.breadcurm li a{
		font-size: 16px;
		margin-right: 12px;
	}
	.main-title p a{
		float:left;
		float:left; 
		font-size: 17px; 
		bottom: -8px; 
		position: relative;
		font-weight: normal;
	}

	.main-title p span{
		float:left; 
		font-size: 17px; 
		bottom: -8px; 
		position: relative;
		font-weight: normal;
		margin: 0 5px;
	}

</style>

