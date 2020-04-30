<?php

Artisan::command('app:config', function () {
    $head = [ 'key' , 'path' ];

    $this->warn("Please name sure you are editing the correct config files");

    $this->table($head, [
        ['env', app()->environment()],
        ['envFile', app()->environmentFile()],
        ['envFilePath', app()->environmentFilePath()],
        ['storagePath', app()->storagePath()],
        ['storagePath [f]', storage_path()],
        ['cachedServices', app()->getCachedServicesPath()],
        ['cachedConfig', app()->getCachedConfigPath()],
        ['cachedPackages', app()->getCachedPackagesPath()],
        ['view.compiled', config('view.compiled')],
        ['cache.stores.file.path', config('cache.stores.file.path')],
        ['filesystems.default', config('filesystems.default')],
        ['filesystems.disks.' . config('filesystems.default'), config('filesystems.disks.' . config('filesystems.default') . '.root')],
        ['database.host', config('database.connections.mysql.host')],
        ['database.database', config('database.connections.mysql.database')]
    ]);

});