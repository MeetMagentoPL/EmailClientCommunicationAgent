<?php

namespace MMHackaton\EmailClientCommunicationAgent\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class EmailSettings extends AbstractDb
{
    public function _construct()
    {
        $this->_init('ecca_emailsettings', 'entity_id');
    }
    
    public function getByUserId($user_id)
    {
        $connection = $this->getConnection();

        $select = $connection->select()->from($this->getMainTable())->where('user_id=:user_id');

        $binds = ['user_id' => $user_id];

        return $connection->fetchRow($select, $binds);
    }
}
