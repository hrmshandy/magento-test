<?php
$installer = $this;
$installer->startSetup();

$brands = array(
    array(
        'name' => 'Adidas',
        'logo' => 'adidas.png',
        'desc' => 'lorem ipsum dolor sit amet.',
        'status' => true
    ),
    array(
        'name' => 'Nike',
        'logo' => 'nike.png',
        'desc' => 'lorem ipsum dolor sit amet.',
        'status' => true
    ),
    array(
        'name' => 'Lucky',
        'logo' => 'lucky.png',
        'desc' => 'lorem ipsum dolor sit amet.',
        'status' => true
    )
);

foreach ($brands as $brand) {
    Mage::getModel('test_sandi/brand')
        ->setData($brand)
        ->save();
}
$installer->endSetup();
