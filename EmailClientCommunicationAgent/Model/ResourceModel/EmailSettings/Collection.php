<?php

namespace MMHackaton\EmailClientCommunicationAgent\User\Model\ResourceModel\EmailSettings;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
                'MMHackaton\EmailClientCommunicationAgent\User\Model\EmailSettings',
                'MMHackaton\EmailClientCommunicationAgent\User\Model\ResourceModel\EmailSettings'
                );
    }
}
