<?php

/**
 * Address form.
 *
 * @package    tradeagent
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AddressForm extends BaseAddressForm
{
  public function configure()
  {
      $this->useFields(array('route','city','country'));

      $this->setWidget('route', new sfWidgetFormInputText());
      $this->setValidator('route', new sfValidatorString(array(
          'min_length' => 2
      )));
      $this->setWidget('city', new sfWidgetFormInputText());
      $this->setValidator('city', new sfValidatorString(array(
          'min_length' => 2
      )));
      $this->setWidget('country', new sfWidgetFormI18nChoiceCountry());
      $this->setValidator('country',new sfValidatorI18nChoiceCountry());
  }
}
