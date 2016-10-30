<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ pageTitle }} | {{ title }}</title>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="{{ templates }}build/css/pwr.css" rel="stylesheet" />

	<link rel="icon" type="image/png" href="{{ templates }}favicons/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="{{ templates }}favicons/favicon-16x16.png" sizes="16x16" />

	<link rel="alternate" type="application/rss+xml" title="Recipe RSS Feed" href="{{ frontpage.url }}feed/" />

	<meta name="google-site-verification" content="rG3o1FL36k5fLNtPdQkSrZjZotTx92sHCA-Sm-1Bk6M" />

</head>
<body class="template--{{ template }}">

<header class="header-main">

	<div class="inner">
		<h1 class="header-main__logo"><i class="fa fa-book" aria-hidden="true"></i><a href="{{ frontpage.url }}"><span class="sr-only">Go to front page of </span> {{ pageTitle }}</a></h1>

		<nav role="navigation">
			<ul class="nav-main">
				{% for p in nav_main %}
					<li class="nav-main__item{% if (p.id == id) %} nav-main__item--current {% endif %}">
						<a href="{{ p.url }}">{{ p.title }}</a></li>
				{% endfor %}
			</ul>
		</nav>

		<form class="module-search" action="{{ frontpage.url }}search-results/" method="get">
			<label for="mainsearch" class="sr-only">Search here for recipes:</label>
			<input id="mainsearch" type="text" name="q" class="module-search__query" placeholder="Search here..." aria-owns="ajaxSearch_body" aria-autocomplete="inline" required />
			<button type="submit" tabindex="-1" class="module-search__submit" aria-label="Search"><i class="fa fa-search" aria-hidden="true"></i></button>
		</form>

	</div>

</header>
<main role="main" class="inner content-main">
