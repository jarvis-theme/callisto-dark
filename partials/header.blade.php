<!-- BEGIN .main-dock-wrapper -->
<div class="main-dock-wrapper">
	<div class="main-dock">
		<ul>
			<li><a href="/" class="home"></a></li>
			@if ( ! is_login() )
				<li>{{HTML::link('member', 'Login')}}</li>
				<li>{{HTML::link('member/create', 'Register')}}</li>
			@else
				<li>{{HTML::link('member', user()->nama)}}</li>
				<li>{{HTML::link('logout', 'Logout')}}</li>
			@endif			
			<!-- <li class="checkout"><a href="customer-checkout-step-1.html">Checkout</a></li> -->
			<li id='shoppingcartplace' class="cart">{{$ShoppingCart}}</li>
		</ul>
	</div>
<!-- END .main-dock-wrapper -->
</div>

<!-- BEGIN .main-header -->
<div class="main-header">
	<div class="logo">
		<a href="{{URL::to('home')}}">
            <img src="{{url(logo_image_url())}}" style="max-height:120px" /></a>
		</a>
		<!-- <a href="#" class="logo-icon custom-font-1"><span>Soulage</span></a> -->
		<!-- <a href="#" class="logo-blank custom-font-1"><span>Mante&nbsp;and&nbsp;sons</span></a> -->
		<!-- <span class="custom-font-1">{{$toko->judul}}</span> -->
	</div>

	<div class="search">
		<form action="{{URL::to('search')}}" method="post">
			<input type="text" class="input-text-1 trans-1" placeholder="cari.." name="search" />
		</form>
	</div>

	<div class="clear"></div>

	<div class="main-menu-iphone">
		<div class="categories">
			<span class="icon"></span>
			<select>
				@foreach($mainMenu as $key=>$link)
					<option>{{$link->nama}}</option>
				@endforeach
			</select>
		</div>
		<div class="search-iphone">
			<form action="#">
				<input type="text" class="input-text-1 trans-1" placeholder="Cari" />
			</form>
		</div>
		<div class="clear"></div>
	</div>

	<div class="main-menu custom-font-1">
		<table>
			<tr>
				<td>
					<ul>
						@foreach($mainMenu as $key=>$link)
							@if($link->halaman=='1')
								<li><a class="single" href={{"'".URL::to("halaman/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a></li>
							@elseif($link->halaman=='2')
								<li><a class="single" href={{"'".URL::to("blog/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a></li>
							@elseif($link->url=='1')
								<li><a class="single" href={{"'".URL::to(strtolower($link->linkTo))."'"}}>{{$link->nama}}</a></li>
							@else
								<li><a class="single" href={{"'".URL::to(strtolower($link->linkTo))."'"}}>{{$link->nama}}</a></li>
							@endif
						@endforeach
					</ul>
				</td>
			</tr>
		</table>
	</div>

	<div class="clear"></div>

<!-- END .main-header -->	
</div>