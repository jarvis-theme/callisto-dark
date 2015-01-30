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
			<p class="custom-font-1">Login Pelanggan</p>
		</div>

		<!-- BEGIN .single-full-width -->
		<div class="single-full-width customer">

			<div class="login">
				<form class="form-horizontal" action="{{URL::to('member/login')}}" method="post">
					<!-- <p class="input-error-wrapper"><span>Invalid login credentials</span></p> -->
					<p>
						<label>E-mail address:</label>
						<input type="text" name="email" class="input-text-1" required />
						<!-- <span>Error message</span> -->
					</p>
					<p>
						<label>Password:</label>
						<input type="password" name="password" class="input-text-1" />
					</p>
					<p>
						<label></label>
						<a href="{{URL::to('member/forget-password')}}">Lupa password?</a>
					</p>
					<p class="sign-in">
						<label></label>
						<button type="submit" class="button-1 custom-font-1 trans-1"><span>Login</span></button>
						<b>atau <a href="{{URL::to('produk')}}">Kembali ke Toko</a></b>
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
		<br><br><br>
</div>
