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
     * @return string
     */
    public static function tableName($column = null)
    {
        $me = new static();

        if(! method_exists($me, 'getTable')) {
            trigger_error("getTable doesnt exist");
            return;
        }

        return is_null($column) ? $me->getTable() : "{$me->getTable()}.{$column}";
    }
}