<div class="main-title">
	<p class="custom-font-1">Hubungi Kami</p>
</div>

<div>
	@if($kontak->lat!='0' || $kontak->lng!='0')
		<iframe class="main-content-wrapper maps" height="300" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="//maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
	@else
		<iframe class="main-content-wrapper maps" height="300" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="//maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{str_replace(' ','+',$kontak->alamat)}}&amp;aq=0&amp;oq={{str_replace(' ','+',$kontak->alamat)}}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;hq=&amp;hnear={{str_replace(' ','+',$kontak->alamat)}}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
	@endif
</div>
<br>

<!-- BEGIN .single-full-width -->
<div class="single-full-width">
	<div class="contact-form">
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
		<hr class="border">
		<form action="{{url('kontak')}}" method="post">
			<p>
				<label>Nama anda:</label>
				<input type="text" class="input-text-1" name="namaKontak" required />
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
				<textarea name="messageKontak" class="textarea-1" required></textarea>
			</p>
			<p class="submit">
				<label></label>
				<button class="button-1 custom-font-1 trans-1"><span>Kirim pesan</span></button>
			</p>
		</form>
	</div>

	<div class="clear"></div>
	<!-- END .single-full-width -->
</div><br><br><br>
<div class="clear"></div><br><br><br>