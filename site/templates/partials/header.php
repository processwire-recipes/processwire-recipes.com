<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $pageTitle ?> | <?= $title ?></title>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?= $templates ?>build/css/pwr.css" rel="stylesheet" />

	<link rel="icon" type="image/png" href="<?= $templates ?>favicons/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?= $templates ?>favicons/favicon-16x16.png" sizes="16x16" />


</head>
<body class="template--<?= $template ?>">

<header class="header-main">

	<div class="inner">
		<h1 class="header-main__logo"><i class="fa fa-book"></i> <a href="<?= $frontpage->url ?>"><?= $pageTitle ?></a></h1>

		<?php $page->renderChunk('partials/nav-main.php'); ?>
		<?php $page->renderChunk('partials/search.php'); ?>
	</div>

</header>
<main class="inner content-main">

