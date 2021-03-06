<?php

/**
 * BaseSocial
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property Doctrine_Collection $social_user
 * @property Doctrine_Collection $social_company
 * 
 * @method string              getName()           Returns the current record's "name" value
 * @method Doctrine_Collection getSocialUser()     Returns the current record's "social_user" collection
 * @method Doctrine_Collection getSocialCompany()  Returns the current record's "social_company" collection
 * @method Social              setName()           Sets the current record's "name" value
 * @method Social              setSocialUser()     Sets the current record's "social_user" collection
 * @method Social              setSocialCompany()  Sets the current record's "social_company" collection
 * 
 * @package    tradeagent
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSocial extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('social');
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('UserSocial as social_user', array(
             'local' => 'id',
             'foreign' => 'social_id'));

        $this->hasMany('CompanySocial as social_company', array(
             'local' => 'id',
             'foreign' => 'social_id'));
    }
}