<?php

namespace Bolsainmobiliariape\ModuleProjects;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bolsainmobiliariape\ModuleProjects\Http\Livewire\Dashboard\Projects\Index;
use Bolsainmobiliariape\ModuleProjects\Http\Livewire\Dashboard\Projects\Show;
use Bolsainmobiliariape\ModuleProjects\Commands\ModuleProjectsCommand;
use Livewire\Livewire;

class ModuleProjectsServiceProvider extends PackageServiceProvider
{

    public function bootingPackage()
    {
        Livewire::component('dashboard.projects.index', Index::class);
        Livewire::component('dashboard.projects.show', Show::class);
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('module-projects')
            ->hasConfigFile()
            ->hasViews()
            ->hasRoutes('projects')
            ->hasMigration('create_module_projects_table')
            ->hasCommand(ModuleProjectsCommand::class);
    }
}
