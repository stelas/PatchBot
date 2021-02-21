# PatchBot
Patch Notification Robot: Providing you the latest update notifications.

## Installation
Run periodically ```php PatchCollector.php``` to collect the latest product versions from vendor websites. Limit requests, so web servers will not overload.
For data export to webpage, RSS feed and Twitter use output of ```PatchViewer.php```, ```PatchFeeder.php``` or ```PatchTwitter.php```. Twitter requires a separate [developer registration](https://developer.twitter.com/).

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
	if ($this->fetch[_json]('https://www.url.com/'))
		return $this->parse...
	return false;
}
```
* Currently available parser functions for JSON and RegEx:
  * ```parse_json(string)```
  * ```parse(string)```

[![Donate](https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WYQZCVJPVSS5L&source=url)
