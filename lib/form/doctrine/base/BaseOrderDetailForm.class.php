<?php

/**
 * OrderDetail form base class.
 *
 * @method OrderDetail getObject() Returns the current form's model object
 *
 * @package    tradeagent
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOrderDetailForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'order_id'         => new sfWidgetFormInputHidden(),
      'product_id'       => new sfWidgetFormInputHidden(),
      'quantity'         => new sfWidgetFormInputText(),
      'discount'         => new sfWidgetFormInputText(),
      'company_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Company'), 'add_empty' => true)),
      'agent_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Agent'), 'add_empty' => true)),
      'discount_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DiscountType'), 'add_empty' => true)),
      'note'             => new sfWidgetFormInputText(),
      'created_by'       => new sfWidgetFormInputText(),
      'updated_by'       => new sfWidgetFormInputText(),
      'version'          => new sfWidgetFormInputText(),
      'deleted_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'order_id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('order_id')), 'empty_value' => $this->getObject()->get('order_id'), 'required' => false)),
      'product_id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('product_id')), 'empty_value' => $this->getObject()->get('product_id'), 'required' => false)),
      'quantity'         => new sfValidatorInteger(array('required' => false)),
      'discount'         => new sfValidatorNumber(array('required' => false)),
      'company_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Company'), 'required' => false)),
      'agent_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Agent'), 'required' => false)),
      'discount_type_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DiscountType'), 'required' => false)),
      'note'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_by'       => new sfValidatorInteger(),
      'updated_by'       => new sfValidatorInteger(),
      'version'          => new sfValidatorInteger(array('required' => false)),
      'deleted_at'       => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('order_detail[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrderDetail';
  }

}
