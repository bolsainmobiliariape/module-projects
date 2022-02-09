<?php

namespace Bolsainmobiliariape\ModuleProjects\Exports;

use Bolsainmobiliariape\ModuleProjects\Models\Project;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProjectsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $arra = config('module-projects.fields');

        $merge = array_merge(array('id'), $arra);
        $merge = array_merge($merge, array('created_at'));
        return Project::select($merge)->get();
    }

    public function headings() : array
    {
        $arra = config('module-projects.fields');

        $merge = array_merge(array('id'), $arra);
        $merge = array_merge($merge, array('Hora / Fecha'));
        return $merge;
    }
}
