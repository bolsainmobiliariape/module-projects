<?php

namespace Bolsainmobiliariape\ModuleProjects\Commands;

use Illuminate\Console\Command;

class ModuleProjectsCommand extends Command
{
    public $signature = 'module:projects';

    public $description = 'Publish config and migration';

    public function handle(): int
    {
        
        $this->callSilent('vendor:publish', ['--tag'=>'module-projects-config']);
        $this->callSilent('vendor:publish', ['--tag'=>'module-projects-migrations']);

        $this->comment('Published module-projects config file and migration');

        return self::SUCCESS;
    }
}
