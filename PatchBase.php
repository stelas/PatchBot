<?php

require('HostOption.php');

abstract class PatchBase {
	protected $patch;
	protected $data = '';
	function __construct(string $vendor, string $product, string $url) {
		$this->patch = new PatchObject(array('id' => $this->id(), 'vendor' => $vendor, 'product' => $product, 'url' => $url));
	}
	function __toString() : string {
		return (string)$this->patch;
	}
	protected function dump() {
		var_dump($this->data);
	}
	function id() : string {
		return get_class($this);
	}
	function getPatch() : PatchObject {
		return $this->patch;
	}
	abstract function check() : bool;
	protected function fetch(string $url, bool $text = true) : bool {
		// HTTP GET
		if ($text)
			$str = $this->curl($url);
		// HTTP HEAD
		else
			$str = $this->curl($url, array(array(CURLOPT_HEADER, true), array(CURLOPT_NOBODY, true)));
		if ($str) {
			$this->data = $str;
			return true;
		}
		return false;
	}
	protected function fetch_json(string $url) : bool {
		$str = $this->curl($url);
		if ($str) {
			if (!($this->data = json_decode($str, true)))
				return false;
			// get first element only
			if ($this->array_isMulti($this->data))
				$this->data = array_shift($this->data);
			return true;
		}
		return false;
	}
	protected function parse(string $re) : bool {
		if ($str = $this->regex_str($re)) {
			$this->patch->setVersion($str, true);
			return true;
		}
		return false;
	}
	protected function parse_json(string $key, string $re = '/(.*)/') : bool {
		$flat = iterator_to_array(new \RecursiveIteratorIterator(new \RecursiveArrayIterator($this->data)));
		if (!empty($flat[$key])) {
			$this->data = $flat[$key];
			return $this->parse($re);
		}
		return false;
	}
	private function array_isMulti(array $arr) : bool {
		foreach ($arr as $val) {
			if (!is_array($val))
				return false;
		}
		return true;
	}
	protected function str_crop(string $head = '', string $tail = '') {
		if (!empty($head)) {
			if ($str = strstr($this->data, $head))
				$this->data = $str;
		}
		if (!empty($tail)) {
			if ($str = strstr($this->data, $tail, true))
				$this->data = $str;
		}
	}
	private function curl(string $url, array $opts = array()) {
		if ($ch = curl_init()) {
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; Patchbot/1.0; +http://www.patchbot.de/)');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			foreach ($opts as $opt)
				curl_setopt($ch, $opt[0], $opt[1]);
			if ($opt = HostOption::get(parse_url($url, PHP_URL_HOST)))
				curl_setopt($ch, CURLOPT_HTTPHEADER, $opt);
			$str = curl_exec($ch);
			curl_close($ch);
			if ($str)
				return $str;
		}
		return false;
	}
	private function regex(string $pattern) {
		if (!preg_match($pattern, $this->data, $m))
			return false;
		// suppress full pattern match
		unset($m[0]);
		return $m;
	}
	private function regex_str(string $pattern) {
		$m = $this->regex($pattern);
		if ($m)
			return $m[1];
		return false;
	}
}

?>
