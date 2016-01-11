<?php

use job\nl\Url;
 
class UrlTest extends PHPUnit_Framework_TestCase {
 
  /**
	 * @author Parikshit
	 * @version v1.0
	 * @project testnl
	 * @since 10/01/2016
	 */
  public function testGetProtocol()
  {
	$url = 'https://www.google.com/class/abc.php';
    $objUrl = new Url($url);
    $this->assertSame('https',$objUrl->getProtocol());		
  }
  
 /**
	 * @author Parikshit
	 * @version v1.0
	 * @project testnl
	 * @since 10/01/2016
	 */
  public function testGetPath()
  {
	$url = 'https://www.google.com/class/abc.php?path=';
    $objUrl = new Url($url);
    $this->assertSame('/class/abc.php',$objUrl->getPath());		
  }
  /**
	 * @author Parikshit
	 * @version v1.0
	 * @project testnl
	 * @since 10/01/2016
	*/
  public function testGetHostName()
  {
	$url = 'https://www.google.com/class/abc.php';
    $objUrl = new Url($url);
    $this->assertSame('www.google.com',$objUrl->getHostName());		
  }	
  
  /**
	 * @author Parikshit
	 * @version v1.0
	 * @project testnl
	 * @since 10/01/2016
	 */
	 
  public function testGetString()
  {
	$url = 'https://www.google.com/class/abc.php';
    $objUrl = new Url($url);
	$this->assertEquals($url,$objUrl);		
  }	
  
  /**
	 * @author Parikshit
	 * @version v1.0
	 * @project testnl
	 * @since 10/01/2016
	 */
  public function testShortUrl()
  {
	$url = './../class/abc.php';
    $objUrl = new Url($url);	
	$this->assertSame(null,$objUrl->getHostName());		
  }	
  
  	/**
	 * @author Parikshit
	 * @version v1.0
	 * @project testnl
	 * @since 10/01/2016
	 */
  public function testDoCleanUrl($url="")
  {
	$url = './../class/abc.php';	
    $objUrl = new Url();	
	$this->assertSame('class/abc.php',$objUrl->doCleanUrl($url));		
  }
  
}