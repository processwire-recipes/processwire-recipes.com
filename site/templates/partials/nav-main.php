<?php
	$nav_main = [
		1014,
		1015,
		1047,
		1048
	];
?>

<ul class="nav-main">
	<?php foreach($nav_main as $p):
		$current = ($p === $id) ? " nav-main__item--current" : ""; ?>
		<li class="nav-main__item<?= $current ?>"><a href="<?= $pages->get($p)->url?>"><?= $pages->get($p)->title ?></a></li>
	<?php endforeach; ?>
</ul>