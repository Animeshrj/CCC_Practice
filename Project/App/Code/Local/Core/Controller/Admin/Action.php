<?php
class Core_Controller_Admin_Action extends Core_Controller_Front_Action
{
    protected $_allowedAction = [];
    public function init()
    {

        // $this->getLayout()->setTemplate('Core/Admin.phtml');
        if (
            !in_array($this->getRequest()->getActionName(), $this->_allowedAction) &&
            !Mage::getSingleton('Core/Session')->get('logged_in_admin_user_id')
        ) {

            $this->setRedirect('');
        }

        return $this;

    }


}