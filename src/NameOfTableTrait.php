<?php
/**
 * Created by PhpStorm.
 * User: Joshua
 * Date: 2018-12-04
 * Time: 11:58
 */

namespace Joshua\Helpers;


trait NameOfTableTrait
{
    /**
     * @param null $column
     * @param null $as
     * @return string
     */
    public static function tableName($column = null, $as = null)
    {
        if(! method_exists($me = new static, 'getTable')) {
            trigger_error("getTable doesnt exist");
        }

        $name = $me->getTable();

        if(!is_null($column)) {
            $name = sprintf("%s.%s", $name, $column);
        }

        if(!is_null($as)) {
            $name = sprintf("%s as %s", $name, $as);
        }

        return $name;
    }
}