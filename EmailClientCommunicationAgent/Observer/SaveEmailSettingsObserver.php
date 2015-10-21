<?php

namespace MMHackaton\EmailClientCommunicationAgent\Observer;

use Magento\Framework\Event\ObserverInterface;
//use Magento\Framework\ObjectManagerInterface;

class SaveEmailSettingsObserver implements ObserverInterface
{
//    private $objectManager;
    private $emailSettingsFactory;
    
    public function __construct(\MMHackaton\EmailClientCommunicationAgent\Model\EmailSettingsFactory $factory)
    {
        $this->emailSettingsFactory = $factory;
    }
    
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $userId = $observer->getEvent()->getObject()->getData('user_id');
        $userData = $observer->getEvent()->getObject()->getData();
        $model = $this->emailSettingsFactory->create()->load($userId, 'user_id');
        $model->addData($userData);
        $model->save();
        
        return $this;
    }
}
