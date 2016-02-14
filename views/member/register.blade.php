<!-- BEGIN .single-full-width -->
<div class="single-full-width customer">
	<div class="contact-form">
		{{Form::open(array('url'=>'member','method'=>'post','class'=>'form-horizontal'))}}
			<p>
				<label>Nama* :</label>
				<input type="text" name="nama" value="{{Input::old('nama')}}"  class="input-text-1" required />
			</p>
			<p>
				<label>Email* :</label>
				<input type="text" name="email" value="{{Input::old('email')}}" class="input-text-1" required />
			</p>
			<p>
				<label>Password* :</label>
				<input type="password" name="password" class="input-text-1" required />
			</p>
			<p>
				<label>Konfirmasi Password* :</label>
				<input type="password" name="password_confirmation" class="input-text-1" required />
			</p>
			<p>
				<label>Alamat* :</label>
				<textarea name="alamat" class="textarea-1" required>{{Input::old("alamat")}}</textarea>
			</p>
			<p>
				<label>Negara* :</label>
				{{Form::select('negara',array('' => '-- Pilih Negara --') + $negara, Input::old("provinsi"),array('required', 'id'=>"negara", "data-rel"=>"chosen"))}}
			</p>
			<p>
				<label>Provinsi* :</label>
				<span id="provinsiPlace">
				  	{{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi, Input::old("provinsi"),array('required', 'id'=>"provinsi","data-rel"=>"chosen"))}}
				</span>
			</p>
			<p>
				<label>Kota* :</label>
				<span id="kotaPlace">
					{{Form::select('kota',array('' => '-- Pilih Kota --') + $kota, Input::old("kota"), array('required'=>'','id'=>'kota'))}}
				</span>
			</p>
			<p>
				<label>Kode Pos :</label>
				<input type="text" name="kodepos" value="{{Input::old('kodepos')}}" class="input-text-1" />
			</p>
			<p>
				<label>Telepon / HP* :</label>
				<input type="text" name="telp" value="{{Input::old('telp')}}" required class="input-text-1" required />
			</p>
			<p>
				<label>Kode*</label>
				{{ HTML::image(Captcha::img(), 'Captcha image') }}
			</p>
			<p>
				<label></label>
				<input type="text" name="captcha" class="input-text-1" placeholder="Masukkan Kode" required />
			</p>
			<p>
				<label class="read"></label>
				<input type="checkbox" name="readme" value="1" required checked> Saya telah membaca dan menyetujui <a href="{{url('service')}}">Persyaratan Member</a>
			</p>
			<p class="sign-in">
				<label></label>
				<button type="submit" class="button-1 custom-font-1 trans-1"><span>Daftar</span></button>
			</p>
		{{Form::close()}}
	</div>
	
	<div class="guest-login">
		<div class="main-title">
			<p class="custom-font-1">Pelanggan Lama</p>
		</div>
		<p>Sudah punya Akun? Silahkan login untuk memudahkan anda dalam berbelanja.</p>
		<a href="{{url('member')}}" class="button-1 custom-font-1 trans-1"><span>Login</span></a>
	</div>

	<div class="clear"></div>
</div>
<!-- END .single-full-width -->
<br><br><br>