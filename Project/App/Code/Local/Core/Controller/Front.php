<?php
class Core_Controller_Front
{
    public function init()
    {
        $frontRequest = Mage :: getModel('Core/Request');
        $fullname = $frontRequest->getFullClassName();
        $actionName = $frontRequest->getActionName();
        $indexAction = new $fullname();
        $action = $actionName . 'Action';
        echo $indexAction->$action() . "<br>";
       


    }
}