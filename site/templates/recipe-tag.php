<?php $page->renderChunk('partials/header.php'); ?>

<div class="module module-recipelist">
	<h3>Recipes tagged with <?= $tag ?></h3>

	<ul class="module-recipelist__list">
		<?php foreach ($recipes as $r): ?>
			<li class="recipelist__listitem"><a href="<?= $r->url ?>"><?= $r->title ?></a>


			</li>
		<?php endforeach; ?>
	</ul>

</div>


<?php $page->renderChunk('partials/footer.php'); ?>


 