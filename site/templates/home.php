<?php $page->renderChunk('partials/header.php'); ?>


<div class="col-50">
	<h2 class="page-headline"><?= $headline ?></h2>

	<?= $body ?>

	<a href="#" class="btn btn-default"><i class="fa fa-github-square"></i> Contribute via Pull Request on GitHub</a>
</div>

<div class="col-50">

	<div class="module module-recipelist">
		<h3>Recent Recipes</h3>

		<ul class="module-recipelist__list">
			<?php foreach ($recipes as $r): ?>
				<li class="recipelist__listitem"><a href="<?= $r->url ?>"><?= $r->title ?></a>


				</li>
			<?php endforeach; ?>
		</ul>

	</div>

	<div class="module module-taglist">
		<h3>Recent Tags</h3>

		<ul>
			<?php foreach ($tags as $t): ?>
				<li><a href="<?= $t->url ?>"><?= $t->title ?></a> </li>
			<?php endforeach; ?>
		</ul>
	</div>

</div>

<?php $page->renderChunk('partials/footer.php'); ?>
