<?php

class HomePage extends \nw\DataProviders\PageDataProvider {

	public function populate() {

		$this->tags = wire('pages')->find("template=recipe-tag, sort=-created, limit=10");

		$this->headline = wire('page')->headline;
		$this->body = wire('page')->body;

		$this->tags = wire('pages')->find("template=recipe-tag, sort=-created, limit=10");
		$this->recipes = wire('pages')->find("template=recipe, sort=-created, limit=15");

	}
}
 