<?php
namespace Craft;
/**
 * Provides access to database objects from templates
 */
class BestsellersVariable
{
    /**
     * Returns count
     *
	 * @param int $entryId
	 *
	 * @return SaleCountModel
     */
    public function getBestSellingProducts()
    {
        return craft()->bestsellers->getBestSellingProducts();
    }
}
