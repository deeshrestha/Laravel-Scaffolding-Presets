<?php

namespace Illuminate\Foundation\Console;

use InvalidArgumentException;
use Illuminate\Console\Command;
use Illuminate\Support\Traits\Macroable;

class PresetCommand extends Command
{
    use Macroable;

    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'preset { type : The preset type (none, bootstrap, vue, react, foundation, bulma) }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Swap the front-end scaffolding for the application';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $valid_preset_types = [
            'none',
            'bootstrap',
            'vue',
            'react',
            'foundation',
            'bulma',
        ];

        if (static::hasMacro($this->argument('type'))) {
            return call_user_func(static::$macros[$this->argument('type')], $this);
        }

        if (! in_array($this->argument('type'), $valid_preset_types)) {
            throw new InvalidArgumentException('Invalid preset.');
        }

        return $this->{$this->argument('type')}();
    }

    /**
     * Install the "fresh" preset.
     *
     * @return void
     */
    protected function none()
    {
        Presets\None::install();

        $this->info('Frontend scaffolding removed successfully.');
    }

    /**
     * Install the "fresh" preset.
     *
     * @return void
     */
    protected function bootstrap()
    {
        Presets\Bootstrap::install();

        $this->info('Bootstrap scaffolding installed successfully.');
        $this->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
    }

    /**
     * Install the "vue" preset.
     *
     * @return void
     */
    public function vue()
    {
        Presets\Vue::install();

        $this->info('Vue scaffolding installed successfully.');
        $this->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
    }

    /**
     * Install the "react" preset.
     *
     * @return void
     */
    public function react()
    {
        Presets\React::install();

        $this->info('React scaffolding installed successfully.');
        $this->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
    }

    /**
     * Install the "foundation" preset.
     *
     * @return void
     */
    public function foundation()
    {
        Presets\Foundation::install();

        $this->info('Foundation scaffolding installed successfully.');
        $this->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
    }
    /**
     * Install the "bulma" preset.
     *
     * @return void
     */
    public function bulma()
    {
        Presets\Bulma::install();

        $this->info('Bulma scaffolding installed successfully.');
        $this->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
    }
}
