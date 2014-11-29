<?php

class AjaxSearchPage extends \nw\DataProviders\PageDataProvider {

	public function populate() {

		$this->out = '';

		if ( $q = wire( 'sanitizer' )->selectorValue( wire( 'input' )->get->q ) ) {
			wire( 'input' )->whitelist( 'q', $q );
			$matches = wire( 'pages' )->find( "template=recipe, title|solution|problem%=$q, limit=50" );
			$count   = count( $matches );

			if ( $count ) {
				$this->out .= "<h2>Found $count pages matching your query:</h2>" .
				              "<div class='module module-recipelist'>" .
				              "<ul class='module-recipelist__list'>";
				foreach ( $matches as $m ) {
					$this->out .= "<li class='module-recipelist__listitem'><a href='{$m->url}'>{$m->title}</a></li>";
				}
				$this->out .= "</ul></div>";
			} else {
				$this->out .= "<h2>Sorry, no results were found.</h2>";
			}

		}
	}
}