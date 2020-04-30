<?php
/**
 * laravel-helpers - ConsoleHelper.php
 * User: Joshua
 * Date: 6/19/19
 * Time: 12:34
 */

namespace Joshua\Helpers;

trait ConsoleHelper
{
    public static function inform($message)
    {
        static::runInConsoleMessage($message . PHP_EOL);
    }
    
    public static function speak($message)
    {
         static::runInConsoleMessage($message);
    }
    
    public static function mumble($message)
    {
         static::runInConsoleMessage(strtolower($message));
    }
    
    public static function announce($message)
    {
         static::runInConsoleMessage(strtoupper($message));
    }
    
    public static function runInConsoleMessage($message)
    {
        if(app()->runningInConsole()) {
            print $message;
        }
    }

    public function helperDisableQueryLog()
    {
        DB::disableQueryLog();
        return $this;
    }
    public function helperIntSet($varname, $newvalue)
    {
        ini_set($varname, $newvalue);
        return $this;
    }
    
    public function helperMemoryLimit($value = '1024M')
    {
        $this->helperIntSet('memory_limit', $value);
        return $this;
    }

    protected static function queryWithBindings(Builder $builder)
    {
        $sql = $builder->toSql();

        foreach($builder->getBindings() as $binding) {
            $value = is_numeric($binding) ? $binding : "'" . $binding . "'";
            $sql = preg_replace('/\?/', $value, $sql, 1);
        }

        return $sql;
    }
}