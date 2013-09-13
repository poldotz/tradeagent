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
        $this->form = new GeolocatorSearchForm();
    }

    public function executeAddress(sfWebRequest $request)
    {
        $this->addresss = Doctrine_Core::getTable('Address')
            ->createQuery('a')
            ->execute();
    }
}