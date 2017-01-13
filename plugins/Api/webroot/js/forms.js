window.addEvent('domready',function() {
	var boostrapHide = Element.prototype.hide;
	Element.implement({
        hide: function() {
	        var e = new Element(this);
            if (e.hasClass('navbar-collapse')) {
                boostrapHide.apply(this, arguments);
            }
            return this;
        }
    });
	$$('[data-toggle=tooltip]').each(function (e) {
		e.hide=null;
	});
	$$('[data-toggle=dropdown]').each(function (e) {
		parent = e.getParent('.dropdown');if(parent){parent.hide=null;}
	});
	$$('.navbar-collapse').each(function (e) {
		e.hide=null;
		jQuery(e).on('hidden.bs.collapse', function() {
			e.setStyle('display', 'none');
		});
	});
});
window.addEvent('domready', function() {
	var tz = jstz.determine();
    Cookie.write('timezone', tz.name());
     
	$$('input[type=password]').each(function(input,i){
		if(!input.md5 && !input.hasClass('login')) {
			input.md5 = input.get('value');
			if(input.md5=="") {
				return;
			}
			input.formName = input.get('name');
			input.set('type','text');
			input.set('disabled','disabled');
			var changeText = input.get('change-text') || 'Change';
			var cancelText = input.get('cancel-text') || 'Cancel';
			var inputGroup = new Element('div.input-group',{
				
			}).wraps(input).grab(new Element('span.input-group-btn').grab(new Element('button.btn.btn-secondary',{
				'type':'button',
				'html':changeText,
				'events': {
					'click':function() {
						if(this.pressed) {
							this.pressed = false;
							this.set('html', changeText);
							input.fireEvent('input_mask');
						} else {
							this.pressed = true;
							this.set('html', cancelText);
							input.fireEvent('input_change');
						}
					}
				}
			})));
			input.addEvents({
				'input_change':function() {
					input.set('type','password').set('value', '').set('disabled', false).set('name', input.formName);
				},
				'input_mask':function() {
					input.set('type','text').set('value', input.md5).set('disabled', true).set('name','');
				}
			});
			input.fireEvent('input_mask');
		}
	});
	$$('input[descriptor=json_encoded]').each(function(input, i){
		var value = input.get('value');
	});
	var datetime_vars = ["year","month","day","hour","minute","second"];
	datetime_vars.each(function(datetime_var, dv){
		$$('[name$=\['+datetime_var+'\]]').each(function(input, i){
			input.addClass(datetime_var);
		});
	});
	$$('[input=image],[input=video],[input=document]').each(function(input_file,i_f){
		console.log(input_file);
		var value = input_file.get('value');
		var filetype = input_file.get('input');
		var fileAccept = input_file.get('accept') || "*";
		var cangeText = input_file.get('change-text') || "";
		var removeText = input_file.get('remove-text') || "";
		var cancelText = input_file.get('cancel-text') || "";
		var addText = input_file.get('add-text') || "";

		if (value == null) {
			return;
		}
		var fileInput = input_file.clone();
		fileInput.set('type','file');
		fileInput.set('accept', fileAccept);
		
		var previewHtml = '<img class="img-thumbnail img-preview" src="'+value.trim()+'" />';

		if(filetype == "image") {
			previewHtml = '<img class="img-thumbnail img-preview" src="'+value.trim()+'" />';
		} else if(filetype == "video") {
			previewHtml = '<video class="video-preview" controls src="'+value.trim()+'" />';
		} else if(filetype == "document") {
			previewHtml = '<object type="application/pdf" data="'+value.trim()+'?view=FitH" width="400" height="500"><parm name="view" value="FitH/></object>';
		} else {
			previewHtml = '<iframe border="0" height="400" width="600" class="file-preview" src="'+value.trim()+'"></iframe>';
		}
		var filePreview = new Element('div',{
			'html':previewHtml
		});
		var changeBtn = new Element('input', {
			'class': 'btn btn-sm btn-info',
			'value':cangeText!="" ? cangeText:'Change',
			'type':'button',
			'events': {
				'click': function() {
					input_file.fireEvent('change');
				}
			}
		});
		var removeBtn = new Element('input', {
			'class': 'btn btn-sm btn-info',
			'value':removeText!="" ? removeText:'Remove',
			'type':'button',
			'events': {
				'click': function() {
					input_file.fireEvent('remove');
				}
			}
		});
		var cancelBtn = new Element('input', {
			'class': 'btn btn-sm btn-info',
			'value':cancelText!="" ? cancelText:'Cancel',
			'type':'button',
			'events': {
				'click': function() {
					input_file.fireEvent('cancel');
				}
			}
		});
		var addBtn = new Element('input', {
			'class': 'btn btn-sm btn-info',
			'value':addText!="" ? addText:'Add',
			'type':'button',
			'events': {
				'click': function() {
					input_file.fireEvent('add');
				}
			}
		});
		var btnsDiv = new Element('div',{
			'style':'margin: 5px 0;'
		});
		
		btnsDiv.inject(input_file, 'after');
		
		changeBtn.inject(btnsDiv,'top');
		removeBtn.inject(btnsDiv,'bottom');
		cancelBtn.inject(btnsDiv,'bottom');
		addBtn.inject(btnsDiv,'top');
		
		input_file.addEvents({
			'change':function(){
				filePreview.dispose();
				fileInput.inject(btnsDiv, 'before');
				changeBtn.dispose();
				addBtn.dispose();
				removeBtn.dispose();
				cancelBtn.inject(btnsDiv,'bottom');
			},
			'remove':function(){
				filePreview.dispose();
				input_file.set('value', "");
				removeBtn.dispose();
				changeBtn.dispose();
				addBtn.dispose();
				cancelBtn.inject(btnsDiv,'bottom');
			},
			'cancel':function(){
				input_file.set('value', value);
				fileInput.dispose();
				cancelBtn.dispose();
				addBtn.dispose();
				removeBtn.dispose();
				changeBtn.dispose();
				
				if(value!="") {
					filePreview.inject(btnsDiv, 'before');
					changeBtn.inject(btnsDiv,'top');
					removeBtn.inject(btnsDiv,'bottom');
				} else {
					addBtn.inject(btnsDiv,'top');
				}
			},
			'add':function() {
				filePreview.dispose();
				addBtn.dispose();
				removeBtn.dispose();
				changeBtn.dispose();
				fileInput.inject(btnsDiv, 'before');
				cancelBtn.inject(btnsDiv,'bottom');
			}
		});
		input_file.fireEvent('cancel');
		input_file.set('type','hidden');
	});
	$$('.many-objects').each(function(many_objects, mo){
		var owned = many_objects.getElement('.owned');
		var available = many_objects.getElement('.available');
		many_objects.getElements('.many-object').each(function(many_object, i){
			many_object.removeEvents()
			many_object.addEvents({
				'click':function(e) {
					if(e)e.stop();
					
					if(many_object.getParent('.owned')) {
						many_object.fireEvent('to_available');
					} else if(many_object.getParent('.available')) {
						many_object.fireEvent('to_owned');
					}
					
				},
				'to_owned':function() {
					var input = many_object.getElement('input');
					input.set("name", input.get("no-name"));
					many_object.removeClass('label-primary').addClass('label-success').addClass('moved');
					many_object.getElement('.fa').removeClass('fa-plus').addClass('fa-times');
					many_object.inject(owned);
				},
				'to_available':function(){
					var input = many_object.getElement('input');
					input.set("no-name", input.get("name"));
					input.set("name", null);
					many_object.removeClass('label-success').addClass('label-primary').addClass('moved');
					many_object.getElement('.fa').removeClass('fa-times').addClass('fa-plus');
					many_object.inject(available);
				}
			});
		});
	});
	$$('form [name=code]').each(function(input, i){
		var form = input.getParent('form');
		var code = input.get('value');
		if(code.match(/\{\$objectID\}/)) {
			var objec_id = form.getElement('[name=object_id]').get('value');
			if(objec_id) {
				var div = new Element('div.iframe', {
					html: code.replace(/\{\$objectID\}/g, objec_id),
					style:'max-height:400px; overflow: auto;'
				});
				div.inject(input, 'after');
			} else {
				new Element('div.iframe', {
					html: '<p><code>Paste the widget URL and save it</code></p>'
				}).inject(input, 'after');
			}
		}
	});
	
	jQuery(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
});