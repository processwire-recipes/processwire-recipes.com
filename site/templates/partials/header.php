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

</head>
<body class="template--{{ template }}">

<header class="header-main">

	<div class="inner">
		<h1 class="header-main__logo"><i class="fa fa-book"></i> <a href="{{ frontpage.url }}">{{ pageTitle }}</a></h1>

		<ul class="nav-main">
			{% for p in nav_main %}
				<li class="nav-main__item{% if (p.id == id) %} nav-main__item--current {% endif %}">
					<a href="{{ p.url }}">{{ p.title }}</a></li>
			{% endfor %}
		</ul>

		<form class="module-search" action="{{ frontpage.url }}search-results/" method="get">
			<input type="text" name="q" class="module-search__query" placeholder="Search here..." />
			<button type="submit" tabindex="-1" class="module-search__submit"><i class="fa fa-search"></i> <span class="hide">Search</span></button>
		</form>

	</div>

</header>
<main class="inner content-main">