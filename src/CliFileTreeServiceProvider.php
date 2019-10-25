<?php

namespace Alio\CliFileTree;

use Illuminate\Support\ServiceProvider;

class CliFileTreeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

        if ($this->app->runningInConsole()) {
            // Registering package commands.
            $this->commands([ CliFileTree::class ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('cli-file-tree', function () {
            return new CliFileTree;
        });
    }
}
