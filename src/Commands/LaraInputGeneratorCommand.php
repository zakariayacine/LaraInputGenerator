<?php

namespace Zakariayacine\LaraInputGenerator\Commands;

use Illuminate\Console\Command;

class LaraInputGeneratorCommand extends Command
{
    public $signature = 'larainputgenerator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
