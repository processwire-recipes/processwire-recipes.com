<div class="col-50">
	<h2 class="page-headline"><?= $headline ?></h2>

	<?= $body ?>

	<a href="#" class="btn btn-default"><i class="fa fa-github-square"></i> Contribute via Pull Request on GitHub</a>
</div>

<div class="col-50">

	<?php
		$section_headline = "Recent recipes";
		$recipes = $pages->find("template=recipe, sort=-created, limit=10");
		include_once ("partials/list-recipes.php"); ?>

	<?php
		$section_headline = "Recent tags";
		$tags = $pages->find("template=recipe-tag, sort=-created, limit=10");
		include_once ("partials/list-tags.php"); ?>

</div>