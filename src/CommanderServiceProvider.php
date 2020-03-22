<?php

namespace CHHW\Commander;

use CHHW\Commander\Commands\RepositoryMakeCommand;
use CHHW\Commander\Commands\ServiceMakeCommand;
use Illuminate\Support\ServiceProvider;

class CommanderServiceProvider extends ServiceProvider
{
    protected $commands = [
        //
    ];

    protected $devCommands = [
        'ServiceMake' => 'command.service.make',
        'RepositoryMake' => 'command.repository.make',
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands(array_merge(
            $this->commands, $this->devCommands
        ));
    }

    /**
     * Register the given commands.
     *
     * @param  array  $commands
     * @return void
     */
    protected function registerCommands(array $commands)
    {
        foreach (array_keys($commands) as $command) {
            call_user_func_array([$this, "register{$command}Command"], []);
        }

        $this->commands(array_values($commands));
    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerServiceMakeCommand()
    {
        $this->app->singleton('command.service.make', function ($app) {
            return new ServiceMakeCommand($app['files']);
        });
    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerRepositoryMakeCommand()
    {
        $this->app->singleton('command.repository.make', function ($app) {
            return new RepositoryMakeCommand($app['files']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
