<?php

namespace Illuminate\Foundation\Console\Presets;

use Illuminate\Support\Arr;
use Illuminate\Filesystem\Filesystem;

class Bulma extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::updatePackages();
        static::updateSass();
        static::removeNodeModules();
    }

    /**
     * Update the given package array.
     *
     * @param  array  $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return [
            'bulma' => '^0.4.3',
        ] + Arr::except($packages, ['bootstrap-sass', 'foundation-sites']);
    }

    /**
     * Update the Sass files for the application.
     *
     * @return void
     */
    protected static function updateSass()
    {
        // clean up the files used by other frameworks
        (new Filesystem)->delete(
            resource_path('assets/sass/_settings.scss')
        );
        (new Filesystem)->delete(
            resource_path('assets/sass/_variables.scss')
        );

        copy(__DIR__.'/bulma-stubs/initial-variables.sass', resource_path('assets/sass/initial-variables.sass'));
        copy(__DIR__.'/bulma-stubs/bulma.sass', resource_path('assets/sass/bulma.sass'));
        copy(__DIR__.'/bulma-stubs/app.scss', resource_path('assets/sass/app.scss'));
    }
}
