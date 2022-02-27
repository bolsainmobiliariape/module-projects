<?php

namespace Bolsainmobiliariape\ModuleProjects\Traits;

use Bolsainmobiliariape\ModuleProjects\Models\Project;
use App\Traits\WithSendMails;
use Bolsainmobiliariape\ModuleProjects\Mail\ProjectsMail;

trait WithProject
{
    use WithSendMails;

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

        if(env('MAIL', false)){
            $this->sendMail("Nuevo interesado en {$this->project->project}  - " . config('app.name'), $this->project, ProjectsMail::class);
        }

        $this->doingAfter();
    }

    public function doingAfter()
    {
        // things for doing after project is saved
        // like: send Mail, redirect,  etc.
    }
}