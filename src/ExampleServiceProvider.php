<?php

namespace Idfx\Example;


use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Idfx\Example\Commands\ExampleCommand;

class ExampleServiceProvider extends PackageServiceProvider{
    public function configurePackage(Package $package): void{
            /*
             * This class is a Package Service Provider
             *
             * More info: https://github.com/spatie/laravel-package-tools
             */


            $package
                ->name('laravel-example-package')
                ->hasConfigFile()
                ->hasViews()


                ->hasMigration('create_laravel_example_package_table')
                ->hasCommand(ExampleCommand::class);
    }
}
