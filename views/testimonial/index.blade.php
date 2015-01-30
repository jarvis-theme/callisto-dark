@if(Session::has('msg'))
<div class="success" id='message' style='display:none'>
  <p>Terima kasih, testimonial anda sudah terkirim.</p>
</div>
@endif
@if($errors->all())
<div class="error" id='message' style='display:none'>
Terjadi kesalahan dalam menyimpan data.<br>
<ul>
    @foreach($errors->all() as $message)
    <li>{{ $message }}</li>
    @endforeach
</ul>
</div>
@endif

<!-- BEGIN .main-left-wrapper -->
				<div class="main-left-wrapper">

					<div class="main-title">
						<p class="custom-font-1">{{$nama}}</p>
					</div>

					<div class="blog-list">

						@foreach($testimonial as $key=>$value)
						<div class="item">
							<div class="title custom-font-1">
								<a href="#">{{$value->nama}}</a>
							</div>
							<div class="title-legend">
								<a href="#" class="date">{{date("d M Y", strtotime($value->updated_at))}}</a>
								<!-- <a href="#" class="comments">9</a> -->
								<!-- <a href="#" class="share">Share this post</a> -->
							</div>
							<div class="text">
								<p>{{substr($value->isi,0,250)}}</p>
							</div>
						</div>
						@endforeach

					</div>

					<div class="pages custom-font-1">
              			{{$testimonial->links()}}
					</div>

				<!-- END .main-left-wrapper -->
				</div>

				<!-- BEGIN .main-sidebar-wrapper -->
				<div class="main-sidebar-wrapper">

					<!-- BEGIN .shop-by-category -->
					<div class="shop-by-category sidebar-item">
						<div class="main-title">
							<p class="custom-font-1">Buat Testimonial</p>
						</div>
						<form action="{{URL::to('testimoni')}}" method="post">
							<label>Nama</label><br><input style="width: 100%;" type="text" name="nama" class="input-text-1" required><br><br>
							<label>Testimonial</label><br><textarea style="width: 95%;" name="testimonial" class="textarea-1" required></textarea><br>
							<button style="" class="button-1 custom-font-1"><span style="background: none; padding: 5px 15px 5px 15px;">Kirim Testimonial</span></button>
						</form>
					<!-- END .shop-by-category -->
					</div>

					<!-- BEGIN .recent-activity -->


				<!-- END .main-sidebar-wrapper -->
				</div>

<div class="clear"></div>
<br><br><br>
