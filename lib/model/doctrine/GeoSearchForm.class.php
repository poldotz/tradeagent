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
        $defaults = $this->getDefaults();

        if(array_key_exists('object',$defaults)){

            $object = $defaults['object'];
            if($object->isNew()){
                $external_id = 0;
            }else{
                $external_id = $object->getId();
            }

            $this->setWidget('external_class', new sfWidgetFormInputHidden());
            $this->setValidator('external_class',new sfValidatorString());
            $this->setDefault('external_class',get_class($object));

            $this->setWidget('external_id', new sfWidgetFormInputHidden());
            $this->setValidator('external_id',new sfValidatorInteger());
            $this->setDefault('external_id',$external_id);
        }


        $this->disableCSRFProtection();
        $this->setWidget('route', new sfWidgetFormInputText());
        $this->setValidator('route', new sfValidatorString(array(
            'min_length' => 2
        ),array('required' => 'Route: Required.')));

        $this->widgetSchema->setNameFormat('geolocatorSearch[%s]');

    }
}
