<?php

namespace LaravelDeep\LaravelScaffoldingPresets;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand as Preset;
use LaravelDeep\LaravelScaffoldingPresets\Bulma\Bulma;
use LaravelDeep\LaravelScaffoldingPresets\Zurb\Zurb;

class LaravelScaffoldingPresetsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        Preset::macro('bulma', function() {
          Bulma::install();
        });

        Preset::macro('zurb', function() {
          Zurb::install();
        });
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
