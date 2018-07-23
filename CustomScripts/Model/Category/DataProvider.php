<?php
namespace Rbo\CustomScripts\Model\Category;

class DataProvider extends \Magento\Catalog\Model\Category\DataProvider
{

    protected function getFieldsMap()
    {
        $fields = parent::getFieldsMap();
        $fields['content'][] = 'thumb_nail';

        return $fields;
    }
}