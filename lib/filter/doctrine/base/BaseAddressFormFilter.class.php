<?php

/**
 * Address filter form base class.
 *
 * @package    tradeagent
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAddressFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'route'       => new sfWidgetFormFilterInput(),
      'city'        => new sfWidgetFormFilterInput(),
      'province'    => new sfWidgetFormFilterInput(),
      'region'      => new sfWidgetFormFilterInput(),
      'country'     => new sfWidgetFormFilterInput(),
      'postal_code' => new sfWidgetFormFilterInput(),
      'latitude'    => new sfWidgetFormFilterInput(),
      'longitude'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'route'       => new sfValidatorPass(array('required' => false)),
      'city'        => new sfValidatorPass(array('required' => false)),
      'province'    => new sfValidatorPass(array('required' => false)),
      'region'      => new sfValidatorPass(array('required' => false)),
      'country'     => new sfValidatorPass(array('required' => false)),
      'postal_code' => new sfValidatorPass(array('required' => false)),
      'latitude'    => new sfValidatorPass(array('required' => false)),
      'longitude'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('address_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Address';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'route'       => 'Text',
      'city'        => 'Text',
      'province'    => 'Text',
      'region'      => 'Text',
      'country'     => 'Text',
      'postal_code' => 'Text',
      'latitude'    => 'Text',
      'longitude'   => 'Text',
    );
  }
}
