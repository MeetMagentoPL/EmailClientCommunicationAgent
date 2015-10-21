<?php

namespace MMHackaton\EmailClientCommunicationAgent\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        
        /**
         * Create table 'ecca_emailsettings'
         */
        $table = $installer->getConnection()->newTable(
            $installer->getTable('ecca_emailsettings')
        )->addColumn(
            'entity_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Entity Id'
        )->addColumn(
            'user_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['unsigned' => true],
            'Admin Id'
        )->addColumn(
            'email_username',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Email Username'
        )->addColumn(
            'email_password',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Email Password'
        )->addColumn(
            'email_smtp',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Email SMTP Server'
        )->addColumn(
            'email_port',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => false],
            'Port'
        )->addColumn(
            'email_protocol',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Protocol'
        )->addForeignKey(
            $installer->getFkName('ecca_emailsettings', 'user_id', 'admin_user', 'user_id'),
            'user_id',
            $installer->getTable('admin_user'),
            'user_id',
            \Magento\Framework\DB\Ddl\Table::ACTION_SET_NULL);
        
        $installer->getConnection()->createTable($table);
        
        /**
         * Create table 'catalog_product_entity'
         */
        $table = $installer->getConnection()
            ->newTable($installer->getTable('ecca_mails'))
            ->addColumn(
                'entity_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Entity ID'
            )
            ->addColumn(
                'sender',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null,
                ['nullable' => false],
                'Sender'
            )
            ->addColumn(
                'receiver',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null,
                ['nullable' => false],
                'Receiver'
            )
            ->addColumn(
                'received_date',
                \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
                null,
                ['nullable' => false],
                'Receive date'
            )
            ->addColumn(
                'message_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null,
                ['nullable' => false],
                'Message id'
            )
            ->addColumn(
                'headers',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null,
                ['nullable' => false],
                'Message headers'
            )
            ->addColumn(
                'content',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null,
                ['nullable' => false],
                'Message content'
            )
            ->setComment('Catalog Product Table');
        
        $installer->getConnection()->createTable($table);

        $installer->endSetup();

    }
}
