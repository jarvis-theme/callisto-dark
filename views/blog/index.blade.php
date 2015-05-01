				<!-- BEGIN .main-left-wrapper -->
				<div class="main-left-wrapper">

					<div class="main-title">
						<p class="custom-font-1">{{$title}}</p>
					</div>

					<div class="blog-list">

						@foreach(list_blog(5,@$blog_category) as $key=>$value)
						<div class="item">
							<div class="title custom-font-1">
								<a href="{{blog_url($value)}}">{{$value->judul}}</a>
							</div>
							<div class="title-legend">
								<a href="#" class="date">{{date("d M Y", strtotime($value->updated_at))}}</a>
								<!-- <a href="#" class="comments">9</a> -->
								<a onclick="window.open(this.href, 'mywin', 'left=20, top=20, width=500, height=500, toolbar=1, resizable=0'); return false;" href="https://www.facebook.com/sharer/sharer.php?u={{blog_url($value)}}" class="share">Bagi post ini</a>
							</div>
							<div class="text">
								<p>{{short_description($value->isi,250)}}</p>
								<p><a href="{{blog_url($value)}}" class="more-link">Baca Selengkapnya</a></p>
							</div>
						</div>
						@endforeach

					</div>

					<div class="pages custom-font-1">
						{{list_blog(5,@$blog_category)->links()}}
					</div>

				<!-- END .main-left-wrapper -->
				</div>

				<!-- BEGIN .main-sidebar-wrapper -->
				<div class="main-sidebar-wrapper">

					<!-- BEGIN .shop-by-category -->
					<div class="shop-by-category sidebar-item">
						<div class="main-title">
							<p class="custom-font-1">Cari by Kategori</p>
						</div>
						<form action="#">
							<select onchange="if(this.options[this.selectedIndex].value != ''){window.top.location.href=this.options[this.selectedIndex].value}">
								<option>select category</option>
								@foreach(list_blog_category() as $key=>$value)
									<option value="{{blog_category_url($value)}}">{{$value->nama}}</option>
								@endforeach
							</select>
						</form>
					<!-- END .shop-by-category -->
					</div>

					<!-- BEGIN .recent-activity -->
					<div class="recent-activity sidebar-item">

						<div class="main-title">
							<p class="custom-font-1">Artikel Baru</p>
						</div>

						<!-- <div class="button-navigation custom-font-1">
							<table>
								<tr>
									<td>
										<a href="#" class="active"><span>Popular</span></a>
										<a href="#"><span>Recent</span></a>
										<a href="#"><span>Comments</span></a>
									</td>
								</tr>
							</table>
						</div> -->

						<div class="items">

							@foreach(recentBlog() as $recent)
							<div class="item">
								<div class="text">
									<h3><a href="{{blog_url($recent)}}" class="custom-font-1">{{$recent->judul}}</a></h3>
									<div class="title-legend">
										<a href="#" class="date">{{waktu($recent->updated_at)}}</a>
										<!-- <a href="#" class="comments">9</a> -->
									</div>
									<a href="{{blog_url($recent)}}" class="more-link">Baca Selengkapnya</a>
								</div>
							</div>
							@endforeach

						</div>
						<br><br><br>

					<!-- END .recent-activity -->
					</div>

					<!-- BEGIN .sidebar-best-sellers 
					<div class="sidebar-best-sellers sidebar-item">

						<div class="main-title">
							<p class="custom-font-1">Best sellers</p>
						</div>

						<div class="items">

							<div class="item">
								<div class="item-tag tag-off custom-font-1">
									<span>20% off</span>
								</div>
								<div class="image-wrapper-1">
									<div class="image">
										<div class="image-overlay-1 trans-1">
											<table>
												<tr>
													<td>
														<a href="#" class="button-2 trans-1"></a>
													</td>
												</tr>
											</table>
										</div>
										<a href="#"><img src="images/photos/photo-26.jpg" alt="" width="94" height="94" /></a>
									</div>
								</div>
								<div class="text">
									<h3><a href="#" class="custom-font-1">Printed womens jump suit</a></h3>
									<p><b class="custom-font-1">$120</b></p>
									<a href="#" class="more-link">Details</a>
								</div>
							</div>

							<div class="item">
								<div class="image-wrapper-1">
									<div class="image">
										<div class="image-overlay-1 trans-1">
											<table>
												<tr>
													<td>
														<a href="#" class="button-2 trans-1"></a>
													</td>
												</tr>
											</table>
										</div>
										<a href="#"><img src="images/photos/photo-27.jpg" alt="" width="94" height="94" /></a>
									</div>
								</div>
								<div class="text">
									<h3><a href="#" class="custom-font-1">Polka dot cashmere foulardt</a></h3>
									<p><b class="custom-font-1">$29</b></p>
									<a href="#" class="more-link">Details</a>
								</div>
							</div>

							<div class="item">
								<div class="image-wrapper-1">
									<div class="image">
										<div class="image-overlay-1 trans-1">
											<table>
												<tr>
													<td>
														<a href="#" class="button-2 trans-1"></a>
													</td>
												</tr>
											</table>
										</div>
										<a href="#"><img src="images/photos/photo-28.jpg" alt="" width="94" height="94" /></a>
									</div>
								</div>
								<div class="text">
									<h3><a href="#" class="custom-font-1">Imitation leather wallet</a></h3>
									<p><b class="custom-font-1">$49</b></p>
									<a href="#" class="more-link">Details</a>
								</div>
							</div>

							<div class="clear"></div>

						</div>

					 END .sidebar-best-sellers 
					</div>-->

					<!-- BEGIN .sidebar-twitter 
					<div class="sidebar-twitter">

						<div class="main-title">
							<p class="custom-font-1">Twitter</p>
							<a href="#" class="follow">follow us</a>
						</div>

						<div class="items">

							<div class="item">
								<div class="tweet">
									<div>
										<a href="#">@Crasnon</a> sem in felis consequat curss vitae pla cerat erat. Ut purus ipsum, laoreet at iaculis non, iaculis.
									</div>
								</div>
								<div class="title-legend">
									<a href="#" class="date">8 hours ago</a>
									<a href="#" class="view">View tweet</a>
								</div>
							</div>

							<div class="item">
								<div class="tweet">
									<div>
										Quisque fringilla, enim volutpat commodo gravida, mi eros faucibus massa, sed pellentesque est nisl neque.
									</div>
								</div>
								<div class="title-legend">
									<a href="#" class="date">16 hours ago</a>
									<a href="#" class="view">View tweet</a>
								</div>
							</div>

							<div class="item">
								<div class="tweet">
									<div>
										Suspendisse ut cursus ligula. Nam quis tellus quis <a href="#">tortor suscipit</a> tincidunt.
									</div>
								</div>
								<div class="title-legend">
									<a href="#" class="date">2 days ago</a>
									<a href="#" class="view">View tweet</a>
								</div>
							</div>

						</div>

					<!-- END .sidebar-twitter 
					</div>-->

				<!-- END .main-sidebar-wrapper -->
				</div>

				<div class="clear"></div>
				<br><br><br>
