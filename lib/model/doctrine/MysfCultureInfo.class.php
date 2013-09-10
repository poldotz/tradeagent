<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lpodda
 * Date: 9/9/13
 * Time: 6:04 PM
 * To change this template use File | Settings | File Templates.
 */

class MysfCultureInfo extends sfCultureInfo {

    public function getIsoByCountry($country = null){
        if(isset($country)){
            $files = sfFinder::type('file')->name('*_'.$country.parent::fileExt())->in(parent::dataDir());
            $culture = 'en';
            if(is_array($files)){
                foreach($files as $file){
                    $culture = substr($file,strlen(parent::dataDir()),5);
                }
                return $culture;
            }
        }
    }

}