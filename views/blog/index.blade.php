				<!-- BEGIN .main-left-wrapper -->
				<div class="main-left-wrapper">

					<div class="main-title">
						<p class="custom-font-1">{{$title}}</p>
					</div>

					<div class="blog-list">

						@foreach(list_blog(null,@$blog_category) as $key=>$value)
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
						{{list_blog(null,@$blog_category)->links()}}
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

						<div class="items">
							@foreach(recentBlog() as $recent)
							<div class="item">
								<div class="text">
									<h3><a href="{{blog_url($recent)}}" class="custom-font-1">{{$recent->judul}}</a></h3>
									<div class="title-legend">
										<a href="#" class="date">{{waktu($recent->updated_at)}}</a>
									</div>
									<a href="{{blog_url($recent)}}" class="more-link">Baca Selengkapnya</a>
								</div>
							</div>
							@endforeach
						</div>
						<br><br><br>
					<!-- END .recent-activity -->
					</div>
				<!-- END .main-sidebar-wrapper -->
				</div>

				<div class="clear"></div>
				<br><br><br>