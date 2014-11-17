var pwr = {

	initSyntaxHighlighting : function() {
		$('.section-recipe').find('code').each(function (i, block) {
			hljs.highlightBlock(block);
		});
	}

};

pwr.initSyntaxHighlighting();

