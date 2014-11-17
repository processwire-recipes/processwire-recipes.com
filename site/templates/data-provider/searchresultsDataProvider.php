<?php
$out = '';

if($q = $sanitizer->selectorValue($input->get->q)) {

	$input->whitelist('q', $q);

	$matches = $pages->find("template=recipe, title|solution|problem%=$q, limit=50");

	$count = count($matches);

	if($count) {
		$out .= "<h2>Found $count pages matching your query:</h2>" .
		        "<ul class='module-recipelist__list'>";

		foreach($matches as $m) {
			$out .= "<li class='module-recipelist__listitem'><a href='{$m->url}'>{$m->title}</a></li>";
		}

		$out .= "</ul>";

	} else {
		$out .= "<h2>Sorry, no results were found.</h2>";
	}
}