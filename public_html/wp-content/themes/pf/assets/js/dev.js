	jQuery(document).ready(function() {
		alert('3');
	jQuery('#pagination_bottom a').on('click', function(e) {
		alert('4');
		e.preventDefault();
		var link = jQuery(this).attr('href');
		jQuery('#pagination_bottom').html('Loading More Posts...');
		$.get(link, function(data) {
			var post = $("#blog_data .nk-isotope-item", data);
			$('#blog_data').append(post);
		});
		jQuery('#pagination_bottom').load(link + ' #pagination_bottom a');
	});
});