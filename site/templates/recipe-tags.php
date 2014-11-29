<?php $page->renderChunk('partials/header.php'); ?>


<div class="module module-taglist">
	<h3>All Tags</h3>

	<ul>
		<?php foreach ($tags as $t): ?>
			<li><a href="<?= $t->url ?>"><?= $t->title ?></a> </li>
		<?php endforeach; ?>
	</ul>
</div>

<?php $page->renderChunk('partials/footer.php'); ?>

