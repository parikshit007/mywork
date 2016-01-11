<?php namespace job\nl;
 
class Url {
  
  private $requestUrl;
 
  public function __construct($url="")
  {
	$this->requestUrl = $this->doCleanUrl($url);		
  }
  
	/**
	 * @author Parikshit
	 * @version v1.0
	 * @project testnl
	 * @since 10/01/2016
	 */
  public function getProtocol()
  {
    return parse_url($this->requestUrl, PHP_URL_SCHEME);
  }

  /**
	 * @author Parikshit
	 * @version v1.0
	 * @project testnl
	 * @since 10/01/2016
	 */  
  public function getPath()
  {
    return parse_url($this->requestUrl, PHP_URL_PATH);
  }
    
	/**
	 * @author Parikshit
	 * @version v1.0
	 * @project testnl
	 * @since 10/01/2016
	 */
  public function getHostName()
  {
    return parse_url($this->requestUrl, PHP_URL_HOST);
  }
    
  /**
	 * @author Parikshit
	 * @version v1.0
	 * @project testnl
	 * @since 10/01/2016
	 */	
  public function __toString()
  {
     return $this->requestUrl;
  }
  
    /**
	 * @author Parikshit
	 * @version v1.0
	 * @project testnl
	 * @since 10/01/2016
	 */
  public function doCleanUrl($url="")
  {
	$url = preg_replace("/\.\//","",$url);
	$url = preg_replace("/\..\//","",$url);
	$url = trim($url,'.');
    
	return $url;
  }
 
}
