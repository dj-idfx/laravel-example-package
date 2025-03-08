<?php

use Idfx\Example\Commands\ExampleCommand;
use Illuminate\Console\Command;

use function Pest\Laravel\artisan;

it('can test', function () {
    expect(true)->toBeTrue();
});

it('can output config files value', function () {
    artisan(ExampleCommand::class)
        ->expectsOutput(config('example-package.command_output'))
        ->expectsOutput('All done!')
        ->assertExitCode(Command::SUCCESS);
});

it('can change config file value', function () {
    config()->set('example-package.command_output', 'New value');

    artisan(ExampleCommand::class)
        ->expectsOutput('New value')
        ->assertExitCode(Command::SUCCESS);
});
