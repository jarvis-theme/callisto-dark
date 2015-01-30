@if(Session::has('error'))
	<div class="alert alert-error">
		<h3>Kami menemukan error berikut:</h3>
		<p>{{Session::get('error')}}</p>
	</div>
@endif

<!-- BEGIN .single-full-width -->
		<div class="single-full-width customer">

			<div class="contact-form">
				{{Form::open(array('url'=>'member','method'=>'post','class'=>'form-horizontal'))}}
					@if($errors->all())
						<p class="input-error-wrapper"><span>Kami menemukan error berikut:</span></p>
						 <p class="input-error-wrapper"><span>
						    @foreach($errors->all() as $message)

						    {{ $message }}

						    @endforeach
						</span></p>
					@endif
					<p>
						<label>Nama:</label>
						<input type="text" name="nama" value="{{Input::old('nama')}}"  class="input-text-1" required />
						<!-- <span>Error message</span> -->
					</p>
					<p>
						<label>Email:</label>
						<input type="text" name='email' value='{{Input::old("email")}}' class="input-text-1" />
					</p>
					<p>
						<label>Password:</label>
						<input type="password"  name="password"  class="input-text-1" required />
						<!-- <span>Error message</span> -->
					</p>
					<p>
						<label>Confirm Password:</label>
						<input type="password" name="password_confirmation" class="input-text-1" />
					</p>
					<p>
						<label>Alamat*:</label>
						<textarea name='alamat' class="textarea-1" required>{{Input::old("alamat")}}</textarea>
					</p>
					<p>
						<label>Negara*:</label>						  	
						{{Form::select('negara',array('' => '-- Pilih Negara --') + $negara,Input::old("provinsi"),array('required', 'id="negara" data-rel="chosen"'))}}
					</p>
					<p>
						<label>Provinsi*:</label>
						<span id="provinsiPlace">
						  	{{Form::select('provinsi',array('' => '-- Pilih Provinsi --'), Input::old("provinsi"),array('required', 'id="provinsi" data-rel="chosen"'))}}
						</span>
					</p>
					<p>
						<label>Kota*:</label>
						<span id="kotaPlace">
							{{Form::select('kota',array('' => '-- Pilih Kota --'),Input::old("kota"), array('required'=>'','id'=>'kota'))}}
						</span>
					</p>
					<p>
						<label>Kode Pos:</label>
						<input type="text" name='kodepos' value='{{Input::old("kodepos")}}' class="input-text-1" required />
						<!-- <span>Error message</span> -->
					</p>
					<p>
						<label>Telepon / HP*:</label>
						<input type="text" name='telp' value='{{Input::old("telp")}}' required class="input-text-1" />
					</p>
					<p>
						<label>Captcha</label>
						{{ HTML::image(Captcha::img(), 'Captcha image') }}
					</p>
					<p>
						<label></label>
						<input type="text" name='captcha' required class="input-text-1" />
					</p>

					<p>
						<input required type="checkbox" name='readme' value="1"> Saya telah membaca dan menyetujui <a href="{{URL::to('service')}}">Persyaratan Member</a>
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
				<a href="{{URL::to('member/')}}" class="button-1 custom-font-1 trans-1"><span>Login</span></a>
			</div>

			<div class="clear"></div>

		</div>
		<!-- END .single-full-width -->
		<br><br><br>
