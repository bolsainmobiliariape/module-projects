@component('mail::message')
# Nuevos datos desde el formulario de {{ $project->project }} - {{ config('app.name') }}

@component('mail::panel')

@foreach(config('module-projects.names') as  $key => $name)
- {{ $name }}: {{ $project->{$key} }}
@endforeach

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
