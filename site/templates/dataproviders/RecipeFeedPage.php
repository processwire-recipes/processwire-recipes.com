<?php

class RecipeFeedPage extends \nw\DataProviders\PageDataProvider {

	public function populate() {
		$rss = wire("modules")->get("MarkupRSSEnhanced");
		$this->recipe_feed = $rss->renderFeed(wire("pages")->find("template=recipe, sort=-created"));
	}


}