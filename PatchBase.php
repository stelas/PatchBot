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
	protected function fetch(string $url, array $opts = array()) : bool {
		$str = $this->curl($url, $opts);
		if ($str) {
			$this->data = $str;
			return true;
		}
		return false;
	}
	protected function fetch_header(string $url, array $opts = array()) : bool {
		$str = $this->curl($url, array_merge($opts, array('CURLOPT_HEADER' => true, 'CURLOPT_NOBODY' => true)));
		if ($str) {
			$this->data = $str;
			return true;
		}
		return false;
	}
	protected function fetch_json(string $url, array $opts = array()) : bool {
		$str = $this->curl($url, $opts);
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
	protected function fetch_xml(string $url, array $opts = array()) : bool {
		$str = $this->curl($url, $opts);
		if ($str) {
			if (!($this->data = simplexml_load_string($str)))
				return false;
			$ns = $this->data->getDocNamespaces(true);
			foreach ($ns as $n => $u)
				$this->data->registerXPathNamespace($n, $u);
			return true;
		}
		return false;
	}
	protected function fetch_yaml(string $url, array $opts = array()) : bool {
		$str = $this->curl($url, $opts);
		if ($str) {
			if (!($this->data = yaml_parse($str)))
				return false;
			//if ($this->array_isMulti($this->data))
			//	$this->data = array_shift($this->data);
			return true;
		}
		return false;
	}
	protected function fetch_gzip(string $url, array $opts = array()) : bool {
		$str = $this->curl($url, $opts);
		if ($str) {
			if (!($this->data = gzdecode($str)))
				return false;
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
		$it = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($this->data));
		foreach ($it as $k => $v) {
			if ($key == $k) {
				$this->data = $v;
				return $this->parse($re);
			}
		}
		return false;
	}
	protected function parse_xml(string $key, string $re = '/(.*)/') : bool {
		if ($res = $this->data->xpath($key)) {
			$this->data = (string)$res[0];
			return $this->parse($re);
		}
		return false;
	}
	protected function parse_yaml(string $key, string $re = '/(.*)/') : bool {
		return $this->parse_json($key, $re);
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
	private function curl(string $url, array $opts) {
		if ($ch = curl_init()) {
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; +http://lange.tel/) Gecko/20100101 PatchCollector/1.0');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
			foreach ($opts as $key => $val)
				curl_setopt($ch, constant($key), $val);
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
		if (!preg_match_all($pattern, $this->data, $m, PREG_PATTERN_ORDER))
			return false;
		// suppress full pattern match
		$m = $m[1];
		// TODO - add option: $m = array_reverse($m);
		return $m;
	}
	private function regex_str(string $pattern) {
		$m = $this->regex($pattern);
		if ($m)
			return $m[0];
		return false;
	}
}

?>
