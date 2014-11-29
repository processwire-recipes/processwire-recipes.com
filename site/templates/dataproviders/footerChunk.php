<?php

class FooterChunk extends \nw\DataProviders\ChunkDataProvider {

	public function populate() {
		$this->legal = wire('pages')->get(1049)->url;
		$this->templates = wire('config')->urls->templates;
	}
}