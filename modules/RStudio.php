<?php

class RStudio extends PatchBase {
	function __construct() {
		parent::__construct('RStudio PBC', 'RStudio', 'https://rstudio.com/products/rstudio/download/');
		$this->patch->setBranch('Desktop');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/rstudio/rstudio/tags'))
			return $this->parse_json('name');
		return false;
	}
}

?>
