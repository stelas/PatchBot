# PatchBot
Patch Notification Robot: Providing you the latest update notifications.

## Installation
Remove ```.example``` suffix from files and modify configuration to your needs.
Run periodically ```php PatchCollector.php``` to collect the latest product versions from vendor websites. Limit requests, so web servers will not overload.
For data export to webpage, RSS feed and Mastodon use output of ```PatchViewer.php```, ```PatchFeeder.php``` or ```PatchMastodon.php```.

## Writing web scraper
* Inherit from ```PatchBase``` base class:
```
class MyProgram extends PatchBase {
	function __construct() {
		parent::__construct('Vendor', 'Product', 'https://www.vendor.com/product/');
		[$this->patch->setBranch('Branch');]
	}
	...
}
```
* Implement ```check()``` method to extract version information from website using this template:
```
function check() : bool {
	if ($this->fetch[_json|_yaml]('https://www.url.com/'))
		return $this->parse...
	return false;
}
```
* Currently available parser functions for JSON and RegEx:
  * ```parse_json(string)```
  * ```parse_yaml(string)```
  * ```parse(string)```

[![Donate](https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WYQZCVJPVSS5L&source=url)
