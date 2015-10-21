<?php

namespace MMHackaton\EmailClientCommunicationAgent\Observer;

use Magento\Framework\Event\ObserverInterface;

class SaveEmailSettingsObserver implements ObserverInterface
{

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    
    /**
     * @var \MMHackaton\EmailClientCommunicationAgent\Model\EmailSettingsFactory
     */
    private $emailSettingsFactory;

    public function __construct(
        \MMHackaton\EmailClientCommunicationAgent\Model\EmailSettingsFactory $factory,
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->emailSettingsFactory = $factory;
        $this->logger = $logger;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        try {
            $userId = $observer->getEvent()->getObject()->getData('user_id');
            $userData = $observer->getEvent()->getObject()->getData();
            $model = $this->emailSettingsFactory->create()->load($userId, 'user_id');
            $model->addData($userData);
            $model->save();
        } catch (\Magento\Framework\Validator\Exception $e) {
            $this->logger->critical($e->getMessage());
        }
        return $this;
    }

}
