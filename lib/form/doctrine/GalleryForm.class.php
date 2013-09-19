<?php

/**
 * Gallery form.
 *
 * @package    tradeagent
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class GalleryForm extends BaseGalleryForm
{

  public function setup()
  {
      parent::setup();
      $this->removeFields();
      $this->widgetSchema['description'] = new sfWidgetFormTextarea(array(),array('cols'=>'150','rows'=>8));
  }

      protected function removeFields() {
      unset($this['created_at'], $this['updated_at'],$this['slug']);
  }
}
