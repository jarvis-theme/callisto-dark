	@if(Session::has('error'))
		<div class="error" id='message' style='display:none'>							
			{{Session::get('error')}}
		</div>
	@endif
	@if(Session::has('success'))
		<div class="success" id='message' style='display:none'>
			<p>Selamat, anda sudah berhasil register. Silakan check email untuk mengetahui informasi akun anda.</p>					
		</div>
	@endif
	@if(Session::has('errorrecovery'))
		<div class="error" id='message' style='display:none'>
			<p>Maaf, email anda tidak ditemukan.</p>					
		</div>
	@endif	
	<div class="container">
		<div class="main-title">
			<p class="custom-font-1">Lupa Password</p>
		</div>

		<!-- BEGIN .single-full-width -->
		<div class="single-full-width customer">

			<div class="login">
				<form class="form-horizontal" action="{{URL::to('member/forgetpassword')}}" method="post">
					<!-- <p class="input-error-wrapper"><span>Invalid login credentials</span></p> -->
					<p>
						<label>E-mail address:</label>
						<input type="text" name="recoveryEmail" class="input-text-1" required />
						<!-- <span>Error message</span> -->
					</p>
					<p class="sign-in">
						<label></label>
						<button type="submit" class="button-1 custom-font-1 trans-1"><span>Reset Password</span></button>
						<b>atau <a href="{{URL::to('produk')}}">ke Login</a></b>
					</p>
				</form>
			</div>
			
			<div class="guest-login">
				<div class="main-title">
					<p class="custom-font-1">Pelanggan Baru</p>
				</div>
				<a href="{{URL::to('member/create')}}" class="button-1 custom-font-1 trans-1"><span>Daftar sebagai member</span></a>
			</div>

			<div class="clear"></div>

		<!-- END .single-full-width -->
		</div>

		<div class="clear"></div>
			
		</div>
