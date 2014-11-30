{{ page.renderChunk('partials/header.php') }}

<div class="module module-taglist">
	<h3>All Tags</h3>

	<ul>
		{% for t in tags %}
			<li><a href="{{ t.url }}">{{ t.title }}</a> </li>
		{% endfor %}
	</ul>
</div>

{{ page.renderChunk('partials/footer.php') }}

