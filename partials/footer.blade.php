<!-- BEGIN .main-footer-wrapper -->
<div class="main-footer-wrapper">
	<a href="#" class="back-to-the-top">Kembali ke atas</a>
	<div class="main-footer">
		@foreach($tautan as $key=>$group)	
            @if($key==0 || $key>2)
            @else
	            <div class="newsletter" style="width: auto; margin: 0 6% 30px 0;">
		            <div class="main-title">
						<p class="custom-font-1">{{$group->nama}}</p>
					</div>
					<ul style="margin-left: 10px;">
					@foreach($quickLink as $key=>$link)
			            @if($group->id==$link->tautanId)
							<li>
								@if($link->halaman=='1')
									<a href={{"'".URL::to("halaman/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
								@elseif($link->halaman=='2')
									<a href={{"'".URL::to("blog/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
								@elseif($link->url=='1')
									<a href="{{strtolower($link->linkTo)}}">{{$link->nama}}</a>
								@else
									<a href={{"'".URL::to(strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
								@endif
							</li>
						@endif
					@endforeach
					</ul>
				</div>
			@endif		
		@endforeach

		<div class="menu" style="width: 163px;">
			<div class="main-title">
				<p class="custom-font-1">Sosial Network</p>
			</div>
			<p class="social" style="">
				@if($kontak->fb)
					<a style="background:none" target="_blank" href="{{$kontak->fb}}"><img src="{{URL::to(dirTemaToko().'callisto-dark/assets/images/ico-facebook-1.png')}}" alt="Facebook" width="23" height="21" /></a>
				@endif
				@if($kontak->tw)
					<a style="background:none" target="_blank" href="{{$kontak->tw}}"><img src="{{URL::to(dirTemaToko().'callisto-dark/assets/images/ico-twitter-1.png')}}" alt="Twitter" width="23" height="21" /></a>
				@endif
			</p>		
		</div>

		<div class="" style="min-width: 280px;float: left;margin: 0px 0px 0px 0px;">
			<div class="main-title">
				<p class="custom-font-1" style="font-size: 24px;">Hubungi Kami</p>
			</div>

			@if($kontak->alamat!='')
				<p><b>Alamat: </b><br>{{$kontak->alamat}}</p><br>
				<p><b>Telepon: </b><br>@if($kontak->telepon != ''){{$kontak->telepon}} @else - @endif</p><br>
                <p><b>PIN BB: </b><br>@if($kontak->bb != ''){{$kontak->bb}} @else - @endif</p><br>
				<b>Email: </b><br><a style="color:white" href="mailto:{{$kontak->email}}">{{$kontak->email}}</a>
			@else
				<p></p>
			@endif
		</div>

		<div class="copyright" style="">
		@if(!empty($bank))
			@foreach($bank as $value)
				<a><img style="" src="{{URL::to('img/'.$value->bankdefault->logo)}}" alt="" /></a>
			@endforeach
		@endif
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