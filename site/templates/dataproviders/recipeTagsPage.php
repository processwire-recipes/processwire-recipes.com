<?php

class recipeTagsPage extends \nw\DataProviders\PageDataProvider {

	public function populate() {

		$this->tags = wire('pages')->find("template=recipe-tag, sort=name");

	}
}
 