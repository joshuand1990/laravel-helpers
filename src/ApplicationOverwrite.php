<?php
/**
 * online-tool - HRMS.php
 * User: Joshua
 * Date: 3/12/18
 * Time: 16:45
 */

namespace Joshua\Helpers;

use Illuminate\Foundation\Application as Laravel;

class ApplicationOverwrite extends Laravel
{

    /**
     * Get the path to the storage directory.
     *
     * @return string
     */
    public function storagePath()
    {
        return env('APP_STORAGE', parent::storagePath());
    }

    /**
     * Get the path to the cached services.php file.
     *
     * @return string
     */
    public function getCachedServicesPath()
    {
        return env('APP_CACHE_SERVICES', parent::getCachedServicesPath());
    }

    /**
     * Get the path to the cached packages.php file.
     *
     * @return string
     */
    public function getCachedPackagesPath()
    {
        return env('APP_CACHE_PACKAGES', parent::getCachedPackagesPath());
    }

    /**
     * Get the path to the configuration cache file.
     *
     * @return string
     */
    public function getCachedConfigPath()
    {
        return env('APP_CACHE_CONFIG', parent::getCachedConfigPath());
    }
}