{{ page.renderChunk('partials/header.php') }}

<h2 class="page-headline">{{ title }}</h2>

<section class="section-recipe">
	<h3>Problem</h3>
	<p>{{ problem }}</p>
</section>

<section class="section-recipe">

	<h3>Solution</h3>
	<p>{{ solution }}</p>
</section>

<section class="section-recipe">

	<div class="module module-taglist">
		<h3>Tags</h3>

		<ul>
		{% for t in tags %}
			<li><a href="{{ t.url }}">{{ t.title }}</a> </li>
		{% endfor %}
		</ul>
	</div>

</section>


{% if (resources) %}
	<section class="section-recipe">
		<h3>Resources</h3>
		<p>{{ resources }}</p>
	</section>
{% endif %}

<section class="section-recipe">
	<h3>Version</h3>
	<p>{{ version }}</p>
</section>

<section class="section-recipe">
	<h3>View/correct recipe on GitHub</h3>

	<i class="fa fa-pencil-square-o"></i> <a href="{{ githublink }}">{{ githublink }}</a>
</section>

<section class="section-recipe">
	<h3>Author(s)</h3>
	<ul>
	{% for a in authors %}
		<li>{{ a.title }}</li>
	{% endfor %}
	</ul>
</section>



{{ page.renderChunk('partials/footer.php') }}
