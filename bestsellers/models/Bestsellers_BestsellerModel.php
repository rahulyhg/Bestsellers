<?php
namespace Craft;

class Bestsellers_BestsellerModel extends BaseModel
{
    protected function defineAttributes()
    {
        return array(
            'productId' => AttributeType::Number
        );
    }
}
