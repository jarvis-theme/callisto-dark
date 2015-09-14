<div class="single-full-width customer customer-order">
	<div class="main-title">
		<p class="custom-font-1"><a href="#" class="active" style="color: #FEEBB7 !important;">Konfirmasi Order</a></p>
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
						<th>Jumlah yg belum di bayar</th>
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
						<td class="detail-price">- {{($order->status==2 || $order->status==3) ? price(0) : price($order->total)}}</td>
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
		{{Form::open(array('url'=> 'konfirmasiorder/'.$order->id, 'method'=>'put', 'class'=> 'form-horizontal'))}}
			<p><label>Nama Pengirim:</label><input type="text" name='nama' value='{{Input::old("nama")}}' required class="input-text-1"></p>

            <p><label>No Rekening:</label><input type="text" name='noRekPengirim' value='{{Input::old("noRekPengirim")}}' required class="input-text-1"></p>

            <p>
            	<label>Rekening Tujuan:</label>
            	<select name='bank'>
					<option value=''>-- Pilih Bank Tujuan --</option>
					@foreach (list_banks() as $bank)
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