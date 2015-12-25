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

    public static function province()
    {
        return file_get_contents(dirname(__FILE__).self::$province);
    }

    public static function city()
    {
        return file_get_contents(dirname(__FILE__).self::$city);
    }

    public static function area()
    {
        return file_get_contents(dirname(__FILE__).self::$area);
    }

    public static function map($province)
    {
        if(file_exists($file = dirname(__FILE__).self::$map.$province.'.json')){
            return file_get_contents($file);
        }
        else{
            return NULL;
        }
    }

}