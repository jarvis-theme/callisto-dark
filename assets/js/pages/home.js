define(['jquery','jq_cycle'], function($)
{
	return new function()
	{
		var self = this;
		self.run = function()
		{
			$(document).ready(function(){		//when DOM is ready
				initHomepageSlider();
		    });
		};

		initHomepageSlider = function() {
			$('#hompage-slider_content').cycle({
				fx: 'scrollHorz',
				speed: '600',
				timeout: '5000',
				prev:   '.previous', 
				next:   '.next',
				pager: '#pager',
				activePagerClass: "active",
				easing: 'swing',
				slideResize: 0,
				containerResize: 1,
				slideExpr: '.item',
				pagerAnchorBuilder: function(idx, slide) {  return ''; }
			});

			$('.navigation .bullet').click(function(){
				var index = $('.navigation #pager a').index($(this));
				$('#hompage-slider_content').cycle(index);
				return false;
			});
		};
	};
});