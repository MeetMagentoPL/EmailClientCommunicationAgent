<?php

namespace MMHackaton\EmailClientCommunicationAgent\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class EmailSettings extends AbstractDb
{
    public function _construct()
    {
        $this->_init('ecca_emailsettings', 'entity_id');
    }
}
