<?php

class HeaderChunk extends \nw\DataProviders\ChunkDataProvider {

	public function populate() {
		$pages = wire('pages');
		$page = wire('page');
		$config = wire('config');

		$this->settings = $pages->get(1051);
		$this->frontpage = $pages->get(1);
		$this->templates = $config->urls->templates;
		$this->pageTitle = $this->settings->pageTitle;
		$this->input = wire('input');

		$this->template = $page->template;
		$this->page = $page;
		$this->pages = $pages;
		$this->title = $page->title;
		$this->headline = $page->headline;
		$this->body = $page->body;
		$this->id = $page->id;

		$this->nav_main = [
			$pages->get(1014),
			$pages->get(1015),
			$pages->get(1047),
			$pages->get(1048)
		];

	}
}
 