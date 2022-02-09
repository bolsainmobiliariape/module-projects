<?php

namespace Bolsainmobiliariape\ModuleProjects\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bolsainmobiliariape\ModuleProjects\ModuleProjects
 */
class ModuleProjects extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'module-projects';
    }
}
