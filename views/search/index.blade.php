				<!-- BEGIN .main-left-wrapper -->
				<div class="main-left-wrapper">

					<div class="main-title">
						<p class="custom-font-1">Search results</p>
					</div>

					<div class="blog-list">

						@if($jumlahCari!=0)

							@foreach($hasilpro as $myproduk)
								<div class="item search-result">
									<div class="title custom-font-1">
										<a href="{{slugProduk($myproduk)}}">{{$myproduk->nama}}</a>
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
															<a href="{{slugProduk($myproduk)}}" class="button-2 trans-1"></a>
														</td>
													</tr>
												</table>
											</div>
											<a href="{{slugProduk($myproduk)}}">
												{{HTML::image(product_image_url($myproduk->gambar1,'medium'),$myproduk->nama,array('width'=>'155','height'=>'155'))}}
											</a>
										</div>
									</div>
									<div class="text">
										<p>{{shortDescription($myproduk->deskripsi,100)}}</p>
										<p><a href="{{slugProduk($myproduk)}}" class="more-link">Lihat</a></p>
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
										<!-- <a href="#" class="comments">9</a> -->
										<a href="#" class="share">Share this post</a>
									</div>
									<div class="text">
										{{shortDescription($myhal->isi,100)}}
										<p><a href="{{URL::to('halaman/'.$myhal->slug)}}" class="more-link">Baca Selengkapnya</a></p>
									</div>
								</div>

							@endforeach

							@foreach($hasilblog as $myblog)
								<div class="item">
									<div class="title custom-font-1">
										<a href="{{URL::to('blog/'.$myblog->slug)}}">{{$myblog->judul}}</a>
									</div>
									<div class="title-legend">
										<a href="#" class="date">{{date("d M Y", strtotime($myblog->updated_at))}}</a>
										<!-- <a href="#" class="comments">9</a> -->
										<a href="#" class="share">Share this post</a>
									</div>
									<div class="text">
										{{shortDescription($myblog->isi,100)}}
										<p><a href="{{URL::to('blog/'.$myblog->slug)}}" class="more-link">Baca Selengkapnya</a></p>
									</div>
								</div>

							@endforeach
					@else
						<article style="text-align: center; border: 0;">
							<i>Hasil tidak ditemukan</i>
						</article>
					@endif
				
					</div>

					<div class="pages custom-font-1">

					</div>

				<!-- END .main-left-wrapper -->
				</div>

				<!-- BEGIN .main-sidebar-wrapper -->
				<div class="main-sidebar-wrapper">

					<!-- BEGIN .sidebar-best-sellers -->
					<div class="sidebar-best-sellers sidebar-item">

						<div class="main-title">
							<p class="custom-font-1">Best sellers</p>
						</div>

						<div class="items">

							@foreach($bestseller as $item)
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
														<a href="{{slugProduk($item)}}" class="button-2 trans-1"></a>
													</td>
												</tr>
											</table>
										</div>
										<a href="#">
											{{HTML::image(product_image_url($item->gambar1,'medium'),'',array('style'=>'width:94px; height:94px;'))}}
										</a>
									</div>
								</div>
								<div class="text">
									<h3><a href="#" class="custom-font-1">{{shortDescription($item->nama, 15)}}</a></h3>
									<p><b class="custom-font-1">{{jadiRupiah($item->hargaJual)}}</b></p>
									<a href="{{slugProduk($item)}}" class="more-link">Lihat</a>
								</div>
							</div>
							@endforeach

							<div class="clear"></div>

						</div>

					<!-- END .sidebar-best-sellers -->
					</div>

					<!-- BEGIN .sidebar-best-sellers -->
					<div class="sidebar-best-sellers sidebar-item">

						<div class="main-title">
							<p class="custom-font-1">Featured</p>
						</div>

						<div class="items">

							@foreach($featured as $item)
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
														<a href="{{slugProduk($item)}}" class="button-2 trans-1"></a>
													</td>
												</tr>
											</table>
										</div>
										<a href="#">
											{{HTML::image(product_image_url($item->gambar1,'medium'),'',array('style'=>'width:94px; height:94px;'))}}
										</a>
									</div>
								</div>
								<div class="text">
									<h3><a href="#" class="custom-font-1">{{shortDescription($item->nama, 15)}}</a></h3>
									<p><b class="custom-font-1">{{jadiRupiah($item->hargaJual)}}</b></p>
									<a href="{{slugProduk($item)}}" class="more-link">Lihat</a>
								</div>
							</div>
							@endforeach

							<div class="clear"></div>

						</div>

					<!-- END .sidebar-best-sellers -->
					</div>

				<!-- END .main-sidebar-wrapper -->
				</div>

				<div class="clear"></div>
				<br><br>