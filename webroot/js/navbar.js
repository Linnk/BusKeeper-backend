window.addEvent('domready', function(){
	$$('[data-toggle=navbar]').each(function(toggle_nabvar, tn){
		var toggle_targets = $$(toggle_nabvar.get('data-target'));
		
		toggle_targets.each(function(toggle_target, tt){
			toggle_target.addEvents({
				'close':function(){
					toggle_target.removeClass('open');
				},
				'open':function(){
					toggle_target.addClass('open');
				}
			});
		});
		toggle_nabvar.addEvents({
			'click':function(e) {
				e.stop();
				this.fireEvent('toggle');
			},
			'toggle':function(){
				toggle_targets.each(function(toggle_target, tt){
					if(toggle_target.hasClass('open')) {
						toggle_target.fireEvent('close');
					} else {
						toggle_target.addClass('open');
						toggle_target.fireEvent('open');
					}
				});
			}
		});
	});
	
	var sidebar = $('navbar-sidebar');
	var body = document.getElement('body');
	
	if(sidebar && body) {
		sidebar.setStyles({
			'right': '-100%',
			'display': 'block'
		});
		var width = sidebar.getSize().x;
		var animation = new Fx({
			duration:300,
			transition: Fx.Transitions.Sine.easeOut
		});
		animation.set = function(value) {
			sidebar.setAnimPos(value);
		}
		sidebar.setAnimPos = function(value) {
			sidebar.setStyle('right', (value-width)+'px');
			body.setStyle('margin-left', ((value*-2))+'px');
		}
		sidebar.addEvents({
			'close':function() {
				width = sidebar.getSize().x;
				animation.cancel();
				animation.start(width, 0);
			},
			'open':function() {
				width = sidebar.getSize().x;
				animation.cancel();
				animation.start(0, width);
			}
		});
		sidebar.setAnimPos(0);
		body.addEvent('click', function(e){
			if(sidebar.hasClass('open')) {				
				if(sidebar==e.target || sidebar==e.target.getParent('#navbar-sidebar')) {

				} else {
					e.stop();
					sidebar.fireEvent('close');
				}	
			}
		});
	}
});