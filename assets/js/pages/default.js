define(['jquery','jq_cycle','jq_uniform'], function($)
{
	return new function()
	{
		var self = this;
		self.run = function()
		{
			$(document).ready(function(){		//when DOM is ready
				initScrollTop();
				initAccountLogin();
				initFormElements();
				initAddressManage();
		    });
		    showOption();
		};

		var initAddressManage = function() {
			$('.edit-address-btn').click(function(){
				var editForm = 'edit_' + $(this).parents('.row').attr('id');				
				$('#' + editForm ).slideDown(300);
				return false;
			});
			
			$('.address-edit-form-cancel').click(function(){
				$(this).parents('.address-edit-form').slideUp(300);
				return false;
			});
		};

		var showOption = function(){
			$('#view').change(function(){
				/*id=this.value;
				link = $(this).attr('data-rel');
				// link = window.location.host;
				arr = new Array();
				data = getQueryVariable();
				qry = '';
				if(data['view']!=undefined){
					if(qry==''){
						qry = qry+'?show='+id;
					}
					else{
						qry = qry+'&show='+id;
					}
				}else{
					if(qry==''){
						qry = qry+'?show='+id;
					}
					else{
						qry = qry+'&show='+id;
					}
				}
				window.location = link+qry;*/
				// window.location.href = qry;
				val = this.value;
				
			});
		};
		var getQueryVariable = function() {
		    var query = window.location.search.substring(1);
		    var vars = query.split('&');
		    var rs = new Array();
		    for (var i = 0; i < vars.length; i++) {
		        var pair = vars[i].split('=');
		        rs[decodeURIComponent(pair[0])] = decodeURIComponent(pair[1]);
		    }
		    return rs;
		};

		var initFormElements = function() {
			$("select").uniform();
		};

		var initHomepageSlider = function() {
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

		var initScrollTop = function() {
			$('.back-to-the-top').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 400);
				return false;
			});
		};

		var initAccountLogin = function() {
			if (window.location.hash == '#recover') {
				$('#login_form').hide();
				$('#password_recovery').show();
			}
			
			$('#forgot_password').click(function() {
				$('#login_form').fadeOut(200, function(){
					$('#password_recovery').fadeIn(200);
				});
				return false;
			});
		
			$('#login').click(function() {
				$('#password_recovery').fadeOut(200, function(){
					$('#login_form').fadeIn(200);
				});
				return false;
			});
		
			$('#login_submit').click(function() {
				$('#customer_login').submit();
				return false;
			});
		
			$('#recover_submit').click(function() {
				$(this).parents('form').submit();
				return false;
			});
		};
	};
});