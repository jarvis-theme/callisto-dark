@if($errors->all())
	<div class="alert alert-error">
		Kami menemukan error berikut:			
		<ul>
		    @foreach($errors->all() as $message)

		    <li>{{ $message }}</li>

		    @endforeach
		</ul>
	</div>
@endif

@if(Session::has('error'))
	<div class="alert alert-error">
		<h3>Kami menemukan error berikut:</h3>
		<p>{{Session::get('error')}}</p>
	</div>
@endif

@if(Session::has('error'))
<div class="alert alert-error">
<p>Password lama anda tidak benar, silakan coba lagi.</p>
</div>
@endif

@if(Session::has('success'))
<div class="success" id='message' style='display:none'>
	<p>Informasi anda berhasil di update.</p>					
</div>
@endif	

<!-- BEGIN .single-full-width -->
		<div class="single-full-width customer">

			<div class="contact-form">
				{{Form::open(array('url'=>'member/update','method'=>'put','class'=>'form-horizontal'))}}
					<!-- <p class="input-error-wrapper"><span>Invalid login credentials</span></p> -->
					<p>
						<label>Nama:</label>
						<input type="text" name="nama" value="{{$user->nama}}"  class="input-text-1" required />
						<!-- <span>Error message</span> -->
					</p>
					<p>
						<label>Email:</label>
						<input type="text" name='email' value='{{$user->email}}' class="input-text-1" />
					</p>
					<p>
						<label>Alamat*:</label>
						<textarea name='alamat' class="textarea-1" required>{{$user->alamat}}</textarea>
					</p>
					<p>
						<label>Negara*:</label>						  	
						{{Form::select('negara',array('' => '-- Pilih Negara --') + $negara , ($user ? $user->negara :(Input::old("negara")? Input::old("negara") :"")), array('required'=>'', 'id'=>'negara', 'style'=>'width:100%'))}}
					</p>
					<p>
						<label>Provinsi*:</label>
						<span id="provinsiPlace">
							{{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi , ($user ? $user->provinsi :(Input::old("provinsi")? Input::old("provinsi") :"")),array('required'=>'','id'=>'provinsi', 'style'=>'width:100%'))}}
						</span>
					</p>
					<p>
						<label>Kota*:</label>
						<span id="kotaPlace">
							{{Form::select('kota',array('' => '-- Pilih Kota --') + $kota , ($user ? $user->kota :(Input::old("kota")? Input::old("kota") :"")),array('required'=>'','id'=>'kota', 'style'=>'width:100%'))}}
						</span>
					</p>
					<p>
						<label>Kode Pos:</label>
						<input type="text" name='kodepos' value='{{$user->kodepos}}' class="input-text-1" required />
						<!-- <span>Error message</span> -->
					</p>
					<p>
						<label>Telepon / HP*:</label>
						{{Form::input('text', 'telp', $user->telp, array('class'=>'input-text-1'))}}
					</p>
				
					<p class="sign-in">
						<label></label>
						<button type="submit" class="button-1 custom-font-1 trans-1"><span>Simpan</span></button>
					</p>
				
			</div>
			
			<div class="guest-login">
				<div class="main-title">
					<p class="custom-font-1" style="color:rgb(255, 255, 255);">Ubah Password</p>
				</div>
				Password lama<br>
					  <input style="width:200px" class="input-text-1" type="password" name='oldpassword'>
					  <br><br>

				Password baru<br>
					  <input style="width:200px" class="input-text-1" type="password" name='password'>
					  <br><br>

				Confirm password baru<br>
					  <input style="width:200px" class="input-text-1" type="password" name='password_confirmation'>
					  <br><br>
			</div>
			{{Form::close()}}
			<div class="clear"></div>

		</div>
		<!-- END .single-full-width -->
		<br><br><br>
