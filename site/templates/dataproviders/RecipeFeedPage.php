<?php

class RecipeFeedPage extends \nw\DataProviders\PageDataProvider {

	public function populate() {

		header('Content-Type: application/xml; charset=utf-8');

		$rss = wire("modules")->get("MarkupRSSEnhanced");
		$this->recipe_feed = $rss->renderFeed(wire("pages")->find("template=recipe, sort=-created"));
	}


}