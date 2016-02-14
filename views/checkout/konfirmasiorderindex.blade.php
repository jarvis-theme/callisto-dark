		<div class="container">
			<!-- Checkout Page -->
			<section class="order confirm-order">
				<div class="row standard">
					<header class="span12 prime">
						<h3 class="custom-font-1">Konfirmasi Order</h3>
					</header>
				</div>
				<div class="row standard">
					<header class="span12 prime">
						<p>Silakan masukkan kode order yang mau anda cari!</p><br>
						{{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}}
						<input type="text" class="input-text-1 input-code" placeholder="Kode Order" name="kodeorder">
						<button class="button-1 custom-font-1"><span class="btn-code">Cari Kode</span></button>
						{{Form::close()}}
					</header>
				</div>
			</section>
		</div>