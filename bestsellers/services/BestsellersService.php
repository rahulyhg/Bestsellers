<?php
namespace Craft;
/**
 * Bestseller Service
 */
class BestsellersService extends BaseApplicationComponent
{
    /**
     * Returns best selling products
     *
	 * @param int $limit
	 *
	 * @return array
     */
    public function getBestSellingProducts($limit)
    {
        $bestsellers = craft()->db->createCommand()
            ->select(array('l.purchasableId', 'p.price', 'count(l.purchasableId) as occurences'))
            ->from('commerce_lineitems l')
            ->join('commerce_purchasables p', 'p.id = l.purchasableId')
            ->group('purchasableId')
            ->order('occurences desc')
            ->limit($limit)
            ->queryAll();

        return $bestsellers;
    }

    /**
     * Returns products added in the last 30 days
     *
	 * @param int $limit
	 *
	 * @return array
     */
    public function getNewProducts($limit)
    {
        $newProducts = craft()->db->createCommand()
            ->select('id')
            ->from('commerce_products')
            ->where('dateCreated > NOW() - INTERVAL 30 DAY')
            ->queryAll();
        return $newProducts;
    }
}
