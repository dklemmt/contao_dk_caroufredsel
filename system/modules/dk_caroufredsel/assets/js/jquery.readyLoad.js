/*	
 *	jQuery readyLoad
 *	
 *	Copyright (c) 2012 Fred Heusschen
 *	www.frebsite.nl
 *
 *	Dual licensed under the MIT and GPL licenses.
 *	http://en.wikipedia.org/wiki/MIT_License
 *	http://en.wikipedia.org/wiki/GNU_General_Public_License
 */


(function( $ )
{

	var fn2s = [];
	var fn2d = [];
	var interval = null;


	$.readyLoad = function()
	{
	
		var args = [].slice.call( arguments ),
			direct = false;

		if ( typeof args[ 0 ] == 'boolean' )
		{
			direct = args.shift();
		}
		var fn1 = args[ 0 ],
			fn2 = args[ 1 ],
			fn3 = args[ 2 ];

		if ( typeof fn1 != 'function' )
		{
			return;
		}
		if ( typeof fn2 != 'function' && fn2 !== false )
		{
			fn2 = fn1;
		}


		$(document).ready(
			function()
			{
				fn1();
			}
		);
		if ( typeof fn2 == 'function' )
		{
			fn2s.push( fn2 );
			if ( direct )
			{
				fn2d.push( fn2 );
			}
		}
		if ( typeof fn3 == 'function' )
		{
			$(window).load(
				function()
				{
					fn3();
				}
			);
		}

		if ( !interval )
		{
			interval = setInterval(
				function()
				{
					for ( var a = 0, l = fn2d.length; a < l; a++ )
					{
						fn2d[ a ]();
					}
				}, $.readyLoad.interval
			);
			$(document).ready(
				function()
				{
					clearInterval( interval );
					interval = setInterval(
						function()
						{
							for ( var a = 0, l = fn2s.length; a < l; a++ )
							{
								fn2s[ a ]();
							}
						}, $.readyLoad.interval
					);
				}
			);
			$(window).load(
				function()
				{
					clearInterval( interval );
					setTimeout(
						function()
						{
							for ( var a = 0, l = fn2s.length; a < l; a++ )
							{
								fn2s[ a ]();
							}
						}, 1
					);
				}
			);
		}
	};
	$.readyLoad.interval = 500;

})( jQuery );