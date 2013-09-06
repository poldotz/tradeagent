<?php

/**
 * ProductOrder form base class.
 *
 * @method ProductOrder getObject() Returns the current form's model object
 *
 * @package    tradeagent
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductOrderForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'number'          => new sfWidgetFormInputText(),
      'purchase_date'   => new sfWidgetFormDate(),
      'agent_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Agent'), 'add_empty' => true)),
      'customer_id'     => new sfWidgetFormInputText(),
      'company_id'      => new sfWidgetFormInputText(),
      'status_order_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('OrderStatus'), 'add_empty' => true)),
      'created_by'      => new sfWidgetFormInputText(),
      'updated_by'      => new sfWidgetFormInputText(),
      'version'         => new sfWidgetFormInputText(),
      'deleted_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'number'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'purchase_date'   => new sfValidatorDate(array('required' => false)),
      'agent_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Agent'), 'required' => false)),
      'customer_id'     => new sfValidatorPass(array('required' => false)),
      'company_id'      => new sfValidatorPass(array('required' => false)),
      'status_order_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('OrderStatus'), 'required' => false)),
      'created_by'      => new sfValidatorInteger(),
      'updated_by'      => new sfValidatorInteger(),
      'version'         => new sfValidatorInteger(array('required' => false)),
      'deleted_at'      => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('product_order[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductOrder';
  }

}
