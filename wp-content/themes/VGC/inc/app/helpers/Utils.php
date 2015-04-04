<?php
namespace app\helpers;

class Utils {
    public static function arrayGet($key, array $array, $default = null)
    {
        return (isset($array[$key]))?$array[$key]:$default;
    }

    public static function underscoredToUpperCamelcase($string, $firstUpper = true)
    {
        if ($firstUpper) {
            return preg_replace('/(?:^|_)(.?)/e',"strtoupper('$1')",$string);
        }
        else {
            return preg_replace('/_(.?)/e',"strtoupper('$1')",$string);
        }
    }
}