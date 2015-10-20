<?php

namespace MMHackaton\EmailClientCommunicationAgent\Controller\Adminhtml;

use Magento\Backend\App\Action;

abstract class Email extends Action
{

    protected function _initAction()
    {
        $this->_view->loadLayout();
        $this->_setActiveMenu(
            'Magento_Backend::marketing'
        )->_addBreadcrumb(
            __('Email client'),
            __('Email client')
        );
        return $this;
    }
    
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('MMHackaton_EmailClientCommunicationAgent::email_client');
    }

}
