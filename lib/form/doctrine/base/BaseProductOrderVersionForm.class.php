<?php

/**
 * ProductOrderVersion form base class.
 *
 * @method ProductOrderVersion getObject() Returns the current form's model object
 *
 * @package    tradeagent
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductOrderVersionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'number'          => new sfWidgetFormInputText(),
      'purchase_date'   => new sfWidgetFormDate(),
      'agent_id'        => new sfWidgetFormInputText(),
      'customer_id'     => new sfWidgetFormInputText(),
      'company_id'      => new sfWidgetFormInputText(),
      'status_order_id' => new sfWidgetFormInputText(),
      'created_by'      => new sfWidgetFormInputText(),
      'updated_by'      => new sfWidgetFormInputText(),
      'version'         => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'number'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'purchase_date'   => new sfValidatorDate(array('required' => false)),
      'agent_id'        => new sfValidatorPass(array('required' => false)),
      'customer_id'     => new sfValidatorPass(array('required' => false)),
      'company_id'      => new sfValidatorPass(array('required' => false)),
      'status_order_id' => new sfValidatorPass(array('required' => false)),
      'created_by'      => new sfValidatorInteger(),
      'updated_by'      => new sfValidatorInteger(),
      'version'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('version')), 'empty_value' => $this->getObject()->get('version'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('product_order_version[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductOrderVersion';
  }

}
