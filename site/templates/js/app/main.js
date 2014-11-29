$(document).ready(function() {

	console.log("foo");

	$('.section-recipe code').each(function (i, block) {
		hljs.highlightBlock(block);
	});
});