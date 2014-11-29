<?php $page->renderChunk('partials/header.php'); ?>


<h2 class="page-headline"><?= $title ?></h2>

<section class="section-recipe">
	<h3>Problem</h3>
	<p><?= $problem ?></p>
</section>

<section class="section-recipe">

	<h3>Solution</h3>
	<p><?= $solution ?></p>
</section>

<section class="section-recipe">

	<div class="module module-taglist">
		<h3>Tags</h3>

		<ul>
			<?php foreach ($tags as $t): ?>
				<li><a href="<?= $t->url ?>"><?= $t->title ?></a> </li>
			<?php endforeach; ?>
		</ul>
	</div>

</section>

<?php if($resources): ?>
	<section class="section-recipe">
		<h3>Resources</h3>
		<p><?= $resources ?></p>
	</section>
<?php endif; ?>

<section class="section-recipe">
	<h3>Version</h3>
	<p><?= $version ?></p>
</section>

<section class="section-recipe">
	<h3>Author(s)</h3>
	<ul>
		<?php foreach($authors as $a):?>
			<li><?= $a->title ?></li>
		<?php endforeach; ?>
	</ul>
</section>

<?php $page->renderChunk('partials/footer.php'); ?>
