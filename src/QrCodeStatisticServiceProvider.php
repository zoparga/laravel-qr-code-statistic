<?php

namespace zoparga\QrCodeStatistic;

use Illuminate\Routing\Router;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use zoparga\QrCodeStatistic\Commands\QrCodeStatisticCommand;
use zoparga\QrCodeStatistic\Http\Middleware\GetQrCodeStatistic;

class QrCodeStatisticServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-qr-code-statistic')
            //->hasConfigFile()
            //->hasViews()
            ->hasMigration('create_qr_code_statistics_table')
            //->hasCommand(QrCodeStatisticCommand::class)
            ;

        // $router = $this->app->make(Router::class);
        // $router->pushMiddlewareToGroup('web', GetQrCodeStatistic::class);
    }

    public function bootingPackage(): void
    {
        //$this->loadMigrationsFrom(__DIR__ . '/../database/migrations');


        $router = $this->app->make(Router::class);
        $router->pushMiddlewareToGroup('web', GetQrCodeStatistic::class);
    }
}
