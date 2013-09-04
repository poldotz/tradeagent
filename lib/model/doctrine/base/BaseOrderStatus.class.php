<?php

/**
 * BaseOrderStatus
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property Doctrine_Collection $status_order
 * 
 * @method string              getName()         Returns the current record's "name" value
 * @method Doctrine_Collection getStatusOrder()  Returns the current record's "status_order" collection
 * @method OrderStatus         setName()         Sets the current record's "name" value
 * @method OrderStatus         setStatusOrder()  Sets the current record's "status_order" collection
 * 
 * @package    tradeagent
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOrderStatus extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('order_status');
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('ProductOrder as status_order', array(
             'local' => 'id',
             'foreign' => 'status_order_id'));
    }
}