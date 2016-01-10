<?php

use job\nl\Url;
 
class UrlTest extends PHPUnit_Framework_TestCase {
 
  public function testUrlHasCheese()
  {
    $nacho = new Url;
    $this->assertTrue($nacho->hasCheese());
	$this->assertFalse($nacho->hasCheese(false));
  }
 
}