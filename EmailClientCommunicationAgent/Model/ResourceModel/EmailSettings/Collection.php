<?php

namespace MMHackaton\EmailClientCommunicationAgent\Model\ResourceModel\EmailSettings;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
                'MMHackaton\EmailClientCommunicationAgent\Model\EmailSettings',
                'MMHackaton\EmailClientCommunicationAgent\Model\ResourceModel\EmailSettings'
                );
    }
}
