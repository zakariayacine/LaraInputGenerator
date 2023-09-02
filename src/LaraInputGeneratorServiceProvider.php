<?php

namespace Zakariayacine\LaraInputGenerator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Zakariayacine\LaraInputGenerator\Commands\LaraInputGeneratorCommand;

class LaraInputGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('larainputgenerator')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_larainputgenerator_table')
            ->hasCommand(LaraInputGeneratorCommand::class);
    }
}
