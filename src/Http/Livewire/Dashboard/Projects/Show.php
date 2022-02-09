<?php 

namespace Bolsainmobiliariape\ModuleProjects\Http\Livewire\Dashboard\Projects;

use Bolsainmobiliariape\ModuleProjects\Models\Project;
use Livewire\Component;

class Show extends Component
{

    public Project $project;

    public $names;


    public function markAsContacted($id)
    {
        $project = Project::find($id);

        $project->contacted = !$project->contacted;

        $project->save();
    }

    public  function mount()
    {
        $this->names = config('module-projects.names');
    }

    public function render()
    {
        return view('module-projects::dashboard.projects.show')
            ->layoutData(['header' => 'Proyectos / Detalle']);
    }
}