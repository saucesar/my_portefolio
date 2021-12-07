<div class="row mb-2">
    <div class="col">
        @include('components.inputs.text', ['name' => 'name', 'label' => 'Nome', 'placeholder' => 'Nome do projeto', 'value' => $project->name ?? old('name')])
    </div>
</div>
<div class="row mb-2">
    <div class="col">
        @include('components.inputs.text_area', ['name' => 'description', 'label' => 'Descrição', 'value' => $project->description ?? old('description')])
    </div>
</div>
<div class="row mb-2">
    <div class="col">
        <p>Tecnologias</p>
        <div class="row row-cols-lg-4 row-cols-md-4 row-cols-sm-2">
        @foreach ($tecnologies as $tecnology)
        <div class="col-lg-3 col-md-3 col-sm-6 mb-2">
            <div class="card card-body shadow">
            @include('components.inputs.check', ['name' => 'tecnologies[]', 'label' => $tecnology->name,
                                                'id' => 'tec-'.$tecnology->id, 'value' => $tecnology->id,
                                                'imgURL' => $tecnology->iconUrl(),
                                                'checked' => (isset($project) && $project->containsTecnology($tecnology->id) ? true : in_array($tecnology->id, old('tecnologies', [])))])
            </div>
        </div>
        @endforeach
        </div>
    </div>
</div>