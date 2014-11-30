$(document).ready(function() {

	$('.section-recipe code').each(function (i, block) {
		hljs.highlightBlock(block);
	});
});