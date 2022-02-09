<div>
    <x-details title="Detalles de contacto de Proyeccto" description="Muestra los detalles que el cliente llenó en el formulario">
        <x-slot name="action">
            <input wire:click="markAsContacted({{$project->id}})" type="checkbox" name="contacted"  {{ $project->contacted ? 'checked': ''}}> Contactado
        </x-slot>
        @foreach(config('module-projects.fields') as $key => $item)
        <x-details.item :title="$names[$item]" :description="$project->{$item}" :gray="$key%2!==0?true:false" />
        @endforeach

        <x-details.item title="Fecha / Hora" :description="$project->created_at->format('d-m-Y / H:i')" />
    </x-details>
</div>