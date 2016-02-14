<!-- BEGIN .main-left-wrapper -->
<div class="main-left-wrapper">
	<div class="main-title">
		<p class="custom-font-1">{{$nama}}</p>
	</div>

	<div class="blog-list">
		@foreach(list_testimonial() as $key=>$value)
		<div class="item">
			<div class="title custom-font-1">
				<a href="#">{{$value->nama}}</a>
			</div>
			<div class="title-legend">
				<a href="#" class="date">{{date("d M Y", strtotime($value->created_at))}}</a>
			</div>
			<div class="text">
				<p>{{short_description($value->isi,250)}}</p>
			</div>
		</div>
		@endforeach
	</div>

	<div class="pages custom-font-1">
		{{list_testimonial()->links()}}
	</div>
</div>
<!-- END .main-left-wrapper -->

<!-- BEGIN .main-sidebar-wrapper -->
<div class="main-sidebar-wrapper">
	<!-- BEGIN .shop-by-category -->
	<div class="shop-by-category sidebar-item">
		<div class="main-title">
			<p class="custom-font-1">Buat Testimonial</p>
		</div>
		<form action="{{url('testimoni')}}" method="post">
			<label>Nama</label><br><input type="text" name="nama" class="input-text-1" id="testi" required><br><br>
			<label>Testimonial</label><br><textarea name="testimonial" class="textarea-1" id="testi-message" required></textarea><br>
			<button class="button-1 custom-font-1"><span class="btn-testi">Kirim Testimonial</span></button>
		</form>
	</div>
	<!-- END .shop-by-category -->
</div>
<!-- END .main-sidebar-wrapper -->

<div class="clear"></div>
<br><br><br>