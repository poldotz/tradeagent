<?php

/**
 * OrderDetailVersion form base class.
 *
 * @method OrderDetailVersion getObject() Returns the current form's model object
 *
 * @package    tradeagent
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOrderDetailVersionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'order_id'         => new sfWidgetFormInputHidden(),
      'product_id'       => new sfWidgetFormInputHidden(),
      'quantity'         => new sfWidgetFormInputText(),
      'discount'         => new sfWidgetFormInputText(),
      'company_id'       => new sfWidgetFormInputText(),
      'agent_id'         => new sfWidgetFormInputText(),
      'discount_type_id' => new sfWidgetFormInputText(),
      'note'             => new sfWidgetFormInputText(),
      'created_by'       => new sfWidgetFormInputText(),
      'updated_by'       => new sfWidgetFormInputText(),
      'version'          => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'order_id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('order_id')), 'empty_value' => $this->getObject()->get('order_id'), 'required' => false)),
      'product_id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('product_id')), 'empty_value' => $this->getObject()->get('product_id'), 'required' => false)),
      'quantity'         => new sfValidatorInteger(array('required' => false)),
      'discount'         => new sfValidatorNumber(array('required' => false)),
      'company_id'       => new sfValidatorPass(array('required' => false)),
      'agent_id'         => new sfValidatorPass(array('required' => false)),
      'discount_type_id' => new sfValidatorPass(array('required' => false)),
      'note'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_by'       => new sfValidatorInteger(),
      'updated_by'       => new sfValidatorInteger(),
      'version'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('version')), 'empty_value' => $this->getObject()->get('version'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('order_detail_version[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrderDetailVersion';
  }

}
