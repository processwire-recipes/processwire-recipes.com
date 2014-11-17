<?php

/**
 * Module listing recent recipes
 */

?>

<div class="module module-recipelist">
	<h3><?= $section_headline ?></h3>

	<ul class="module-recipelist__list">
		<?php foreach ($recipes as $r): ?>
			<li class="recipelist__listitem"><a href="<?= $r->url ?>"><?= $r->title ?></a>

			<?php if($show_tags): ?>
				<ul class="module-recipelist__tags">
				<?php foreach($r->tags as $t): ?>
					<li class="module-recipelist__tag"><a href="<?= $t->url ?>"><?= $t->title ?></a></li>
				<?php endforeach; ?>
				</ul>
			<?php endif; ?>

			<?php if($show_authors): ?>
				<ul class="module-recipelist__authors">
					<?php foreach($r->authors as $a): ?>
						<li class="module-recipelist__author"><?= $a->title ?></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>

			</li>
		<?php endforeach; ?>
	</ul>

	<?php if ($pagination) echo $recipes->renderPager(); ?>


</div>