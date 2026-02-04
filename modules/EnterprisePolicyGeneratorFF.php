<?php

class EnterprisePolicyGeneratorFF extends PatchBase {
	function __construct() {
		parent::__construct('Sören Hentzschel', 'Enterprise Policy Generator', 'https://addons.mozilla.org/en-US/firefox/addon/enterprise-policy-generator/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch('https://addons.mozilla.org/en-US/firefox/addon/enterprise-policy-generator/'))
			return $this->parse('/"version":"([\d\.]+)"/');
		return false;
	}
}

?>
