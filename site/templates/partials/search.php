<?php

/**
 * Module search
 */

?>

<form class="module-search" action="<?= $config->urls->root ?>search-results/" method="get">
	<input type="text" name="q" class="module-search__query" value="<?= htmlentities($input->whitelist('q'), ENT_QUOTES, 'UTF-8') ?>" placeholder="Search here..." />
	<button type="submit" tabindex="-1" class="module-search__submit"><i class="fa fa-search"></i> <span class="hide">Search</span></button>
</form>