<?php
class Core_Controller_Front
{
    public function init()
    {
        $frontRequest = new Core_Model_Request();
        // echo $frontRequest->getModuleName();
        // echo "<br";
        // echo $frontRequest->getControllerName();
        // echo "<br";
        // echo $frontRequest->getActionName();
        $fullname = $frontRequest->getFullClassName();
        $actionName = $frontRequest->getActionName();
        $indexAction = new $fullname();
        $action = $actionName . 'Action';
        echo $indexAction->$action() . "<br>";
        echo $fullname;
        
    }
}