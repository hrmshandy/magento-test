<?php

class Test_Sandi_Model_Catalog_Config extends Mage_Catalog_Model_Config
{
    public function getAttributeUsedForSortByArray()
    {
        $options = array(
            'sort_order' => Mage::helper('catalog')->__('Sort Order')
        );

        foreach ($this->getAttributesUsedForSortBy() as $attribute) {
            $options[$attribute->getAttributeCode()] = $attribute->getStoreLabel();
        }

        return $options;
    }
}
