<?php

namespace Bolsainmobiliariape\ModuleProjects\Http\Livewire\Dashboard\Projects;

use Bolsainmobiliariape\ModuleProjects\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;
use App\Traits\WithSorting;
use Maatwebsite\Excel\Facades\Excel;
use Bolsainmobiliariape\ModuleProjects\Exports\ProjectsExport;

class Index extends Component
{
    use WithPagination;
    use WithSorting;

    public $idDelete;

    public function mount()
    {
        $this->sortField = "contacted";
    }

    public function markAsContacted($id)
    {
        $project = Project::find($id);

        $project->contacted = !$project->contacted;

        $project->save();

    }
    
    public function delete()
    {
        Project::destroy($this->idDelete);
        $this->dispatchBrowserEvent('notice', ['type'=>'success','text'=> 'Contacto de proyecto eliminado con exito!']);
    }

    public function render()
    {
        return view('module-projects::dashboard.projects.index', [
            'projects' => Project::orderBy($this->sortField, $this->sortDirection)->paginate($this->perPage),
        ])->layoutData(['header'=>'Proyectos']);
    }


    public function export()
    {
        return Excel::download(new ProjectsExport, 'Proyectos.xlsx');
    }
}