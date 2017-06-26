<?php
namespace Craft;

class Bestsellers_BestsellerRecord extends BaseRecord
{
    /**
     * Gets the database table name
     *
     * @return string
     */
    public function getTableName()
    {
        return 'bestsellers_bestsellers';
    }

    /**
     * Define columns for our database table
     *
     * @return array
     */
    protected function defineAttributes()
    {
        return array(
            'productId' => array(AttributeType::Number, 'required' => true, 'unique' => true)
        );
    }

    /**
     * Define relations for our database table
     *
     * @return array
     */
    public function defineRelations()
    {
        return array(
            'product' => array(static::HAS_ONE, 'Commerce_ProductRecord', 'productId'),
        );
    }

    /**
     * Create a new instance of the current class
     *
     * @return BaseRecord
     */
    public function create()
    {
        $class = get_class($this);
        $record = new $class();
        return $record;
    }
}
