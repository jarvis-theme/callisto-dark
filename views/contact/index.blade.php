@if(Session::has('msg2'))
<div class="success" id='message' style='display:none'>
	Terima kasih, pesan anda sudah terkirim.
</div>
@endif
@if(Session::has('msg3'))
<div class="success" id='message' style='display:none'>
	Maaf, pesan anda belum terkirim.
</div>
@endif
@if($errors->all())
<div class="error" id='message' style='display:none'>
	Terjadi kesalahan dalam menyimpan data.<br><br>
	@foreach($errors->all() as $message)
	-{{ $message }}<br>
	@endforeach
</ul>
</div>
@endif

<div class="main-title">
	<p class="custom-font-1">Kontak kami</p>
</div>

<div class="single-full-width" style="width:950px">
	@if($kontak->lat!='0' || $kontak->lat!='0')
		<iframe style="padding: 0px;" class="main-content-wrapper" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn=0.006849,0.009892&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
	@else
		<iframe style="padding: 0px;" class="main-content-wrapper" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->alamat }}&amp;aq=0&amp;oq=gegerkalong+hil&amp;sspn=0.006849,0.009892&amp;ie=UTF8&amp;hq=&amp;hnear={{ $kontak->alamat }}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
	@endif
</div>
<br>

<!-- BEGIN .single-full-width -->
<div class="single-full-width">
	<div class="contact-form">
		<form action="{{url('kontak')}}" method="post">
			<p>
				<label>Nama anda:</label>
				<input type="text" class="input-text-1" name='namaKontak' required />
			</p>
			<p>
				<label>E-mail anda:</label>
				<input type="text" class="input-text-1" name="emailKontak" required />
			</p>

			<!-- <p>
				<label>Message topic:</label>
				<select>
					<option>Shipping &amp; handling</option>
					<option>Question about items for sale</option>
					<option>Other technical problems</option>
				</select>
			</p> -->
			<p>
				<label>Pesan:</label>
				<textarea name="messageKontak" required class="textarea-1"></textarea>
			</p>
			<p class="submit">
				<label></label>
				<button class="button-1 custom-font-1 trans-1"><span>Kirim pesan</span></button>
			</p>
		</form>

		<div class="text">
			<p>Alamat:<br><b>{{$kontak->alamat}}</b></p>
			<p>Telepon:<br>
			@if(empty($kontak->telepon) && empty($kontak->hp))
			<b>-</b></p>
			@elseif(!empty($kontak->telepon) && empty($kontak->hp))
			<b>{{$kontak->telepon}}</b></p>
			@elseif(empty($kontak->telepon) && !empty($kontak->hp))
			<b>{{$kontak->hp}}</b></p>
			@else
			<b>{{$kontak->telepon.'&nbsp; - &nbsp;'.$kontak->hp}}</b>
			@endif
			<p>Email:<br><b>{{$kontak->email}}</b></p>	
		</div>
	</div>

	<div class="clear"></div>
	<!-- END .single-full-width -->
</div><br><br><br>
<div class="clear"></div><br><br><br>