<?php
require_once(dirname(dirname(__FILE__))."/vendor/autoload.php");
require_once("PHPUnit/Autoload.php");

require_once(dirname(dirname(__FILE__)).'/Autoload.php');

class LyteXMLWriterTest extends PHPUnit_Framework_TestCase {
	/**
	 * Ensure we get valid XML when nesting CDATA within another CDATA block
	 */
	public function testNestedCDataWithWriteCData() {
		$writer = new LyteXMLWriter();
		$writer->openMemory();
		$writer->writeCData('<![CDATA[a little bit of cdata]]>');
		$xml = $writer->flush();

		$this->assertEquals('<![CDATA[<![CDATA[a little bit of cdata]]]]><![CDATA[>]]>', $xml);

	}
}