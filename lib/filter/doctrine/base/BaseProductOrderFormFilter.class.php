<?php

/**
 * ProductOrder filter form base class.
 *
 * @package    tradeagent
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductOrderFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'number'          => new sfWidgetFormFilterInput(),
      'purchase_date'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'agent_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Agent'), 'add_empty' => true)),
      'customer_id'     => new sfWidgetFormFilterInput(),
      'company_id'      => new sfWidgetFormFilterInput(),
      'status_order_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('OrderStatus'), 'add_empty' => true)),
      'created_by'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'updated_by'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'version'         => new sfWidgetFormFilterInput(),
      'deleted_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'number'          => new sfValidatorPass(array('required' => false)),
      'purchase_date'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'agent_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Agent'), 'column' => 'id')),
      'customer_id'     => new sfValidatorPass(array('required' => false)),
      'company_id'      => new sfValidatorPass(array('required' => false)),
      'status_order_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('OrderStatus'), 'column' => 'id')),
      'created_by'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'updated_by'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'version'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'deleted_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('product_order_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductOrder';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'number'          => 'Text',
      'purchase_date'   => 'Date',
      'agent_id'        => 'ForeignKey',
      'customer_id'     => 'Text',
      'company_id'      => 'Text',
      'status_order_id' => 'ForeignKey',
      'created_by'      => 'Number',
      'updated_by'      => 'Number',
      'version'         => 'Number',
      'deleted_at'      => 'Date',
    );
  }
}
