<?php
namespace Craft;

class Bestsellers_BestsellerRecord extends BaseRecord
{
    public function getTableName()
    {
        return 'bestsellers_bestsellers';
    }

    protected function defineAttributes()
    {
        return array(
            'productId' => array(AttributeType::Number, 'required' => true, 'unique' => true)
        );
    }

    public function defineRelations()
    {
        return array(
            'product' => array(static::HAS_ONE, 'Commerce_ProductRecord', 'productId'),
        );
    }
}
