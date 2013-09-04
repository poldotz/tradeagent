<?php

/**
 * BaseProduct
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $code
 * @property string $name
 * @property clob $description
 * @property bigint $quantity
 * @property decimal $price
 * @property decimal $offer_price
 * @property datetime $offer_end_date
 * @property bigint $category_id
 * @property bigint $company_id
 * @property bigint $gallery_id
 * @property Gallery $Gallery
 * @property Category $Category
 * @property Company $Company
 * 
 * @method string   getCode()           Returns the current record's "code" value
 * @method string   getName()           Returns the current record's "name" value
 * @method clob     getDescription()    Returns the current record's "description" value
 * @method bigint   getQuantity()       Returns the current record's "quantity" value
 * @method decimal  getPrice()          Returns the current record's "price" value
 * @method decimal  getOfferPrice()     Returns the current record's "offer_price" value
 * @method datetime getOfferEndDate()   Returns the current record's "offer_end_date" value
 * @method bigint   getCategoryId()     Returns the current record's "category_id" value
 * @method bigint   getCompanyId()      Returns the current record's "company_id" value
 * @method bigint   getGalleryId()      Returns the current record's "gallery_id" value
 * @method Gallery  getGallery()        Returns the current record's "Gallery" value
 * @method Category getCategory()       Returns the current record's "Category" value
 * @method Company  getCompany()        Returns the current record's "Company" value
 * @method Product  setCode()           Sets the current record's "code" value
 * @method Product  setName()           Sets the current record's "name" value
 * @method Product  setDescription()    Sets the current record's "description" value
 * @method Product  setQuantity()       Sets the current record's "quantity" value
 * @method Product  setPrice()          Sets the current record's "price" value
 * @method Product  setOfferPrice()     Sets the current record's "offer_price" value
 * @method Product  setOfferEndDate()   Sets the current record's "offer_end_date" value
 * @method Product  setCategoryId()     Sets the current record's "category_id" value
 * @method Product  setCompanyId()      Sets the current record's "company_id" value
 * @method Product  setGalleryId()      Sets the current record's "gallery_id" value
 * @method Product  setGallery()        Sets the current record's "Gallery" value
 * @method Product  setCategory()       Sets the current record's "Category" value
 * @method Product  setCompany()        Sets the current record's "Company" value
 * 
 * @package    tradeagent
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProduct extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('product');
        $this->hasColumn('code', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('quantity', 'bigint', null, array(
             'type' => 'bigint',
             ));
        $this->hasColumn('price', 'decimal', 5, array(
             'type' => 'decimal',
             'scale' => 2,
             'default' => 0,
             'length' => 5,
             ));
        $this->hasColumn('offer_price', 'decimal', 5, array(
             'type' => 'decimal',
             'scale' => 2,
             'default' => 0,
             'length' => 5,
             ));
        $this->hasColumn('offer_end_date', 'datetime', null, array(
             'type' => 'datetime',
             ));
        $this->hasColumn('category_id', 'bigint', null, array(
             'type' => 'bigint',
             ));
        $this->hasColumn('company_id', 'bigint', null, array(
             'type' => 'bigint',
             ));
        $this->hasColumn('gallery_id', 'bigint', null, array(
             'type' => 'bigint',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Gallery', array(
             'local' => 'gallery_id',
             'foreign' => 'id'));

        $this->hasOne('Category', array(
             'local' => 'category_id',
             'foreign' => 'id'));

        $this->hasOne('Company', array(
             'local' => 'company_id',
             'foreign' => 'id'));

        $blameable0 = new Doctrine_Template_Blameable();
        $taggable0 = new Doctrine_Template_Taggable();
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'name',
             ),
             ));
        $softdelete0 = new Doctrine_Template_SoftDelete(array(
             'versionColumn' => 'version',
             'className' => '%CLASS%Version',
             'auditLog' => true,
             ));
        $this->actAs($blameable0);
        $this->actAs($taggable0);
        $this->actAs($sluggable0);
        $this->actAs($softdelete0);
    }
}