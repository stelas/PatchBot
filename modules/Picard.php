<?php

class Picard extends PatchBase {
	function __construct() {
		parent::__construct('MetaBrainz Foundation', 'Picard', 'https://picard.musicbrainz.org/downloads/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/metabrainz/picard/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
