<?php

class RecipePage extends \nw\DataProviders\PageDataProvider {

	public function populate() {

		$this->title = wire('page')->title;
		$this->version = wire('page')->version;
		$this->problem = wire('page')->problem;
		$this->solution = wire('page')->solution;
		$this->resources = wire('page')->resources;
		$this->tags = wire('page')->tags;
		$this->authors = wire('page')->authors;
		$this->githublink = "https://github.com/processwire-recipes/Recipes/blob/master/" . wire('page')->name . ".md";

	}
}
 