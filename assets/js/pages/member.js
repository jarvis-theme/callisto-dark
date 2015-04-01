define(['jquery','jq_uniform'], function($)
{
	return new function()
	{
		var self = this;
		var URL = window.location.protocol + "//" + window.location.host;
		var lod ="<img src='"+URL+"/img/ajax-loader.gif' id='lod' style='margin-top: 10px; padding-left: 10px;'>";
		self.run = function()
		{
			negara();
			provinsi();

			initAddressManage();
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

		var negara = function(){
			// pilih negara
			$('#negara').change(function(){
				$('#uniform-negara').parent().append(lod);
				$('#provinsi').attr('disabled', 'true');
				id=this.value;
				if(id!=''){			
					$(this).attr("disabled",true);
					$.ajax({
				  	  url: URL+'/admin/provinsi/list/'+id,		    
				  	  type: 'get',
					}).done(function(data){		
						$('#provinsi').find('option').remove();						
					}).done(function(data){
						$('#provinsi').removeAttr('disabled');
						$('#provinsi').append(data);
						$('#lod').remove();
						$('#negara').attr("disabled",false);
					});
				}else{
					$('#lod').remove();
				}
			});
		};

		var provinsi = function(){
			// pilih provinsi
			$('#provinsi').change(function(){
				$('#uniform-provinsi').parent().append(lod);
				$('#kota').attr('disabled', 'true');
				id=this.value;
				if(id!=''){		
					$(this).attr("disabled",true);
					$.ajax({
				  	  url: URL+'/admin/kabupaten/list/'+id,	    
				  	  type: 'get',
					}).done(function(data){		
						$('#kota').find('option').remove();						
					}).done(function(data){
						$('#kota').removeAttr('disabled');
						$('#kota').append(data);
						$('#lod').remove();
						$('#provinsi').attr("disabled",false);
					});
				}
			});
		};
	};
});