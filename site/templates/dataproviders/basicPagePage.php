<?php

class BasicPagePage extends \nw\DataProviders\PageDataProvider {

	public function populate() {

		$this->headline = wire('page')->headline;
		$this->body = wire('page')->body;

	}
}
 