<?php

declare(strict_types=1);

namespace NobiDev\LibraryStarter;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Class ServiceProvider
 * @package NobiDev\LibraryStarter
 */
class ServiceProvider extends BaseServiceProvider implements DeferrableProvider
{
    public function register(): void
    {
        $this->app->bind(Constant::getName(), LibraryStarter::class);
    }

    public function provides(): array
    {
        return [
            Constant::getName(),
        ];
    }
}