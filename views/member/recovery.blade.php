<div class="container">
	<!-- Login Section -->
	<div class="main-title">
		<p class="custom-font-1">Reset Password</p>
	</div>

	<!-- BEGIN .single-full-width -->
	<div class="single-full-width customer">
		<div class="login">
			{{Form::open(array('url' => 'member/recovery/'.$id.'/'.$code, 'class' => 'form-horizontal'))}}
				<p>
					<label class="control-label" for="inputPassword">Password Baru</label>
					<input type="password" name="password" class="input-text-1" id="inputPassword" required>
				</p>
				<p>
					<label class="control-label" for="inputPassword">Ulangi Password</label>
					<input type="password" name="password_confirmation" class="input-text-1" id="inputPassword" required>
				</p>

				<p class="sign-in">
					<label></label>
					<button type="submit" class="button-1 custom-font-1 trans-1"><span>Reset Password</span></button>
					<b>atau&nbsp;<a href="{{URL::to('member')}}">Login</a></b>
				</p>
			{{Form::close()}}
		</div>
		
		<div class="guest-login">
			<div class="main-title">
				<p class="custom-font-1">Pelanggan Baru</p>
			</div>
			<p>Nikmati kemudahan dalam berbelanja saat anda terdaftar sebagai member.</p>
			<a href="{{URL::to('member/create')}}" class="button-1 custom-font-1 trans-1"><span>Daftar sebagai member</span></a>
		</div>

		<div class="clear"></div>
	</div>
	<!-- END .single-full-width -->
</div>