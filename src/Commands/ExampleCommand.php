<?php

namespace Idfx\Example\Commands;

use Illuminate\Console\Command;

class ExampleCommand extends Command
{
    public $signature = 'example-package';

    public $description = 'My command';

    public function handle(): int
    {
        $commandOutput = config('example-package.command_output');

        $this->comment($commandOutput);

        $this->comment('All done!');

        return self::SUCCESS;
    }
}
