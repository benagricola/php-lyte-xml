<?php
require_once(dirname(__FILE__).'/Autoload.php');
class LyteDOMElementTest extends PHPUnit_Framework_TestCase {
	public function testInheritance() {
		$el = new LyteDOMElement();
		$this->assertInstanceOf('LyteDOMNode', $el);
	}
}
