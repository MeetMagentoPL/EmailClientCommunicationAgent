<?php

namespace MMHackaton\EmailClientCommunicationAgent\Model;

use \Magento\Framework\Model\AbstractModel;

class EmailSettings extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('MMHackaton\EmailClientCommunicationAgent\Model\ResourceModel\EmailSettings');
    }

}
