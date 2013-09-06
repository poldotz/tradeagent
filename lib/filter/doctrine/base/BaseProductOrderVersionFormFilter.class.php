<?php

/**
 * ProductOrderVersion filter form base class.
 *
 * @package    tradeagent
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductOrderVersionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'number'          => new sfWidgetFormFilterInput(),
      'purchase_date'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'agent_id'        => new sfWidgetFormFilterInput(),
      'customer_id'     => new sfWidgetFormFilterInput(),
      'company_id'      => new sfWidgetFormFilterInput(),
      'status_order_id' => new sfWidgetFormFilterInput(),
      'created_by'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'updated_by'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'number'          => new sfValidatorPass(array('required' => false)),
      'purchase_date'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'agent_id'        => new sfValidatorPass(array('required' => false)),
      'customer_id'     => new sfValidatorPass(array('required' => false)),
      'company_id'      => new sfValidatorPass(array('required' => false)),
      'status_order_id' => new sfValidatorPass(array('required' => false)),
      'created_by'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'updated_by'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('product_order_version_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductOrderVersion';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'number'          => 'Text',
      'purchase_date'   => 'Date',
      'agent_id'        => 'Text',
      'customer_id'     => 'Text',
      'company_id'      => 'Text',
      'status_order_id' => 'Text',
      'created_by'      => 'Number',
      'updated_by'      => 'Number',
      'version'         => 'Number',
    );
  }
}
