		<div class="container">
			<!-- Checkout Page -->
			<section class="order" style="min-height: 250px;">
				<div class="row standard">										
					<header class="span12 prime">
						<h3 class="custom-font-1">Konfirmasi Order</h3>
					</header>
				</div>
				<div class="row standard">										
					<header class="span12 prime">
						<p>Silakan masukkan kode order yang mau anda cari!</p><br>
						{{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}}
						<input type="text" class="input-text-1" placeholder="Kode Order" name='kodeorder' style="width: 200px;height: 35px;float: left;margin-right: 10px;">
					  	<button class="button-1 custom-font-1"><span style="padding: 5px 15px; background: none repeat scroll 0% 0% transparent;">Cari Kode</span></button>
						{{Form::close()}}
					</header>
				</div>				
			</section>
		</div>