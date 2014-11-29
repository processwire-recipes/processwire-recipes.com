<?php

class recipeTagPage extends \nw\DataProviders\PageDataProvider {

	public function populate() {

		$this->tag = wire('page')->name;
		$this->recipes = wire('pages')->find("template=recipe, sort=-created, limit=0, tags={$this->tag}");
	}
}
 