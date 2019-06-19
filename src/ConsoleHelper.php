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
}