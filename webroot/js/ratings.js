jQuery(document).ready(function() {
	jQuery('.ratings.collapse').on('hidden.bs.collapse', function () {
		console.log(this);
		console.log('fa dot-dot-dot');
	})
	jQuery('.ratings.collapse').on('show.bs.collapse', function () {
		console.log('fa times');
	})
})