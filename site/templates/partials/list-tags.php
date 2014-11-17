<?php

/**
 * Module listing tags
 */

?>

<div class="module module-taglist">
	<h3><?= $section_headline ?></h3>

	<ul>
		<?php foreach ($tags as $t): ?>
			<li><a href="<?= $t->url ?>"><?= $t->title ?></a> </li>
		<?php endforeach; ?>
	</ul>
</div>