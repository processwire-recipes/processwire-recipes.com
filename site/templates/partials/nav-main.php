<ul class="nav-main">
	<?php foreach($nav_main as $p): ?>
		<li class="nav-main__item<?= ($p === $id) ? ' nav-main__item--current' : '' ?>"><a href="<?= $pages->get($p)->url?>"><?= $pages->get($p)->title ?></a></li>
	<?php endforeach; ?>
</ul>