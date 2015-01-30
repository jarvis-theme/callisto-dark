<!-- BEGIN .main-left-wrapper -->
				<div class="main-left-wrapper">

					<!-- BEGIN .post-wrapper -->
					<div class="post-wrapper">

						<h2 class="post-title custom-font-1"><a href="#">{{$detailblog->judul}}</a></h2>
						<div class="title-legend">
							<a href="#" class="date">{{date("d M Y", strtotime($detailblog->updated_at))}}</a>
							<!-- <a href="#" class="comments">9</a> -->
							<a onclick="window.open(this.href, 'mywin', 'left=20, top=20, width=500, height=500, toolbar=1, resizable=0'); return false;" href="https://www.facebook.com/sharer/sharer.php?u={{URL::to('blog/'.$detailblog->slug)}}" class="share">Bagi post ini</a>
						</div>

						{{$detailblog->isi}}

					<!-- END .post-wrapper -->
					</div>

					<div class="comments-wrapper">
						{{$fbscript}}
						{{$fbcomment}}
					</div>

					<div class="pages custom-font-1">
						<div>
							@if(isset($next))
								<a class="next" href="{{$next->slug}}">Selanjutnya</a>
							@else
								<a class="next"></a>
							@endif
							@if(isset($prev))
								<a class="previous" href="{{$prev->slug}}"> Sebelumnya</a>
							@else
								<a class="previous"></a>
							@endif
						</div>
					</div>

				<!-- END .main-left-wrapper -->
				</div>

				<!-- BEGIN .main-sidebar-wrapper -->
				<div class="main-sidebar-wrapper">

					<!-- BEGIN .shop-by-category -->
					<div class="shop-by-category sidebar-item">
						<div class="main-title">
							<p class="custom-font-1">Blog by category</p>
						</div>
						<form action="#">
							<select onchange="if(this.options[this.selectedIndex].value != ''){window.top.location.href=this.options[this.selectedIndex].value}">
								<option>select category</option>
								@foreach($categoryList as $key=>$value)
									<option value="{{URL::to('blog/category/'.generateSlug($value))}}">{{$value->nama}}</option>
								@endforeach
							</select>
						</form>
					<!-- END .shop-by-category -->
					</div>

					<!-- BEGIN .post-tags -->
					<div class="post-tags sidebar-item">
						<div class="main-title">
							<p class="custom-font-1">Post tags</p>
						</div>
						{{ getTags('<span class="s-tag" style="text-decoration: underline;"></span>',$tag)}}	
						<div class="clear"></div>
					<!-- END .post-tags -->
					</div>

					<!-- BEGIN .recent-activity -->
					<div class="recent-activity sidebar-item">

						<div class="main-title">
							<p class="custom-font-1">Artikel Baru</p>
						</div>

						@foreach(recentBlog() as $recent)
							<div class="item">
								<div class="text">
									<h3><a href="#" class="custom-font-1">{{$recent->judul}}</a></h3>
									<div class="title-legend">
										<a href="#" class="date">{{waktu($recent->updated_at)}}</a>
										
									</div>
									<a href="{{URL::to('blog/'.$recent->slug)}}" class="more-link">Read more</a>
								</div>
							</div>
						@endforeach
						<br><br><br>

					<!-- END .recent-activity -->
					</div>

					

				<!-- END .main-sidebar-wrapper -->
				</div>

				<div class="clear"></div>
				<br><br><br>