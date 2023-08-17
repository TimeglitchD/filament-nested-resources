<?php

namespace TimeglitchD\FilamentNestedResources;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentNestedResourcesPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-nested-resources';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
            ])
            ->pages([
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
