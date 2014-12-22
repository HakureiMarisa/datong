$(document).ready(function() {
	$('#TopNavigation_v2c>ul>li>a').click(function(){
	    var d = $(this).next();
	    if(d.is(':visible'))
	        d.hide();
	    else
	        d.show();
	});
	var currentClick = 0;
	function showHover() {
		$(this).parent('li').children('ul').toggle();
	}
});