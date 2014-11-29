<?php $page->renderChunk('partials/header.php'); ?>

<div class="module module-recipelist">
	<h3>Recent Recipes</h3>

	<ul class="module-recipelist__list">
		<?php foreach ($recipes as $r): ?>
			<li class="module-recipelist__listitem"><a href="<?= $r->url ?>"><?= $r->title ?></a>


			</li>
		<?php endforeach; ?>
	</ul>

</div>

<?php $page->renderChunk('partials/footer.php'); ?>

