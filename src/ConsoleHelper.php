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
    public function inform($message)
    {
        return $this->runInConsoleMessage($message . PHP_EOL);
    }
    public function speak($message)
    {
        return $this->runInConsoleMessage($message);
    }
    public function mumble($message)
    {
        return $this->runInConsoleMessage(strtolower($message));
    }
    public function announce($message)
    {
        return $this->runInConsoleMessage(strtoupper($message));
    }
    public function runInConsoleMessage($message)
    {
        if(app()->runningInConsole()) {
            print $message;
        }
        return $this;
    }
}