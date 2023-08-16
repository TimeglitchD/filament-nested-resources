<?php

namespace TimeglitchD\FilamentNestedResources\Commands;

use Illuminate\Console\Command;

class FilamentNestedResourcesCommand extends Command
{
    public $signature = 'filament-nested-resources';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
