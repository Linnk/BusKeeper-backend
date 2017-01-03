var newEfects = new Class({
	
	initialize: function() {
	},
	
	DragAndMove: function(element,container){
		if(!container)
			container=element.getParent();
		container.setStyle('position','relative');
		element.setStyle('cursor','move');
		new Drag.Move(element, {
			container: container
	 	});
	},
	Deletable: function(element,confirma,funct){
		var close = new Element('div', {
			'class': 'closeButton pointable floatButton Button-event',
			html: null
		});
		element.setStyle('position','relative');
		close.setStyles({
			'cursor':'pointer',
			'display': 'block',
			'width': '20px',
			'height': '20px',
			'background': 'transparent url(/c_m_s/img/delete.png) center center no-repeat',
			'float': 'left',
			'position': 'absolute',
			'top': '5px',
			'right':'5px',
			'z-index':'100'
		});
		close.inject(element,'top');
		close.addEvent('mousedown',function(event){if(event)event.stop();
			if(confirma)
			{	if (confirm('Do you really want to delete it?'))
				{
					if(funct)
						funct();
					this.getParent().destroy();
				}
			}else
				this.getParent().destroy();
		});
	},
	Resizable: function(element,actions){
		var resize = new Element('div', {
			'class': 'resizeButton resizable floatButton Button-event',
			html: null
		});
		resize.inject(element,'bottom');
		var resizer = resize;
		var object = element;
		var pos = false;
		var paWidth = object.getParent().getStyle('width').toInt();
		var paHeight = object.getParent().getStyle('height').toInt();
	
		resizer.addEvent('mousedown',function(win){
			pos=true;
			horizontal=win.page.x;
			vertical=win.page.y;
			width=object.getStyle('width').toInt();
			height=object.getStyle('height').toInt();
			left=object.getStyle('left').toInt();
			tosp=object.getStyle('top').toInt();
			win.stop();
			if(actions && actions.onStart)
				actions.onStart();
		});
		document.addEvent('mousemove',function(win){
			if(pos && (width-(horizontal-win.page.x))>30 && (width-(horizontal-win.page.x))< paWidth && (height-(vertical-win.page.y))>30 && (height-(vertical-win.page.y))< paHeight )       
			{
				/* ALTOO Y TOP  */
				object.setStyle('height', height-(vertical-win.page.y)+'px');
				if(tosp+((vertical-win.page.y)/2)>0)
				{
					if(tosp+((vertical-win.page.y)/2)	+	height-(vertical-win.page.y)< paHeight )
						object.setStyle('top', tosp+((vertical-win.page.y)/2)+'px');
					else
						object.setStyle('top', tosp+((vertical-win.page.y))+( paHeight -(tosp+height))+'px');
				}
				/* ANCHO Y LEFT */
				object.setStyle('width', width-(horizontal-win.page.x)+'px');
				if(left+((horizontal-win.page.x)/2)>0)
				{
					if(left+((horizontal-win.page.x)/2)	+	width-(horizontal-win.page.x)< paWidth)
						object.setStyle('left', left+((horizontal-win.page.x)/2)+'px');
					else
						object.setStyle('left', left+((horizontal-win.page.x))+( paWidth -(left+width))+'px');
				}
			}
		});
		document.addEvent('mouseup',function(e){
			if(pos){
				pos=false;
				if(actions && actions.onFinish)
					actions.onFinish();
			}
		});
	},
	CleanContent: function(element){
		var mensaje = element.get('value');
		element.store('mensaje',mensaje);
		element.store('bandera',1);
		element.addEvents({
			focus: function(){
				if(this.get('value')==this.retrieve('mensaje') && this.retrieve('bandera')==1)
					this.set('value','').store('bandera',0).addClass('active').removeClass('inactive');
			},
			blur: function(){
				if(this.get('value')=='' && this.retrieve('bandera')==0)
					this.set('value',this.retrieve('mensaje')).store('bandera',1).addClass('inactive').removeClass('active');
			},
			keydown: function(event){
				if(event.key=='enter')
					if(!event.shift)
					{
						var patentform = this.getParent('.form_auto_submit');
						if(patentform)
							patentform.fireEvent('submit');
					}
			}
		});
	},
	unableLink: function(element,rename){
		if(rename)
			element.set('href','/');
		element.addEvent('click',function(e){	
			if(e)e.stop();		
		});
	},
	fadeOutIn: function(elementO,elementI){
		elementO.tween('opacity', 0);
		elementI.tween('opacity', 1);
	},
	OrganizeElements: function(elements,options){
		if(!elements[0]) return false;
		var container = options.container;
		var activo = false;
		var element = null;
		var clone = null;
		var clone2 = null;
		var X=0;
		var Y=0;
		var Top=0;
		var Left=0;
		var pos;
		var position;
		var dropables=[];
		var timer=false;
		var mueve=false;
		var blankspace=null;
		var didMove=false;
		if(!container)
			container=elements[0].getParent();
		container.setStyle('position','relative');
		elements.setStyle('cursor','move');
		var getDropables = function()
		{
			$$('.IOSorganize.IOSstill').each(function(e,i){
				pos = getElementCoordinates(e);
				dropables[i]={minx: pos.left, maxx: (pos.left).toInt()+(pos.width).toInt(), miny: pos.top, maxy: (pos.top).toInt()+(pos.height).toInt(), mid: pos.left.toInt()+(pos.width/2).toInt()}
			});
		};
		var getElementCoordinates = function(element){
			var position = element.getCoordinates();
			if (element.getStyle('position') == 'fixed'){
				var scroll = window.getScroll();
				position.left += scroll.x;
				position.right += scroll.x;
				position.top += scroll.y;
				position.bottom += scroll.y;
			}
			return position;
		};
		var muevoelobjeto = function(){
			didMove=true;
			var lugar=null;
			var ultimo=false;
			var dir=false;	
			dropables.each(function(dropable,i){
				if((Top+position.height/2)>dropable.miny && (Top+position.height/2)<dropable.maxy && (Left+position.width/2)>dropable.minx && (Left+position.width/2)<dropable.maxx)
					lugar=i+1;
			});
			if(lugar)
			{	
				lugar--;
				el=$$('.IOSorganize.IOSstill')[lugar];
				if((Left+position.width/2)<dropables[lugar].mid || el.hasClass('IOSlast'))
					dir=true;
				if(dir)
					dir='before';
				else
					dir='after';
				/* EFECTO DE TRANLASION */
				blankspace.inject(el,dir);
				blankspace.morph({
					'width':element.retrieve('width'),
					'margin-left':element.retrieve('margin-left'),
					'margin-right':element.retrieve('margin-right')	
				});
				element.morph({
					'width':0,
					'margin-left':0,
					'margin-right':0	
				});
				(function(){
					element.inject(el,dir);
					element.morph({
						'width':element.retrieve('width'),
						'margin-left':element.retrieve('margin-left'),
						'margin-right':element.retrieve('margin-right')	
					});
					blankspace.morph({
						'width':0,
						'margin-left':0,
						'margin-right':0
					});
				}).delay(200);
			}
			(function(){getDropables();}).delay(200);
		};
		(function(){
			if(activo && mueve && timer)
			{
				muevoelobjeto();
				mueve=false;
			}
			timer=true;
		}).periodical(50);
		/* ////////////////////////////////DOCUMENTO////////////////////////////// */
		document.addEvents({
			mouseup:function(){
				if(activo){ 
					//(function(){
						activo = false;
					//}).delay(300);
				position = getElementCoordinates(element);
				if(clone)
				{
					clone.set('morph',{'duration':300});
					clone.morph({
						'top':position.top-window.getScroll().y,
						'left':position.left-window.getScroll().x
					});
				}
				(function(){
					element.setStyle('opacity',1).addClass('IOSstill');
					$$('.IOSclone').each(function(e,i){e.destroy();});
					
					if(options.onFinish && didMove)
					{
						didMove=false;
						options.onFinish();
					}	
					element=null;
				}).delay(300);
				}
			},
			mousemove:function(event){
				if(activo)
				{
					Top=position.top-(Y-event.page.y);
					Left=position.left-(X-event.page.x);
					clone.setStyles({
						'top':Top-window.getScroll().y,
						'left':Left-window.getScroll().x				
					});
					timer=false;
					mueve=true;
				}
			}
		});			
			/* ////////////////////////////////ELEMENTO0 ////////////////////////////// */
		elements.each(function(e,i){
			e.getElements('.innerElement').each(function(el,index){
				el.addEvents({
					'mousedown':function(event){
						if(event)event.stopPropagation();
					}
				});
			});
			e.addClass('IOSorganize IOSstill');

			e.addEvents({
				mousedown:function(event){if(event)event.stop();
					if(!activo && !element)
					{
						X=event.page.x;
						Y=event.page.y;
						activo=true;
						element=this;
						/*     ELEMENT    */
						position = getElementCoordinates(element);
						element.store('width',element.getStyle('width'));
						element.store('margin-left',element.getStyle('margin-left'));
						element.store('margin-right',element.getStyle('margin-right'));
						element.set('morph',{duration:200});
						element.setStyle('opacity',0);
						element.removeClass('IOSstill');
						blankspace=element.clone();
						blankspace.set('morph',{duration:200});
						blankspace.addClass('IOSclone').setStyle('background-color','#541');
						blankspace.setStyles({
							'width':0,
							'margin-left':0,
							'margin-right':0	
						});
						/*     CLONE    */
						clone=element.clone();
						clone.addClass('IOSclone IOSmoving');
						clone.setStyles({
							'opacity':1,
							'margin':'0px',
							'z-index':111,
							'position':'fixed',
							'top':position.top-window.getScroll().y,
							'left':position.left-window.getScroll().x
						});
						clone.inject(this,'after');
						
						lastspace = element.clone();
						lastspace.addClass('IOSclone IOSstill IOSlast');
						if(elements[0])
						if(elements[0].getParent())
						if(elements[0].getParent().getElement('.clear'))
							lastspace.inject(elements[0].getParent().getElement('.clear'),'before');
						getDropables();
					}
				}
			});
		});
	}
});
