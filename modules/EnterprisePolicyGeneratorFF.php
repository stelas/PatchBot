<?php

class EnterprisePolicyGeneratorFF extends PatchBase {
	function __construct() {
		parent::__construct('Sören Hentzschel', 'Enterprise Policy Generator', 'https://addons.mozilla.org/en-US/firefox/addon/enterprise-policy-generator/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch_json('https://addons.mozilla.org/api/v5/addons/addon/enterprise-policy-generator/versions/?page_size=1'))
			return $this->parse_json('version');
		return false;
	}
}

?>
