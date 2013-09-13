<?php
/**
 * Created by JetBrains PhpStorm.
 * User: poldotz
 * Date: 05/09/13
 * Time: 23.54
 * To change this template use File | Settings | File Templates.
 */
class CompanyComponents extends sfComponents
{
    public function executeIndex(sfWebRequest $request)
    {
        $this->getUser()->setCulture('it');
        $this->companys = Doctrine_Core::getTable('Company')
            ->createQuery('a')
            ->execute();
    }

    public function executePersonalInfo(sfWebRequest $request)
    {
        $this->form = new CompanyForm();
    }
}