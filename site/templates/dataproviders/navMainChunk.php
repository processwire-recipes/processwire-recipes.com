<?php

class navMainChunk extends \nw\DataProviders\ChunkDataProvider {

	public function populate() {
		$this->pages  = wire( 'pages' );
		$this->page   = wire( 'page' );
		//$config = wire( 'config' );

		$this->id = $this->page->id;

		$this->nav_main = [
			1014,
			1015,
			1047,
			1048
		];

	}
}
 