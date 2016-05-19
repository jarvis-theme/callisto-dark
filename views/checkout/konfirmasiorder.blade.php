<div class="single-full-width customer customer-order">
	<div class="main-title">
		<p class="custom-font-1"><a href="#" class="active confirm-title">Konfirmasi Order</a></p>
		<a href="#" class="continue">Kembali</a>
	</div>
	
	<div class="main-content">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>Kode Order</th>
						<th>Tanggal Order</th>
						<th>Order</th>
						<th>Jumlah</th>
						<th>No Resi</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>{{prefixOrder().$order->kodeOrder}}</td>
						<td>{{waktu($order->tanggalOrder)}}</td>
						<td class="detail-price">
							@foreach ($order->detailorder as $detail)
								<li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku['opsi1'].($detail->opsisku['opsi2'] != '' ? ' / '.$detail->opsisku['opsi2']:'').($detail->opsisku['opsi3'] !='' ? ' / '.$detail->opsisku['opsi3']:'').')':''}} - {{$detail->qty}}</li>
							@endforeach 
						</td>
						<td class="detail-price">{{price($order->total)}}</td>
						<td>
							@if($order->noResi!="")
								{{$order->noResi}}
							@else
								&nbsp;
							@endif
						</td>
						<td>
							@if($order->status==0)
							<span class="label label-warning">Pending</span>
							@elseif($order->status==1)
							<span class="label label-important">Konfirmasi diterima</span>
							@elseif($order->status==2)
							<span class="label label-info">Pembayaran diterima</span>
							@elseif($order->status==3)
							<span class="label label-success">Terkirim</span>
							@elseif($order->status==4)
							<span class="label label-default">Batal</span>
							@endif
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<br>
	<div class="contact-form">
		@if($order->jenisPembayaran == 1 && $order->status == 0)
		<h4 class="custom-font-1">{{trans('content.step5.confirm_btn')." ".trans('content.step3.transfer')}}</h4>
		<br>
		{{Form::open(array('url'=> 'konfirmasiorder/'.$order->id, 'method'=>'put', 'class'=> 'form-horizontal'))}}
			<p><label>Nama Pengirim:</label><input type="text" name="nama" value="{{Input::old('nama')}}" class="input-text-1" required></p>

			<p><label>No Rekening:</label><input type="text" name="noRekPengirim" value="{{Input::old('noRekPengirim')}}" class="input-text-1" required></p>

			<p>
				<label>Rekening Tujuan:</label>
				<select name="bank">
					<option value="">-- Pilih Bank Tujuan --</option>
					@foreach (list_banks() as $bank)
					<option value="{{$bank->id}}">{{$bank->bankdefault->nama}} - {{$bank->noRekening}} - A/n {{$bank->atasNama}}</option>
					@endforeach
				</select>
			</p>

			<p><label>Jumlah:</label><input type="text" name="jumlah" name="email" value="{{Input::old('noRekPengirim')}}" class="input-text-1" required></p>

			<p class="sign-in">
				<label></label>
				<button type="submit" class="button-1 custom-font-1 trans-1"><span>{{trans('content.step5.confirm_btn')}}</span></button>
			</p>
		{{Form::close()}}
		@endif

		@if($paymentinfo!=null)
		<h4 class="custom-font-1"><center>Paypal Payment Details</center></h4><br>
		<hr>
		<div class="table-responsive">
			<table class="table table-bordered">
				<tr><td>Payment Status</td><td>:</td><td>{{$paymentinfo['payment_status']}}</td></tr>
				<tr><td>Payment Date</td><td>:</td><td>{{$paymentinfo['payment_date']}}</td></tr>
				<tr><td>Address Name</td><td>:</td><td>{{$paymentinfo['address_name']}}</td></tr>
				<tr><td>Payer Email</td><td>:</td><td>{{$paymentinfo['payer_email']}}</td></tr>
				<tr><td>Item Name</td><td>:</td><td>{{$paymentinfo['item_name1']}}</td></tr>
				<tr><td>Receiver Email</td><td>:</td><td>{{$paymentinfo['receiver_email']}}</td></tr>
				<tr><td>Total Payment</td><td>:</td><td>{{$paymentinfo['payment_gross']}} {{$paymentinfo['mc_currency']}}</td></tr>
			</table>
		</div>
		<p>Thanks you for your order.</p><br>
		@endif 
  
		@if($order->jenisPembayaran==2)
			<center>
				<h4 class="custom-font-1">{{trans('content.step5.confirm_btn')}} Paypal</h4><br>
				<p>{{trans('content.step5.paypal')}}</p>
			</center>
			<center id="paypal">{{ $paypalbutton }}</center>
			<br>
		@elseif($order->jenisPembayaran==4) 
			@if(($checkouttype==1 && $order->status < 2) || ($checkouttype==3 && ($order->status!=6)))
			<center>
				<h4 class="custom-font-1">{{trans('content.step5.confirm_btn')}} iPaymu</h4><br>
				<p>{{trans('content.step5.ipaymu')}}</p>
				<a class="cart-button" href="{{url('ipaymu/'.$order->id)}}" target="_blank">{{trans('content.step5.ipaymu_btn')}}</a>
			</center>
			@endif
		@elseif($order->jenisPembayaran==5 && $order->status == 0)
			<center>
				<h4 class="custom-font-1"><strong>{{trans('content.step5.confirm_btn')}} DOKU MyShortCart</strong></h4><br>
				<p>{{trans('content.step5.doku')}}</p><br>
				{{ $doku_button }}
			</center>
			<br>
		@elseif($order->jenisPembayaran==6 && $order->status == 0)
			<center>
				<h4 class="custom-font-1">{{trans('content.step5.confirm_btn')}} Bitcoin</h4><br>
				<p>{{trans('content.step5.bitcoin')}}</p><br>
				{{$bitcoinbutton}}
			</center>
			<br>
		@elseif($order->jenisPembayaran == 8 && $order->status == 0)
			<center>
				<h4 class="custom-font-1">{{trans('content.step5.confirm_btn')}} Veritrans</h4><br>
				<p>{{trans('content.step5.veritrans')}}</p><br>
				<button class="btn-veritrans" onclick="location.href='{{ $veritrans_payment_url }}'">{{trans('content.step5.veritrans_btn')}}</button>
			</center>
			<br>
		@endif
	</div>
</div>
<div class="clear"></div>
<br><br>