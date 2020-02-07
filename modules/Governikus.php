<?php

class Governikus extends PatchBase {
	function __construct() {
		parent::__construct('Governikus KG', 'Governikus Communicator Justiz Edition', 'https://www.governikus.de/governikus-communicator-justiz-edition/');
	}
	function check() : bool {
		if ($this->fetch('https://www.governikus.de/governikus-communicator-justiz-edition/'))
			return $this->parse('#//www\.governikus\.de/wp-content/uploads/GOVERNIKUS_COMMUNICATOR_JUSTIZ_EDITION_Releaseuebersicht_([\d]+)[-\d]*\.pdf#');
		return false;
	}
}

?>
