window.addEvent('domready', function() {
	$$('td[preview=image]').each(function(preview_image, pi){
		preview_image.addClass('text-muted');
		var value = preview_image.get('text');
		var prefix = preview_image.get('prefix');
		if(value && prefix) {
			var ps = value.trim().split('/');
			if(ps.length > 0) {
				ps[ps.length-1] = prefix+ps[ps.length-1];
			}
			value = ps.join('/');
		}
		new Element('img.img-thumbnail.img-preview', {
			src:value.trim()
		}).inject(preview_image,'top');
	});
});