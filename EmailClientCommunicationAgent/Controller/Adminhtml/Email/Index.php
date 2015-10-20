<?php

namespace MMHackaton\EmailClientCommunicationAgent\Controller\Adminhtml\Email;

class Index extends \MMHackaton\EmailClientCommunicationAgent\Controller\Adminhtml\Email
{

    public function execute()
    {
        $this->_initAction()->_addBreadcrumb(__('Email client'), __('Email client'));
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Email client'));
        $this->_view->renderLayout();
    }

}
