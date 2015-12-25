<?php
/**
 * Created by heivin.
 * User: heivin
 * Date: 12/25/15
 * Time: 6:12 PM
 */

namespace Heivin;


class Chinese
{
    protected static $province = '/../resources/data/province.json';
    protected static $city = '/../resources/data/city.json';
    protected static $area = '/../resources/data/area.json';
    protected static $map = '/../resources/map/';

    public static function formatReturn($data,$format='array'){
        if($format==='json'){
            return $data;
        }
        else{
            return json_decode($data);
        }
    }

    public static function province($format='array')
    {
        return self::formatReturn(file_get_contents(dirname(__FILE__).self::$province),$format);
    }

    public static function city($format='array')
    {
        return self::formatReturn(file_get_contents(dirname(__FILE__).self::$city),$format);
    }

    public static function area($format='array')
    {
        return self::formatReturn(file_get_contents(dirname(__FILE__).self::$area),$format);
    }

    public static function map($province,$format='array')
    {
        if(file_exists($file = dirname(__FILE__).self::$map.$province.'.json')){
            return self::formatReturn(file_get_contents($file),$format);
        }
        else{
            return NULL;
        }
    }

}