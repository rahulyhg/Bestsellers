<?php
namespace Craft;
/**
 * Provides access to database objects from templates
 */
class BestsellersVariable
{
    /**
     * Returns best selling products
     *
	 * @param int $limit
	 *
	 * @return array
     */
    public function getBestSellingProducts($limit = 10)
    {
        return craft()->bestsellers->getBestSellingProducts($limit);
    }

    /**
     * Returns newly added products
     *
	 * @param int $limit
	 *
	 * @return array
     */
    public function getNewProducts($limit = 10)
    {
        return craft()->bestsellers->getNewProducts($limit);
    }
}
