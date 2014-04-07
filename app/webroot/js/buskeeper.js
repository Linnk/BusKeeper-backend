window.addEvent('domready', function(){
	
	var Screen1 = $('Screen1');
	var Screen2 = $('Screen2');
	var Screen3 = $('Screen3');
	
	if(Screen1 && Screen2 && Screen3)
	{
		Screen2.setStyle('opacity', 0);
		Screen3.setStyle('opacity', 0);
		
		(function(){
			Screen2.tween('opacity', 1);
		}).delay(2500);
		(function(){
			Screen1.tween('opacity', 0);
			Screen1.getParent().addEvents({
				'mouseenter':function(event) 
				{
					//Screen1.tween('opacity', 0);
					Screen3.tween('opacity', 1);
				},
				'mouseleave':function(event) 
				{
					//Screen1.tween('opacity', 1);
					Screen3.tween('opacity', 0);
				}
			});
		}).delay(3000);		
	}
	
	$$('.lionplayer').each(function(player,i){
		lionPlayer = new LionPlayer(player);
	});
});