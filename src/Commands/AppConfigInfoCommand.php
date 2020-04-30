<?php
/**
 * laravel-helpers - AppConfigInfoCommand.php
 * User: Joshua
 * Date: 30/04/2020
 * Time: 11:11
 */

namespace Joshua\Helpers\Commands;

use Illuminate\Console\Command;

class AppConfigInfoCommand extends Command
{
    protected $signature = 'app:config';
    protected $description = 'All the Configs to run an app (only main)';

    public function handle() {

        $head = [ 'key' , 'path' ];

        $this->warn("Please name sure you are editing the correct config files");

        $this->table($head, [
            ['env', $this->getLaravel()->environment()],
            ['envFile', $this->getLaravel()->environmentFile()],
            ['envFilePath', $this->getLaravel()->environmentFilePath()],
            ['storagePath', $this->getLaravel()->storagePath()],
            ['storagePath [f]', $this->getLaravel()->storagePath()],
            ['cachedServices', $this->getLaravel()->getCachedServicesPath()],
            ['cachedConfig', $this->getLaravel()->getCachedConfigPath()],
            ['cachedPackages', $this->getLaravel()->getCachedPackagesPath()],
            ['view.compiled', config('view.compiled')],
            ['cache.stores.file.path', config('cache.stores.file.path')],
            ['filesystems.default', config('filesystems.default')],
            ['filesystems.disks.' . config('filesystems.default'), config('filesystems.disks.' . config('filesystems.default') . '.root')],
            ['database.host', config('database.connections.mysql.host')],
            ['database.database', config('database.connections.mysql.database')]
        ]);
    }
}