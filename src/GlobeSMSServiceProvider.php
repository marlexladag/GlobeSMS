<?php

namespace MarlexLadag\GlobeSMS;

use MarlexLadag\GlobeSMS\Commands\GlobeSMSCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GlobeSMSServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('globesms')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_globesms_table')
            ->hasCommand(GlobeSMSCommand::class);
    }
}
