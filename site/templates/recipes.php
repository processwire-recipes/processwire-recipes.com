<?php
	$section_headline = 'All Recipes';
	$show_tags = true;
	$show_authors = false;
	$pagination = false;
	$recipes = $pages->find("template=recipe, sort=-created, limit=30");
	include_once ("partials/list-recipes.php");
