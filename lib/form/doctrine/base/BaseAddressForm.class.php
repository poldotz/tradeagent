<?php

/**
 * Address form base class.
 *
 * @method Address getObject() Returns the current form's model object
 *
 * @package    tradeagent
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAddressForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'route'       => new sfWidgetFormInputText(),
      'city'        => new sfWidgetFormInputText(),
      'province'    => new sfWidgetFormInputText(),
      'region'      => new sfWidgetFormInputText(),
      'country'     => new sfWidgetFormInputText(),
      'postal_code' => new sfWidgetFormInputText(),
      'latitude'    => new sfWidgetFormInputText(),
      'longitude'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'route'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'city'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'province'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'region'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'country'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'postal_code' => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'latitude'    => new sfValidatorPass(array('required' => false)),
      'longitude'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('address[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Address';
  }

}
