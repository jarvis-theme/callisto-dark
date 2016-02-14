				<!-- BEGIN .main-left-wrapper -->
				<div class="main-left-wrapper">
					<div class="main-title">
						<p class="custom-font-1">Hasil Pencarian</p>
					</div>

					<div class="blog-list">
						@if($jumlahCari!=0)
							@foreach($hasilpro as $myproduk)
							<div class="item search-result">
								<div class="title custom-font-1">
									<a href="{{product_url($myproduk)}}">{{short_description($myproduk->nama,20)}}</a>
								</div>
								<!-- <div class="title-legend">
									<a href="#" class="date">May 23, 2012</a>
									<a href="#" class="comments">9</a>
									<a href="#" class="share">Share this post</a>
								</div> -->
								<div class="image-wrapper-1">
									<div class="image">
										<div class="image-overlay-1 trans-1">
											<table>
												<tr>
													<td>
														<a href="{{product_url($myproduk)}}" class="button-2 trans-1"></a>
													</td>
												</tr>
											</table>
										</div>
										<a href="{{product_url($myproduk)}}">
											{{HTML::image(product_image_url($myproduk->gambar1,'medium'),$myproduk->nama,array('width'=>'155','height'=>'155'))}}
										</a>
									</div>
								</div>
								<div class="text">
									<p>{{short_description($myproduk->deskripsi,100)}}</p>
									<p><a href="{{product_url($myproduk)}}" class="more-link">Lihat</a></p>
								</div>
							</div>
							@endforeach

							@foreach($hasilhal as $myhal)
							<div class="item">
								<div class="title custom-font-1">
									<a href="{{URL::to('halaman/'.$myhal->slug)}}">{{$myhal->judul}}</a>
								</div>
								<div class="title-legend">
									<a href="#" class="date">{{date("d M Y", strtotime($myhal->updated_at))}}</a>
									<!-- <a href="#" class="share">Share this post</a> -->
								</div>
								<div class="text">
									{{short_description($myhal->isi,100)}}
									<p><a href="{{URL::to('halaman/'.$myhal->slug)}}" class="more-link">Baca Selengkapnya</a></p>
								</div>
							</div>
							@endforeach

							@foreach($hasilblog as $myblog)
							<div class="item">
								<div class="title custom-font-1">
									<a href="{{blog_url($myblog)}}">{{$myblog->judul}}</a>
								</div>
								<div class="title-legend">
									<a href="#" class="date">{{date("d M Y", strtotime($myblog->updated_at))}}</a>
									<!-- <a href="#" class="share">Share this post</a> -->
								</div>
								<div class="text">
									{{short_description($myblog->isi,100)}}
									<p><a href="{{blog_url($myblog)}}" class="more-link">Baca Selengkapnya</a></p>
								</div>
							</div>
							@endforeach
						@else
							<article class="result">
								<i>Data tidak ditemukan</i>
							</article>
						@endif
					</div>

					<div class="pages custom-font-1"></div>
				</div>
				<!-- END .main-left-wrapper -->

				<!-- BEGIN .main-sidebar-wrapper -->
				<div class="main-sidebar-wrapper">
					@if(best_seller()->count() > 0)
					<!-- BEGIN .sidebar-best-sellers -->
					<div class="sidebar-best-sellers sidebar-item">
						<div class="main-title">
							<p class="custom-font-1">Produk Terlaris</p>
						</div>

						<div class="items">
							@foreach(best_seller() as $item)
							<div class="item">
								<!-- <div class="item-tag tag-off custom-font-1">
									<span>20% off</span>
								</div> -->
								<div class="image-wrapper-1">
									<div class="image">
										<div class="image-overlay-1 trans-1">
											<table>
												<tr>
													<td>
														<a href="{{product_url($item)}}" class="button-2 trans-1"></a>
													</td>
												</tr>
											</table>
										</div>
										<a href="#">
											{{HTML::image(product_image_url($item->gambar1,'thumb'),$item->nama,array('class'=>'bestpro'))}}
										</a>
									</div>
								</div>
								<div class="text">
									<h3><a href="#" class="custom-font-1">{{short_description($item->nama, 15)}}</a></h3>
									<p><b class="custom-font-1">{{price($item->hargaJual)}}</b></p>
									<a href="{{product_url($item)}}" class="more-link">Lihat</a>
								</div>
							</div>
							@endforeach

							<div class="clear"></div>
						</div>
					</div>
					<!-- END .sidebar-best-sellers -->
					@endif
					@if(featured_product()->count() > 0)
					<div class="sidebar-best-sellers sidebar-item">
						<div class="main-title">
							<p class="custom-font-1">Produk Pilihan</p>
						</div>

						<div class="items">
							@foreach(featured_product() as $item)
							<div class="item">
								<!-- <div class="item-tag tag-off custom-font-1">
									<span>20% off</span>
								</div> -->
								<div class="image-wrapper-1">
									<div class="image">
										<div class="image-overlay-1 trans-1">
											<table>
												<tr>
													<td>
														<a href="{{product_url($item)}}" class="button-2 trans-1"></a>
													</td>
												</tr>
											</table>
										</div>
										<a href="#">
											{{HTML::image(product_image_url($item->gambar1,'thumb'),$item->nama,array('class'=>'bestpro'))}}
										</a>
									</div>
								</div>
								<div class="text">
									<h3><a href="#" class="custom-font-1">{{short_description($item->nama, 15)}}</a></h3>
									<p><b class="custom-font-1">{{price($item->hargaJual)}}</b></p>
									<a href="{{product_url($item)}}" class="more-link">Lihat</a>
								</div>
							</div>
							@endforeach

							<div class="clear"></div>
						</div>
					</div>
					@endif
				</div>
				<!-- END .main-sidebar-wrapper -->

				<div class="clear"></div>
				<br><br>