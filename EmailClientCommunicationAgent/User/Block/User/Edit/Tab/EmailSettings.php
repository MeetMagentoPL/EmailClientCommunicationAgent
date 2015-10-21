<?php

namespace MMHackaton\EmailClientCommunicationAgent\User\Block\User\Edit\Tab;

use \Magento\Backend\Block\Widget\Form\Generic;

class EmailSettings extends Generic
{
    protected $_authSession;
    
    public function __construct(
            \Magento\Backend\Block\Template\Context $context,
            \Magento\Framework\Registry $registry,
            \Magento\Framework\Data\FormFactory $formFactory,
            \Magento\Backend\Model\Auth\Session $authSession,
            array $data = array()
            )
    {
        $this->_authSession = $authSession;
        parent::__construct($context, $registry, $formFactory, $data);
    }
    
    protected function _prepareForm()
    {
        $form = $this->_formFactory->create();
        $form->setHtmlIdPrefix('emailsettings_');
        
        $baseFieldset = $form->addFieldset('base_fieldset', ['legend' => __('Email Settings')]);

        $baseFieldset->addField(
            'email_username',
            'text',
            [
                'name' => 'email_username',
                'label' => __('Email Username'),
                'id' => 'email_username',
                'class' => 'required-entry validate-email',
                'title' => __('Email Username'),
                'required' => true
            ]
        );

        $baseFieldset->addField(
            'email_password',
            'password',
            [
                'name' => 'email_password',
                'label' => __('Password'),
                'id' => 'email_password',
                'title' => __('Password'),
                'required' => true
            ]
        );

        $baseFieldset->addField(
            'email_smtp',
            'text',
            [
                'name' => 'email_smtp',
                'label' => __('Server'),
                'id' => 'email_smtp',
                'title' => __('Server'),
                'required' => true
            ]
        );
        
        $baseFieldset->addField(
            'email_port',
            'text',
            [
                'name' => 'email_port',
                'label' => __('Port'),
                'id' => 'email_port',
                'title' => __('Port'),
                'class' => 'required-entry validate-number',
                'required' => true
            ]
        );
        
        $baseFieldset->addField(
            'email_protocol',
            'select',
            [
                'name' => 'email_protocol',
                'label' => __('Protocol'),
                'title' => __('Protocol'),
                'values' => ['imap' => 'IMAP', 'pop3' => 'POP3'],
                'class' => 'select'
            ]
        );
        
        $this->setForm($form);
        
        return parent::_prepareForm();
    }
}
