<?php

use Idfx\Example\Commands\ExampleCommand;
use Illuminate\Console\Command;
use function Pest\Laravel\artisan;

it('can test', function () {
    expect(true)->toBeTrue();
});

it('can test ExampleCommand', function () {
    artisan(ExampleCommand::class)->assertExitCode(Command::SUCCESS);
});
