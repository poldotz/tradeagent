<?php

/**
 * Address form.
 *
 * @package    tradeagent
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class GeolocatorSearchForm extends BaseForm
{
  public function configure()
  {
      $defaults = $this->getDefaults();

      if(array_key_exists('object',$defaults)){

          $object = $defaults['object'];
          $this->setWidget(get_class($object), new sfWidgetFormInputHidden());
          $this->setValidator(get_class($object),new sfValidatorInteger());
          $this->setDefault(get_class($object),$object->getId());
      }

      $this->disableCSRFProtection();
      $this->setWidget('route', new sfWidgetFormInputText());
      $this->setValidator('route', new sfValidatorString(array(
          'min_length' => 2
      ),array('required' => 'Route: Required.')));

      $this->widgetSchema->setNameFormat('geolocatorSearch[%s]');
  }
}
