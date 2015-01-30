<div class="main-title">
					<p class="custom-font-1">Biodata dan Order Histori</p>
				</div>

				<!-- BEGIN .single-full-width -->
				<div class="single-full-width customer">

					<div class="item-block-3 shipping-address">
						<div class="content">
							<h3 class="custom-font-1">Profile</h3>
							<p>Nama: {{$user->nama}}</p>
							<p class="email">Email:{{$user->email}}</p>
							<p>Alamat: {{$user->alamat}}</p>
							<p>Kode Pos: {{$user->kodepos}}</p>
							<p>Telpon: {{$user->telp}}</p>
							<a href="{{URL::to('member/profile/edit')}}">Edit Profile</a>
						</div>
					</div>

					<div class="order-history">
						@if($order->count()>0)
						<div class="row title">
							<div class="date">Order</div>
							<div class="date">Date</div>
							<div class="payment">Payment statuss</div>
							<div class="order">Total</div>
							<div class="total"></div>
						</div>

						@foreach ($order as $item)
	
						<div class="row">
							<div class="date"><a href="#">{{prefixOrder()}}{{$item->kodeOrder}}</a></div>
							<div class="date">{{date("d M Y", strtotime($item->tanggalOrder))}}</div>
							<div class="payment">
								@if($item->status==0)
								<span class="label label-warning">Pending</span>
								@elseif($item->status==1)
								<span class="label label-important">Konfirmasi diterima</span>
								@elseif($item->status==2)
								<span class="label label-info">Pembayaran diterima</span>
								@elseif($item->status==3)
								<span class="label label-info">Terkirim</span>
								@elseif($item->status==4)
								<span class="label label-info">Batal</span>
								@endif
							</div>
							<div class="order">{{ jadiRupiah($item->total)}}</div>
							<div class="total">@if($item->status==0)<a href="{{URL::to('konfirmasiorder/'.$item->id)}}" class="button-1 custom-font-1 trans-1"><span style="font-size: 12px">Konfirmasi</span></a>@endif</div>
							
						</div>
						@endforeach
						<div class="pages custom-font-1">
							{{$order->links()}}
						</div>
						@else
							<center><h4>Daftar order anda masih kosong.</h4></center>
						@endif
					</div>

					<div class="clear"></div>

				<!-- END .single-full-width -->
				</div>

				<div class="clear"></div>
				<br><br><br>
