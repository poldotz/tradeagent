<?php
/**
 * Created by JetBrains PhpStorm.
 * User: poldotz
 * Date: 10/09/13
 * Time: 8.39
 * To change this template use File | Settings | File Templates.
 */

function averageCoodinates($values = array()){
    if(is_array($values) && count($values)>0){
        $sum = array('lat'=>0,'lng'=>0);
        $average = array('lat'=>0,'lng'=>0);
        foreach($values as $value){
            $sum['lat'] += $value['lat'];
            $sum['lng'] += $value['lng'];
        }
        $average['lat'] = $sum['lat'] / count($values);
        $average['lng'] = $sum['lng'] / count($values);
    }
    return $average;
}
