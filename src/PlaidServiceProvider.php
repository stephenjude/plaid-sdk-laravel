<?php

namespace Stephenjude\Plaid;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PlaidServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('plaid-sdk-laravel')
            ->hasConfigFile();
    }

    /**
     * {@inheritdoc}
     */
    public function registeringPackage()
    {
        $this->registerPlaid();
    }

    /**
     * {@inheritdoc}
     */
    public function provides()
    {
        return [
            'plaid-sdk-laravel',
        ];
    }

    /**
     * Register the Plaid API class.
     *
     * @return void
     */
    protected function registerPlaid()
    {
        $this->app->singleton('plaid-sdk-laravel', function () {
            return new Plaid();
        });

        $this->app->alias('plaid-sdk-laravel', Plaid::class);
    }
}
