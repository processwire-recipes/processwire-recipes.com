<?php

class searchChunk extends \nw\DataProviders\ChunkDataProvider {

	public function populate() {

		$this->root = wire('config')->urls->root;
		$this->input = wire('input');

	}

}
 