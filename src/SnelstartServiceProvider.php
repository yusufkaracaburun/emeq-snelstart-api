<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SnelstartServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('snelstart-api')
            ->hasConfigFile('snelstart');
    }
}
