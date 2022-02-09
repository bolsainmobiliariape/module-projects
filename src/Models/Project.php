<?php 

namespace Bolsainmobiliariape\ModuleProjects\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "projects";

    public function getFillable()
    {
        return config('module-projects.fields');
    }
}