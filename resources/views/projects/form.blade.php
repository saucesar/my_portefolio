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
<div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 mb-2">
    <div class="col-lg-6 col-md-6 col-md-12">
        @include('components.inputs.text', ['name' => 'link', 'label' => 'Link', 'placeholder' => 'Link de acesso ao projeto', 'value' => $project->link ?? old('link')])
    </div>
    <div class="col-lg-6 col-md-6 col-md-12">
        @include('components.inputs.text', ['name' => 'github_url', 'label' => 'Github', 'placeholder' => 'Link para o github do projeto', 'value' => $project->github_url ?? old('github_url')])
    </div>
</div>
<div class="row mb-2">
    <div class="col">
        <p>Tecnologias</p>
        @error('tecnologies')
        <small class="text-danger">{{ $message }}</small>
        @enderror
        <div class="row row-cols-lg-4 row-cols-md-4 row-cols-sm-2 mt-2">
        @foreach ($tecnologies as $tecnology)
        <div class="col-lg-3 col-md-3 col-sm-6 mb-2">
            <div class="card card-body shadow @error('tecnologies') border-danger @enderror">
            @include('components.inputs.check', ['name' => 'tecnologies[]', 'label' => $tecnology->name,
                                                'id' => 'tec-'.$tecnology->id, 'value' => $tecnology->id,
                                                'imgURL' => $tecnology->icon->url(),
                                                'checked' => (isset($project) && $project->containsTecnology($tecnology->id) ? true : in_array($tecnology->id, old('tecnologies', [])))])
            </div>
        </div>
        @endforeach
        </div>
    </div>
</div>