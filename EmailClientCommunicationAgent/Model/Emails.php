<?php

namespace MMHackaton\EmailClientCommunicationAgent\Model;

use \Magento\Framework\Model\AbstractModel;

class Emails extends AbstractModel
{

    protected function _construct()
    {
        $this->_init('MMHackaton\EmailClientCommunicationAgent\Model\ResourceModel\Emails');
    }

}
