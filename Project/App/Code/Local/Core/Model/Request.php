<?php
class Core_Model_Request
{
    protected $getModuleName;
    protected $getControllerName;
    protected $actionName;
    public function __construct()
    {
        $reqUri = $this->getRequestURI();
        $reqUri = explode("/", $reqUri);
        $this->getModuleName = $reqUri[0];
        $this->getControllerName = $reqUri[1];
        $this->actionName = $reqUri[2];
    }
    public function getModuleName()
    {
        return $this->getModuleName;
    }
    public function getControllerName()
    {
        return $this->getControllerName;
    }
    public function getActionName()
    {
        return $this->actionName;
    }
    public function getFullClassName()
    {
        $className = ucfirst($this->getModuleName) . "_Controller_" . ucfirst($this->getControllerName);
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
        return $url_view;
    }
}