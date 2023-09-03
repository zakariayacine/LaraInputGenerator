<?php

namespace Zakariayacine\LaraInputGenerator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaraInputGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name('larainputgenerator');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../src/View/Components' => base_path('app/View/Components'),
            __DIR__.'/../resources/views/components' => resource_path('views/components'),
        ]);
    }
}
