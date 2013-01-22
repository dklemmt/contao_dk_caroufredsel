(function($) {
	jQuery.fn.initProgressBar = function(elementId, options) {
		var defaults = {
			barBackgroundColor: '#222222',
			barBackgroundWidth: 6
		};
	
		var options = $.extend({}, defaults, options);
	
		var canvas = document.getElementById(elementId);
		if (canvas) {
			canvas.setAttribute("width", 32);
			canvas.setAttribute("height", 32);
	
			var context = canvas.getContext("2d");
			if (context) {
				context.strokeStyle = options.barBackgroundColor;
				context.lineWidth = options.barBackgroundWidth;
				context.beginPath();
				context.arc(16, 16, 13, 0, 2*Math.PI);
				context.stroke();
			}
		}
	}
	jQuery.fn.updateProgressBar = function(elementId, options, percentage) {
		var defaults = {
			barColor: '#eeeeee',
			barWidth: 2
		};
	
		var options = $.extend({}, defaults, options);
	
		var canvas = document.getElementById(elementId);
		if (canvas) {
			var context = canvas.getContext("2d");
			if (context) {
				context.strokeStyle = options.barColor;
				context.lineWidth = options.barWidth;
				context.beginPath();
				context.arc(16, 16, 13, Math.PI*(3/2), ((360*percentage)/100)*(Math.PI/180) + Math.PI*(3/2));
				context.stroke();
			}
		}
	}
	jQuery.fn.hideProgressBar = function(elementId) {
		$('#' + elementId).animate({opacity: 0});
	}
	jQuery.fn.showProgressBar = function(elementId) {
		$('#' + elementId).animate({opacity: 1});
	}
})(jQuery);
