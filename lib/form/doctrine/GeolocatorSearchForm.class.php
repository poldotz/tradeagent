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
      $this->disableCSRFProtection();

      $this->setWidget('route', new sfWidgetFormInputText());
      $this->setValidator('route', new sfValidatorString(array(
          'min_length' => 2
      ),array('required' => 'Route: Required.')));

      /*$this->setWidget('city', new sfWidgetFormInputText());
      $this->setValidator('city', new sfValidatorString(array(
          'min_length' => 2
      ),array('required' => 'City: Required.')));
      $this->setWidget('country', new sfWidgetFormI18nChoiceCountry());
      $this->setValidator('country',new sfValidatorI18nChoiceCountry());
      $this->setDefault('country','IT');*/

      $this->widgetSchema->setNameFormat('geolocatorSearch[%s]');
  }
}
