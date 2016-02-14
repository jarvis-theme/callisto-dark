				<div class="main-title">
					<p class="custom-font-1">Biodata dan Order History</p>
				</div>

				<!-- BEGIN .single-full-width -->
				<div class="single-full-width customer">
					<div class="item-block-3 shipping-address">
						<div class="content">
							<h3 class="custom-font-1">Profile</h3>
							<p>Nama: {{$user->nama}}</p>
							<p class="email">Email: {{$user->email}}</p>
							<p>Alamat: {{$user->alamat}}</p>
							<p>Kode Pos: {{$user->kodepos}}</p>
							<p>Telpon: {{$user->telp}}</p>
							<a href="{{url('member/profile/edit')}}">Edit Profile</a>
						</div>
					</div>

					<div class="col-xs-12 col-sm-8" id="table-order">
					@if(list_order()->count() > 0)
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th class="date">Order</th>
										<th class="date">Date</th>
										<th class="payment">Payment status</th>
										<th class="order">Total</th>
										<th class="total"></th>
									</tr>
								</thead>
								<tbody>
								@foreach (list_order() as $item)
									<tr>
										<td><a href="#">{{prefixOrder().$item->kodeOrder}}</a></td>
										<td>{{date("d M Y", strtotime($item->tanggalOrder))}}</td>
										<td class="payment">
											@if($item->status==0)
											<span class="label label-warning">Pending</span>
											@elseif($item->status==1)
											<span class="label label-important">Konfirmasi diterima</span>
											@elseif($item->status==2)
											<span class="label label-info">Pembayaran diterima</span>
											@elseif($item->status==3)
											<span class="label label-success">Terkirim</span>
											@elseif($item->status==4)
											<span class="label label-default">Batal</span>
											@endif
										</td>
										<td>{{ price($item->total)}}</td>
										<td>
										@if($item->status == 0)
											<a href="{{url('konfirmasiorder/'.$item->id)}}" class="button-1 custom-font-1 trans-1">
												<span class="bestprice">Konfirmasi</span>
											</a>
										@endif
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
						</div>
						<div class="pages custom-font-1">
							{{list_order()->links()}}
						</div>
					@else
						<center><h4>Daftar order anda masih kosong.</h4></center>
					@endif
					</div>

					<div class="clear"></div>
				</div>
				<!-- END .single-full-width -->
				<div class="clear"></div>
				<br><br><br>