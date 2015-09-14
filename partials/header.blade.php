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
		@if(@getimagesize(url(logo_image_url())))
        <a href="{{URL::to('home')}}">
            <img src="{{url(logo_image_url())}}" style="max-height:120px" /></a>
		</a>
        @else
        <a href="{{url('home')}}" style="color:#5EC80C"><h1 style="font-family: Viga; font-size: 35px;">{{ shortText(Theme::place('title'),26) }}</h1></a>
        @endif
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
			<select onchange="if(this.options[this.selectedIndex].value != ''){window.top.location.href=this.options[this.selectedIndex].value}">
				@foreach(main_menu()->link as $menu)	
				<option value="{{menu_url($menu)}}">{{$menu->nama}}</option>
				@endforeach	
			</select>
		</div>
		<div class="search-iphone">
			<form action="{{url('search')}}" method="post">
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
						@foreach(main_menu()->link as $links)	
						<li><a class="single" href="{{menu_url($links)}}">{{$links->nama}}</a></li>
						@endforeach	
					</ul>
				</td>
			</tr>
		</table>
	</div>

	<div class="clear"></div>
</div>
<!-- END .main-header -->	