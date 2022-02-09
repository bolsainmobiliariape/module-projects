<?php

namespace Bolsainmobiliariape\ModuleProjects\Commands;

use Illuminate\Console\Command;

class ModuleProjectsCommand extends Command
{
    public $signature = 'module-projects';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
