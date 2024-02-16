<?php
class Core_Model_Request
{
    protected $_getModuleName;
    protected $_getControllerName;
    protected $_actionName;
    public function __construct()
    {
        // $reqUri = $this->getRequestURI();
        // $reqUri = explode("/", $reqUri);
        // $this->getModuleName = $reqUri[0];
        // $this->getControllerName = $reqUri[1];
        // $this->actionName = $reqUri[2];

        $uri = $this->getRequestURI();
		$uri = array_filter(explode("/", $uri));
		$this->_getModuleName = isset($uri[0]) ? $uri[0] : 'Page';
		$this->_getControllerName = isset($uri[1]) ? $uri[1] : 'index';
		$this->_actionName = isset($uri[2]) ? $uri[2] : 'index';
    }
    public function getModuleName()
    {
        return $this->_getModuleName;
    }
    public function getControllerName()
    {
        return $this->_getControllerName;
    }
    public function getActionName()
    {
        return $this->_actionName;
    }
    public function getFullClassName()
    {
        $className = ucfirst($this->_getModuleName) . "_Controller_" . ucfirst($this->_getControllerName);
        return $className;
    }
    public function getParams($key = '')
    {
        return ($key == '')
            ? $_REQUEST
            : (isset($_REQUEST[$key])
                ? $_REQUEST[$key]
                : '');
    }

    public function getPostData($key = '')
    {
        return ($key == '')
            ? $_POST
            : (isset($_POST[$key])
                ? $_POST[$key]
                : '');
    }
    public function getQueryData($key = '')
    {
        return ($key == '')
            ? $_GET
            : (isset($_GET[$key])
                ? $_GET[$key]
                : '');
    }

    public function isPost()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return true;
        }
        return false;

    }
    public function getRequestURI()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url_view = str_replace("/PhpPractice/Project/", "", $url);
        if(str_contains($url_view, '?'))
        {
            $pos = strpos($url_view, '?');
            $temp_uri = substr($url_view,$pos);
            $uri = str_replace($temp_uri,"",$url_view);
            return $uri;
        }
   
        return $url_view;
    }
}