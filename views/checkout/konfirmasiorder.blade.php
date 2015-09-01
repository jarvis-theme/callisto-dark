<div class="single-full-width customer customer-order">
	<div class="main-title">
		<p class="custom-font-1"><a href="#"><a href="#" class="active" style="color: #FEEBB7 !important;">Konfirmasi Order</a></p>
		<a href="#" class="continue">Kembali</a>
	</div>
	
	<div class="main-content item-block-3">
		<div class="content">

			<div class="order-history">
				<div class="row title">
					<div class="sku">Kode Order</div>
					<div class="sku">Tanggal Order</div>
					<div class="price">Order</div>
					<div class="price">Jumlah yg belum di bayar</div>
					<div class="total"> Jumlah</div>
					<div class="total">No Resi</div>
					<div class="total">Status</div>

				</div>
				<div class="row">
					<div class="sku">{{prefixOrder().$order->kodeOrder}}</div>
					<div class="sku">{{waktu($order->tanggalOrder)}}</div>
					<div class="price">
						@foreach ($order->detailorder as $detail)
							<li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku->opsi1.($detail->opsisku->opsi2 != '' ? ' / '.$detail->opsisku->opsi2:'').($detail->opsisku->opsi3 !='' ? ' / '.$detail->opsisku->opsi3:'').')':''}} - {{$detail->qty}}</li>
						@endforeach	
					</div>
					<div class="price">{{price($order->total)}}</div>
					<div class="total">- {{($order->status==2 || $order->status==3) ? price(0) : price($order->total)}}</div>
					<div class="total">
						@if($order->noResi!="")
							{{$order->noResi}}
						@else
							&nbsp;
						@endif
					</div>
					<div class="total">
						@if($order->status==0)
						<span class="label label-warning">Pending</span>
						@elseif($order->status==1)
						<span class="label label-important">Konfirmasi diterima</span>
						@elseif($order->status==2)
						<span class="label label-info">Pembayaran diterima</span>
						@elseif($order->status==3)
						<span class="label label-info">Terkirim</span>
						@elseif($order->status==4)
						<span class="label label-info">Batal</span>
						@endif
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="contact-form">
		{{Form::open(array('url'=> 'konfirmasiorder/'.$order->id, 'method'=>'put', 'class'=> 'form-horizontal'))}}
			<p><label>Nama Pengirim:</label><input type="text" name='nama' value='{{Input::old("nama")}}' required class="input-text-1"></p>

            <p><label>No Rekening:</label><input type="text" name='noRekPengirim' value='{{Input::old("noRekPengirim")}}' required class="input-text-1"></p>

            <p>
            	<label>Rekening Tujuan:</label>
            	<select name='bank'>
					<option value=''>-- Pilih Bank Tujuan --</option>
					@foreach ($banktrans as $bank)
						<option value="{{$bank->id}}">{{$bank->bankdefault->nama}} - {{$bank->noRekening}} - A/n {{$bank->atasNama}}</option>
					@endforeach
				</select>
            </p>	

            <p><label>Jumlah:</label><input type="text" name='jumlah' name='email' value='{{Input::old("noRekPengirim")}}' required class="input-text-1"></p>

            <p class="sign-in">
				<label></label>
				<button type="submit" class="button-1 custom-font-1 trans-1"><span>Konfirmasi Order</span></button>
			</p>
		{{Form::close()}}
	</div>
</div>
<div class="clear"></div>
<br><br>