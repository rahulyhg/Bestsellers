<?php
namespace Craft;

/**
 * Bestsellers plugin class
 */
class BestsellersPlugin extends BasePlugin
{
    public function getName()
    {
        return 'Bestsellers';
    }

    public function getDescription()
    {
        return 'Auto-tag your top selling products.';
    }

    public function getVersion()
    {
        return '1.0';
    }

    public function getDeveloper()
    {
        return 'Andrew Gower';
    }

    public function getDeveloperUrl()
    {
        return 'http://amogower.com';
    }

    public function hasCpSection()
    {
        return true;
    }

    // public function registerCpRoutes()
    // {
    //     return array(
    //         'bestsellers' => array('action' => 'bestsellers/index')
    //     );
    // }
}
