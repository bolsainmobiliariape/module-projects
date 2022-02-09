<?php 

namespace Bolsainmobiliariape\ModuleProjects\Http\Controllers\Dashboard\Projects;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('module-projects::dashboard.projects.indexwrapper');
    }
}