<?php

/**
 * Address form.
 *
 * @package    tradeagent
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AddressForm extends BaseAddressForm
{
    public function configure(){
        $this->enableCSRFProtection();
    }
}
