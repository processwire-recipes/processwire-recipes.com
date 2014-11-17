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
	<?php
		$tags = $page->tags;
		$section_headline = "Tags";
		include_once ("partials/list-tags.php"); ?>
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