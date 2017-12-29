<?php
$installer = $this;
$installer->startSetup();

$table = $installer->getConnection()->newTable($installer->getTable('sandi/brand'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'unsigned' => true,
        'nullable' => false,
        'primary' => true,
        'identity' => true,
        ), 'ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable' => false,
        'default' => '',
        ), 'Brand Name')
    ->addColumn('logo', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable' => true,
        'default' => '',
        ), 'Brand Logo')
    ->addColumn('desc', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable' => true,
        'default' => '',
        ), 'Description')
    ->addColumn('status', Varien_Db_Ddl_Table::TYPE_TINYINT, 2, array(
        'nullable' => false,
        'default' => '0',
        ), 'Status')
    ->addColumn('created_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        ), 'Creation Time')
    ->addColumn('updated_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        ), 'Update Time')
    ->setComment('Brands table');
$installer->getConnection()->createTable($table);

$installer->run("
    ALTER TABLE {$installer->getTable('catalog/product')}
    ADD COLUMN `brand_id` int(11) unsigned NULL AFTER `type_id` COMMENT 'Brand ID';
    ");

$installer->endSetup();
