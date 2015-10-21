<?php

namespace MMHackaton\EmailClientCommunicationAgent\Block\Adminhtml;

class Email extends \Magento\Backend\Block\Widget\Grid\Container
{
    
    protected function _construct()
    {
        $this->_controller = 'adminhtml_email';
        $this->_blockGroup = 'MMHackaton_EmailClientCommunicationAgent';
        $this->_headerText = __('Email Client');
        parent::_construct();
    }
    
}
