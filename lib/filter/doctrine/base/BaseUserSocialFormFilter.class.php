<?php

/**
 * UserSocial filter form base class.
 *
 * @package    tradeagent
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserSocialFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'value'            => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'value'            => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user_social_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserSocial';
  }

  public function getFields()
  {
    return array(
      'sf_guard_user_id' => 'Text',
      'social_id'        => 'Text',
      'value'            => 'Text',
    );
  }
}
