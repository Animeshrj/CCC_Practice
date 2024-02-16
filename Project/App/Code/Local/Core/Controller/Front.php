<?php
class Core_Controller_Front
{
    public function init()
    {
        $frontRequest = Mage :: getModel('Core/Request');
        $actionName = $frontRequest->getActionName(). 'Action';
        $fullname = $frontRequest->getFullClassName();
        $indexAction = new $fullname();
        
         $indexAction->$actionName();
       

        
    }
}