<?php

class Duplicity extends PatchBase {
	function __construct() {
		parent::__construct('Kenneth Loafman', 'Duplicity', 'http://duplicity.gitlab.io/duplicity-web/');
	}
	function check() : bool {
		if ($this->fetch_json('https://gitlab.com/api/v4/projects/12450835/repository/tags'))
			return $this->parse_json('name', '/rel\.(.+)/');
		return false;
	}
}

?>
