<?php
	$section_headline = 'All Tags';
	$pagination = false;
	$tags = $pages->find("template=recipe-tag, sort=name");
	include_once ("partials/list-tags.php");
