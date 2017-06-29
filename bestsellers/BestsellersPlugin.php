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
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'Andrew Gower (amogower)';
    }

    public function getDeveloperUrl()
    {
        return 'http://amogower.com';
    }

    // protected function defineSettings()
    // {
    //     return array(
    //         'showCountOnProductIndex' => array(AttributeType::Bool, 'default' => 0)
    //     );
    // }

    // public function getSettingsHtml()
    // {
    //    return craft()->templates->render('Bestsellers/settings', array(
    //        'settings' => $this->getSettings()
    //    ));
    // }

    public function hasCpSection()
    {
        return false;
    }

    // public function registerCpRoutes()
    // {
    //     return array(
    //         'Bestsellers' => array('action' => 'Bestsellers/index')
    //     );
    // }
}
