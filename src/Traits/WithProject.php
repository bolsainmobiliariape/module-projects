<?php

namespace Bolsainmobiliariape\ModuleProjects\Traits;

use Bolsainmobiliariape\ModuleProjects\Models\Project;

trait WithProject
{
    public $project;

    public function mount(Project $project)
    {
        $this->project = $project;
    }

    public function rules()
    {
        return config('module-projects.rules');
    }

    public function store(string $project = "Sakura")
    {
        $this->project->project = $project;

        $this->validate();

        $this->project->save();

        $this->doingAfter();
    }

    public function doingAfter()
    {
        // things for doing after project is saved
        // like: send Mail, redirect,  etc.
    }
}