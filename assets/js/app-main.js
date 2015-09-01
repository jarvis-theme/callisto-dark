var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
	baseUrl: '/',
    urlArgs: "v=001",
    waitSeconds : 60,
	shim: {
		"bootstrap"	: {
			deps : ['jquery'],
		},
		"fancybox" : {
			deps : ['jquery'],
		},
		'jq_cycle' : {
			deps : ['jquery'],
		},
		'jq_ui' : {
			deps : ['jquery'],
		},
		'jq_uniform' : {
			deps : ['jquery'],
		},
		"js_global" : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
		"noty_util" : {
			deps : ['jquery','noty'],
		},
	},

	paths: {
		// LIBRARY
		jquery 			: '//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min',
		cart			: 'js/shop_cart',
		jq_ui			: 'js/jquery-ui',
		noty			: 'js/jquery.noty',
		noty_util		: 'js/utils/noty',
		bootstrap 		: dirTema+'/assets/js/lib/bootstrap.min',
		fancybox 		: dirTema+'/assets/js/lib/jquery.fancybox.pack',
		jq_cycle		: dirTema+'/assets/js/lib/jquery.cycle.all',
		jq_placeholder	: dirTema+'/assets/js/lib/jquery.placeholder.min',
		jq_uniform		: dirTema+'/assets/js/lib/jquery.uniform',
		js_global		: dirTema+'/assets/js/lib/global',

		// ROUTE
		router          : 'js/router',

		// CONTROLLER
		category        : dirTema+'/assets/js/pages/category',
		home            : dirTema+'/assets/js/pages/home',
		main            : dirTema+'/assets/js/pages/default',
		produk          : dirTema+'/assets/js/pages/produk',
	}
});
require([
	'router',
	'bootstrap',
	'cart',
	'main',
], function(router,b,cart,main)
{
	// CATEGORY
	router.define('category/*','category@run');

	// HOME
	router.define('/','home@run');
	router.define('home', 'home@run');

	// MEMBER
	router.define('member/*', 'member@run');

	// PRODUK
	router.define('produk/*', 'produk@run');
	main.run();
	cart.run();
	router.run();
});