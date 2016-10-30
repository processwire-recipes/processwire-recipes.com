{{ page.renderChunk('partials/header.php') }}

<div class="col-50">
	<div class="welcome-box">
		<h2 class="page-headline">{{ headline }}</h2>

		{{ body }}

		<ul class="welcome-links">
			<li><a href="//github.com/processwire-recipes/Recipes" class="btn btn-default" target="_blank"><i class="fa fa-github-square"></i> Contribute via Pull Request</a></li>
			<li><a href="//processwire-recipes.com/feed" class="btn btn-default" target="_blank"><i class="fa fa-rss"></i> Grab the Recipe feed</a></li>
			<li><a href="//twitter.com/pwrecipes" class="btn btn-default" target="_blank"><i class="fa fa-twitter"></i> Follow us on twitter</a></li>
		</ul>

	</div>

	<div class="module module-taglist">
			<h3>Recent Tags</h3>

			<ul>
				{% for t in tags %}
				<li><a href="{{ t.url }}">{{ t.title }}</a> </li>
				{% endfor %}
			</ul>
	</div>
</div>

<div class="col-50">

	<div class="module module-recipelist">
		<h3>Recent Recipes</h3>

		<ul class="module-recipelist__list">
			{% for r in recipes %}
				<li class="module-recipelist__listitem"><a href="{{ r.url }}">{{ r.title }}</a></li>
			{% endfor %}
		</ul>

	</div>



</div>

{{ page.renderChunk('partials/footer.php') }}

