var $k =jQuery.noConflict();

$k(document).ready(function(){
	
	$k('a#nextweek').click(function(){
			$k('.delivery_modes_nextweek').fadeIn('slow').end().find('.delivery_modes').hide();
	});
	
	$k('a#prevweek').click(function(){
			$k('.delivery_modes').fadeIn('slow').end().find('.delivery_modes_nextweek').hide();
	});

});