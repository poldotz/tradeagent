<?php

/**
 * OrderDetail filter form base class.
 *
 * @package    tradeagent
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseOrderDetailFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'quantity'         => new sfWidgetFormFilterInput(),
      'discount'         => new sfWidgetFormFilterInput(),
      'company_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Company'), 'add_empty' => true)),
      'agent_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Agent'), 'add_empty' => true)),
      'discount_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DiscountType'), 'add_empty' => true)),
      'note'             => new sfWidgetFormFilterInput(),
      'created_by'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'updated_by'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'version'          => new sfWidgetFormFilterInput(),
      'deleted_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'quantity'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'discount'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'company_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Company'), 'column' => 'id')),
      'agent_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Agent'), 'column' => 'id')),
      'discount_type_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DiscountType'), 'column' => 'id')),
      'note'             => new sfValidatorPass(array('required' => false)),
      'created_by'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'updated_by'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'version'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'deleted_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('order_detail_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrderDetail';
  }

  public function getFields()
  {
    return array(
      'order_id'         => 'Text',
      'product_id'       => 'Text',
      'quantity'         => 'Number',
      'discount'         => 'Number',
      'company_id'       => 'ForeignKey',
      'agent_id'         => 'ForeignKey',
      'discount_type_id' => 'ForeignKey',
      'note'             => 'Text',
      'created_by'       => 'Number',
      'updated_by'       => 'Number',
      'version'          => 'Number',
      'deleted_at'       => 'Date',
    );
  }
}
