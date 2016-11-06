<?php

class recipesPage extends \nw\DataProviders\PageDataProvider {

	public function populate() {

		$this->recipes = wire('pages')->find("template=recipe, sort=-created, limit=30");

	}
}
 