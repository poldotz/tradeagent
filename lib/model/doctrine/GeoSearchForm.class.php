<?php
/**
 * Created by JetBrains PhpStorm.
 * User: poldotz
 * Date: 10/09/13
 * Time: 7.35
 * To change this template use File | Settings | File Templates.
 */

class GeoSearchForm extends BaseForm
{
    public function configure()
    {
        $this->disableCSRFProtection();
        $this->setWidget('route', new sfWidgetFormInputText());
        $this->setValidator('route', new sfValidatorString(array(
            'min_length' => 2
        ),array('required' => 'Route: Required.')));

        $this->widgetSchema->setNameFormat('geolocatorSearch[%s]');

    }
}
