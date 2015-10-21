<?php

namespace MMHackaton\EmailClientCommunicationAgent\Model\ResourceModel\Emails;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    protected function _construct()
    {
        parent::_construct();
        $this->_init(
            'MMHackaton\EmailClientCommunicationAgent\Model\Emails',
            'MMHackaton\EmailClientCommunicationAgent\Model\ResourceModel\Emails'
        );
    }

}
