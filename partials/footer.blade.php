<!-- BEGIN .main-footer-wrapper -->
<div class="main-footer-wrapper">
	<a href="#" class="back-to-the-top">Kembali ke atas</a>
	<div class="main-footer">
		@foreach($tautan as $key=>$group)	
            @if($key==0 || $key>2)

            @else
	            <div class="col-xs-11 col-sm-2">
		            <div class="main-title">
						<p class="custom-font-1">{{$group->nama}}</p>
					</div>
					<ul style="margin-left: 10px;">
					@foreach($quickLink as $key=>$link)
			            @if($group->id==$link->tautanId)
						<li>
							<a href="{{menu_url($link)}}">{{$link->nama}}</a>
						</li>
						@endif
					@endforeach
					</ul>
					<br>
				</div>
			@endif	
		@endforeach

		<div class="col-xs-11 col-sm-4">
			<div class="main-title">
				<p class="custom-font-1" style="font-size: 24px;">Hubungi Kami</p>
			</div>
			<p>
			@if($kontak->alamat!='')
				<p><b>Alamat: </b><br>{{$kontak->alamat}}</p><br>
				<p><b>Telepon: </b><br>@if($kontak->telepon != ''){{$kontak->telepon}} @else - @endif</p><br>
				@if($kontak->bb != '')
                <p><b>PIN BB: </b><br>{{$kontak->bb}}</p><br>
                @endif
				<b>Email: </b><br><a style="color:white" href="mailto:{{$kontak->email}}">{{$kontak->email}}</a>
				<br><br>
			@else
				<p></p>
			@endif
			</p>
			<p class="social">
				<b>Ikuti kami:</b>
				<br>
				@if($kontak->fb)
				<a target="_blank" href="{{$kontak->fb}}" title="Facebook">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x" id="fb"></i>
						<i class="fa fa-facebook-f fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				@endif
				@if($kontak->tw)
				<a target="_blank" href="{{$kontak->tw}}" title="Twitter">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x" id="tw"></i>
						<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				@endif
				@if(!empty($kontak->gp))
                <a target="_blank" href="{{url($kontak->gp)}}" title="Google+">
                	<span class="fa-stack fa-lg">
                		<i class="fa fa-circle fa-stack-2x" id="gp"></i>
                		<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
            		</span>
        		</a>
                @endif
                @if(!empty($kontak->pt))
                <a target="_blank" href="{{url($kontak->pt)}}" title="Pinterest">
                	<span class="fa-stack fa-lg">
            			<i class="fa fa-pinterest fa-2x" id="pt"></i>
        			</span>
    			</a>
                @endif
                @if(!empty($kontak->tl))
                <a target="_blank" href="{{url($kontak->tl)}}" title="Tumblr">
                	<span class="fa-stack fa-lg">
                		<i class="fa fa-circle fa-stack-2x" id="tl"></i>
                		<i class="fa fa-tumblr fa-stack-1x fa-inverse"></i>
            		</span>
        		</a>
                @endif
                @if(!empty($kontak->ig))
                <a target="_blank" href="{{url($kontak->ig)}}" title="Instagram">
                	<span class="fa-stack fa-lg">
                		<i class="fa fa-circle fa-stack-2x" id="ig-circle"></i>
                		<i class="fa fa-instagram fa-stack-1x fa-inverse" id="ig"></i>
            		</span>
        		</a>
                @endif
			</p>
			<br><br>
		</div>

		<div class="col-xs-11 col-sm-2">
			<div class="main-title">
				<p class="custom-font-1">Pembayaran</p>
			</div>
			<p class="social">
				@if(count( list_banks() ) > 0)
					@foreach(list_banks() as $value)
					<a>{{HTML::image(bank_logo($value))}}</a><br>
					@endforeach
				@endif
				@if(count(list_payments()) > 0)
					@foreach(list_payments() as $pay)
						@if($pay->nama == 'ipaymu' && $pay->aktif == 1)
						<img src="{{url('img/bank/ipaymu.jpg')}}" alt="ipaymu" />
						@endif
					@endforeach
				@endif
				@if(count(list_dokus()) > 0 && list_dokus()->status == 1)
				<img src="{{url('img/bank/doku.jpg')}}" alt="doku myshortcart" />
				@endif
			</p>
		</div>

		<div class="copyright" style="padding: 39px 0 20px 0; margin:0">
			<table>
				<tr>
					<td>
						<span>Copyright &copy; {{date('Y')}} {{ Theme::place('title') }}. Powered by <a target="_blank"  href="http://jarvis-store.com">Jarvis Store</a></span>
					</td>
				</tr>
			</table>
		</div>
	</div>
<!-- END .main-footer-wrapper -->
</div>