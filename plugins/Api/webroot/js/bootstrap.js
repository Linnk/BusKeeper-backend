window.addEvent('domready', function() {
	$$('.alert .close').each(function(close_button, cb){
		var alert = close_button.getParent('.alert');
		close_button.addEvent('click', function(){
			alert.fireEvent('close');
		});
		alert.addEvent('close', function(){
			alert.dispose();
		});
	});
	$$('.dropdown .dropdown-menu').each(function(dropdown_menu, dm){
		var dropdown = dropdown_menu.getParent('.dropdown');
		dropdown.addEvent('click', function(e){
			if(e) e.stop();
			if(dropdown.hasClass('open')) {
				dropdown.removeClass('open');	
			} else {
				dropdown.addClass('open');	
			}
		});
		dropdown_menu.addEvent('click', function(e){
			if(e)e.stopPropagation();
		});
	});
});
window.addEvent('click', function(e){
	$$('.dropdown.open').each(function(dropdown, d){
		dropdown.fireEvent('click', e);
	});
});