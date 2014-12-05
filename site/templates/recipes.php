{{ page.renderChunk('partials/header.php') }}

<div class="module module-recipelist">
	<h3>Recent Recipes</h3>

	<ul class="module-recipelist__list">
		{% for r in recipes %}
			<li class="module-recipelist__listitem"><a href="{{ r.url }}">{{ r.title }}</a>

				<ul class="module-recipelist__tags">
					{% for t in r.tags %}
					<li class="module-recipelist__tag"><a href="{{ t.url }}">{{ t.title }}</a></li>
					{% endfor %}
				</ul>
			</li>
		{% endfor %}
	</ul>

</div>

{{ page.renderChunk('partials/footer.php') }}

