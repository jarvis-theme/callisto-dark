define(['jquery'], function($)
{
	return new function()
	{
		var self = this;
		self.run = function()
		{
		    $(document).ready(function(){		//when DOM is ready
				adjustCollectionItemHeight();
		    });
		};

		var adjustCollectionItemHeight = function() {
			var width = $(window).width();
			
			/***** 4 columns *****/
			var items = $('.items .item-block-1');
			if(items.length > 0)
			{	
				var columns = 4;	//normal
				if(width < 959 && width > 768) { columns = 3; }	//tablet
				if(width < 768) { columns = 2; }	//smartphone
			
				resizeRowItemHeight(items, columns);
			}
				
			/***** 3 columns *****/
			var items = $('.items .item-block-2');
			if(items.length > 0)
			{	
				var columns = 3;	//normal
				if(width < 768) { columns = 2; }	//smartphone
				resizeRowItemHeight(items, columns);
			}
		};
		var resizeRowItemHeight = function(items, columns) {
			var chunks = chunk(items, columns);
			
			for(var row in chunks)
			{
				chunks[row].height(''); //reset previous height
				var maxHeight = Math.max.apply(null, chunks[row].map(function ()
				{
				    return $(this).height();
				}).get());
				chunks[row].height(maxHeight);
			}
		};
		var chunk = function (arr, len) {
			var chunks = [],
		    	i = 0,
		    	n = arr.length;

			while (i < n) {
		    	chunks.push(arr.slice(i, i += len));
			}
			return chunks;
		};
	};
});