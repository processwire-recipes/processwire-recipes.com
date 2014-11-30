{{ page.renderChunk('partials/header.php') }}

<div class="module module-recipelist">
	<h3>Recent Recipes</h3>

	<ul class="module-recipelist__list">
		{% for r in recipes %}
			<li class="module-recipelist__listitem"><a href="{{ r.url }}">{{ r.title }}</a></li>
		{% endfor %}
	</ul>

</div>

{{ page.renderChunk('partials/footer.php') }}

