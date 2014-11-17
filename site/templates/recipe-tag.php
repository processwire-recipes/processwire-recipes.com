<?php

	$section_headline = 'All Tags';
	$section_headline = 'Recipes tagged "' . $page->title . '"';
	$pagination = false;
	$show_tags = true;
	$show_authors = false;
	$recipes = $pages->find("template=recipe, sort=-created, limit=0, tags={$page->name}");
	include_once ("partials/list-recipes.php");

 