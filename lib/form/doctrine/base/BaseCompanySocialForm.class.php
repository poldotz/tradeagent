<?php

/**
 * CompanySocial form base class.
 *
 * @method CompanySocial getObject() Returns the current form's model object
 *
 * @package    tradeagent
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCompanySocialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'company_id' => new sfWidgetFormInputHidden(),
      'social_id'  => new sfWidgetFormInputHidden(),
      'value'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'company_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('company_id')), 'empty_value' => $this->getObject()->get('company_id'), 'required' => false)),
      'social_id'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('social_id')), 'empty_value' => $this->getObject()->get('social_id'), 'required' => false)),
      'value'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('company_social[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CompanySocial';
  }

}
