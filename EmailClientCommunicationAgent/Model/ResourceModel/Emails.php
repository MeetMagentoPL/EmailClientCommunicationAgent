<?php

namespace MMHackaton\EmailClientCommunicationAgent\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Emails extends AbstractDb
{

    public function _construct()
    {
        $this->_init('ecca_mails', 'entity_id');
    }

}
