<?php

namespace Bolsainmobiliariape\ModuleProjects\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Bolsainmobiliariape\ModuleProjects\Models\project;

class projectsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $project;

    public function __construct(project $project)
    {
        $this->project = $project;
    }

    public function build()
    {
        return $this->markdown('module-projects::mails.projects-mail');
    }
}
