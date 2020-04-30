<?php
/**
 * laravel-helpers - LaravelHelperServiceProvider.php
 * User: Joshua
 * Date: 30/04/2020
 * Time: 11:09
 */

namespace Joshua\Helpers;

use Illuminate\Support\ServiceProvider;
use Joshua\Helpers\Commands\AppConfigInfoCommand;

class LaravelHelperServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([AppConfigInfoCommand::class]);
        }
    }
}