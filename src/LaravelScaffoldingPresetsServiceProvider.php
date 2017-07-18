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
          $this->info('Bulma scaffolding installed successfully.');
          $this->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        Preset::macro('zurb', function() {
          Zurb::install();
          $this->info('Zurb scaffolding installed successfully.');
          $this->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
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
