var dirTema = document.getElementsByTagName('link')[0].getAttribute('href');
var inDevelopment = true, version = "0.01";

require.config({
	baseUrl: '/',
	shim: {
		"bootstrap"	: {
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
	},
    "waitSeconds" : 60,
    urlArgs: "v=" +  ((inDevelopment) ? (new Date()).getTime() : version),

	paths: {
		// LIBRARY
		bootstrap 		: dirTema+'assets/js/lib/bootstrap.min',
		cart			: 'js/cart',
		jq_cycle		: dirTema+'assets/js/lib/jquery.cycle.all',
		jq_placeholder	: dirTema+'assets/js/lib/jquery.placeholder.min',
		jq_ui			: 'js/jquery-ui',
		jq_uniform		: dirTema+'assets/js/lib/jquery.uniform',
		jquery 			: dirTema+'assets/js/lib/jquery.min',
		js_global		: dirTema+'assets/js/lib/global',
		noty			: 'js/jquery.noty',

		// ROUTE
		router          : 'js/router',

		// CONTROLLER
		category        : dirTema+'assets/js/pages/category',
		home            : dirTema+'assets/js/pages/home',
		member          : dirTema+'assets/js/pages/member',
		main            : dirTema+'assets/js/pages/default',
		produk          : dirTema+'assets/js/pages/produk',
		// cart         	: dirTema+'assets/js/pages/cart',
	}
});
require([
	'router',
	'bootstrap',
	'main',
], function(router,b, main)
{
	// CATEGORY
	router.define('category/*','category@run');

	// HOME
	router.define('/','home@run');
	router.define('home', 'home@run');

	// MEMBER
	router.define('member/*', 'member@run');

	// PRODUK
	// router.define('produk', 'cart@run');
	router.define('produk/*', 'produk@run');
	main.run();
	
	router.run();
});