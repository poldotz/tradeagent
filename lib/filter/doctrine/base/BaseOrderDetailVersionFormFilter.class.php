<?php

/**
 * OrderDetailVersion filter form base class.
 *
 * @package    tradeagent
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseOrderDetailVersionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'quantity'         => new sfWidgetFormFilterInput(),
      'discount'         => new sfWidgetFormFilterInput(),
      'company_id'       => new sfWidgetFormFilterInput(),
      'agent_id'         => new sfWidgetFormFilterInput(),
      'discount_type_id' => new sfWidgetFormFilterInput(),
      'note'             => new sfWidgetFormFilterInput(),
      'created_by'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'updated_by'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'quantity'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'discount'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'company_id'       => new sfValidatorPass(array('required' => false)),
      'agent_id'         => new sfValidatorPass(array('required' => false)),
      'discount_type_id' => new sfValidatorPass(array('required' => false)),
      'note'             => new sfValidatorPass(array('required' => false)),
      'created_by'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'updated_by'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('order_detail_version_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrderDetailVersion';
  }

  public function getFields()
  {
    return array(
      'order_id'         => 'Text',
      'product_id'       => 'Text',
      'quantity'         => 'Number',
      'discount'         => 'Number',
      'company_id'       => 'Text',
      'agent_id'         => 'Text',
      'discount_type_id' => 'Text',
      'note'             => 'Text',
      'created_by'       => 'Number',
      'updated_by'       => 'Number',
      'version'          => 'Number',
    );
  }
}
