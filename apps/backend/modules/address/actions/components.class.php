<?php
/**
 * Created by JetBrains PhpStorm.
 * User: poldotz
 * Date: 05/09/13
 * Time: 23.54
 * To change this template use File | Settings | File Templates.
 */
class AddressComponents extends sfComponents
{

    public function executeGeolocatorSearch(sfWebRequest $request)
    {
        /*
         * css includes
         */
        $object = $this->object;
        $response = $this->getResponse();
        $response->addStylesheet('gmap3.css','last');
        /*
         * js includes
         */
        $response->addJavascript("https://maps.googleapis.com/maps/api/js?key=".sfConfig::get('app_gmap_api_key')."&sensor=false");
        $response->addJavaScript('gmap3.js','last');

        $this->form = new GeolocatorSearchForm(array('object'=>$object));
    }

    public function executeAddress(sfWebRequest $request)
    {
        $this->addresss = Doctrine_Core::getTable('Address')
            ->createQuery('a')
            ->execute();
    }
}