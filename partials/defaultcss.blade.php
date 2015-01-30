	<!-- Stylesheets -->
	{{HTML::style(dirTemaToko().'callisto-dark/assets/css/main-stylesheet.css')}}
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ropa+Sans" type="text/css" />
	{{HTML::style(dirTemaToko().'callisto-dark/assets/css/dark.css')}}
	{{--HTML::style('themes/callisto/assets/css/dark-checkout.css')--}}

	<!--[if lt IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" type="text/css" /><![endif]-->
	<!-- <link rel="stylesheet" href="css/dark.css" type="text/css" /> -->
	<!--[if lt IE 9]><link rel="stylesheet" href="css/ie-dark.css" type="text/css" type="text/css" /><![endif]-->
	@if($tema->isiCss=='')
		{{--HTML::style('themes/callisto/assets/css/main-stylesheet.css')--}}
	@else
		{{--HTML::style('themes/leisure/assets/css/baseEdit.css')--}}
	@endif

	<!-- Icon Logo -->
	<link rel="shortcut icon" href="{{URL::to(getPrefixDomain().'/galeri/'.$toko->logo)}}">