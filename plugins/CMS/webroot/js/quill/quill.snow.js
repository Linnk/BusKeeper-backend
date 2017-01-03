window.addEvent('domready',function(){
	$$('[input=text-editor]').each(function(textEditor, i){
		var editorWrapper = new Element('div.text-editor-wrapper',{'html':'<div class="toolbar-container"> <span class="ql-format-group"> <select title="Size" class="ql-size"> <option value="12px">Small</option> <option value="14px" selected>Normal</option> <option value="18px">Medium</option> <option value="25px">Large</option> <option value="30px">Huge</option> </select> </span> <span class="ql-format-group"> <span title="Bold" class="ql-format-button ql-bold"></span> <span class="ql-format-separator"></span> <span title="Italic" class="ql-format-button ql-italic"></span> <span class="ql-format-separator"></span> <span title="Underline" class="ql-format-button ql-underline"></span> </span> <span class="ql-format-group"> <!--<select title="Text Color" class="ql-color"> <option value="rgb(0, 0, 0)" selected></option> <option value="rgb(230, 0, 0)"></option> <option value="rgb(255, 153, 0)"></option> <option value="rgb(255, 255, 0)"></option> <option value="rgb(0, 138, 0)"></option> <option value="rgb(0, 102, 204)"></option> <option value="rgb(153, 51, 255)"></option> <option value="rgb(255, 255, 255)"></option> <option value="rgb(250, 204, 204)"></option> <option value="rgb(255, 235, 204)"></option> <option value="rgb(255, 255, 204)"></option> <option value="rgb(204, 232, 204)"></option> <option value="rgb(204, 224, 245)"></option> <option value="rgb(235, 214, 255)"></option> <option value="rgb(187, 187, 187)"></option> <option value="rgb(240, 102, 102)"></option> <option value="rgb(255, 194, 102)"></option> <option value="rgb(255, 255, 102)"></option> <option value="rgb(102, 185, 102)"></option> <option value="rgb(102, 163, 224)"></option> <option value="rgb(194, 133, 255)"></option> <option value="rgb(136, 136, 136)"></option> <option value="rgb(161, 0, 0)"></option> <option value="rgb(178, 107, 0)"></option> <option value="rgb(178, 178, 0)"></option> <option value="rgb(0, 97, 0)"></option> <option value="rgb(0, 71, 178)"></option> <option value="rgb(107, 36, 178)"></option> <option value="rgb(68, 68, 68)"></option> <option value="rgb(92, 0, 0)"></option> <option value="rgb(102, 61, 0)"></option> <option value="rgb(102, 102, 0)"></option> <option value="rgb(0, 55, 0)"></option> <option value="rgb(0, 41, 102)"></option> <option value="rgb(61, 20, 102)"></option> </select>--> <span class="ql-format-separator"></span> <select title="Background Color" class="ql-background"> <option value="rgb(0, 0, 0)"></option> <option value="rgb(230, 0, 0)"></option> <option value="rgb(255, 153, 0)"></option> <option value="rgb(255, 255, 0)"></option> <option value="rgb(0, 138, 0)"></option> <option value="rgb(0, 102, 204)"></option> <option value="rgb(153, 51, 255)"></option> <option value="rgb(255, 255, 255)" selected></option> <option value="rgb(250, 204, 204)"></option> <option value="rgb(255, 235, 204)"></option> <option value="rgb(255, 255, 204)"></option> <option value="rgb(204, 232, 204)"></option> <option value="rgb(204, 224, 245)"></option> <option value="rgb(235, 214, 255)"></option> <option value="rgb(187, 187, 187)"></option> <option value="rgb(240, 102, 102)"></option> <option value="rgb(255, 194, 102)"></option> <option value="rgb(255, 255, 102)"></option> <option value="rgb(102, 185, 102)"></option> <option value="rgb(102, 163, 224)"></option> <option value="rgb(194, 133, 255)"></option> <option value="rgb(136, 136, 136)"></option> <option value="rgb(161, 0, 0)"></option> <option value="rgb(178, 107, 0)"></option> <option value="rgb(178, 178, 0)"></option> <option value="rgb(0, 97, 0)"></option> <option value="rgb(0, 71, 178)"></option> <option value="rgb(107, 36, 178)"></option> <option value="rgb(68, 68, 68)"></option> <option value="rgb(92, 0, 0)"></option> <option value="rgb(102, 61, 0)"></option> <option value="rgb(102, 102, 0)"></option> <option value="rgb(0, 55, 0)"></option> <option value="rgb(0, 41, 102)"></option> <option value="rgb(61, 20, 102)"></option> </select> <span class="ql-format-separator"></span> <select title="Text Alignment" class="ql-align"> <option value="left" selected></option> <option value="center"></option> <option value="right"></option> <option value="justify"></option> </select> </span> <span class="ql-format-group"> <span title="Link" class="ql-format-button ql-link"></span> <span class="ql-format-separator"></span> <span title="Image" class="ql-format-button ql-image"></span> <span class="ql-format-separator"></span> <span title="List" class="ql-format-button ql-list"></span> <span class="ql-format-separator"></span> <span title="Bullet" class="ql-format-button ql-bullet"></span> </span> </div> <div class="editor-container form-control"></div>'});
		editorWrapper.inject(textEditor, 'after');

		var editorContainer = editorWrapper.getElement('.editor-container');
		var toolbarContainer = editorWrapper.getElement('.toolbar-container');
		var updateWith = textEditor;
		
		if(editorContainer && toolbarContainer) {
			editorContainer.set('id','editor-container-'+i);
			toolbarContainer.set('id','toolbar-container-'+i);
			
			textEditor = new Quill('#editor-container-'+i, {
				modules: {
					'authorship': {
						authorId: 'advanced',
						enabled: true
					},
					'toolbar': {
						container: '#toolbar-container-'+i
					},
					'link-tooltip': true,
					'image-tooltip': true,
					'multi-cursor': false
				},
				styles: false,
				theme: 'snow'
			});
			textEditor.on('text-change', function(delta, source) {
				var sourceDelta, targetDelta;
				if (source === 'api') {
					return;
				}
				$$(updateWith).each(function(update,n) {
					update.set('html', textEditor.getHTML());
					update.set('value', textEditor.getHTML());
				});
			});
			$$(updateWith).each(function(update,n) {
				update.setStyle('display','none');
				textEditor.setHTML(update.get('html'));
				textEditor.setHTML(update.get('value'));
			});
			var ql_editor = editorContainer.getElement('.ql-editor');
			ql_editor.addEvent('paste', function(e){
				//if(e)e.stop();
			});
		}
	});
});