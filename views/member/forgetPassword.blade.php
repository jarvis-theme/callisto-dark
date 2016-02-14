	<div class="container">
		<div class="main-title">
			<p class="custom-font-1">Lupa Password</p>
		</div>

		<!-- BEGIN .single-full-width -->
		<div class="single-full-width customer">
			<div class="login">
				<form class="form-horizontal" action="{{url('member/forgetpassword')}}" method="post">
					<p>
						<label>Email:</label>
						<input type="text" name="recoveryEmail" class="input-text-1" required />
					</p>
					<p class="sign-in">
						<label></label>
						<button type="submit" class="button-1 custom-font-1 trans-1"><span>Reset Password</span></button>
						<b>atau <a href="{{url('produk')}}">Login</a></b>
					</p>
				</form>
			</div>
			
			<div class="guest-login">
				<div class="main-title">
					<p class="custom-font-1">Pelanggan Baru</p>
				</div>
				<p>Nikmati kemudahan dalam berbelanja saat anda terdaftar sebagai member.</p>
				<a href="{{url('member/create')}}" class="button-1 custom-font-1 trans-1"><span>Daftar sebagai member</span></a>
			</div>

			<div class="clear"></div>
		</div>
		<!-- END .single-full-width -->

		<div class="clear"></div>
	</div>