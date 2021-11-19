@extends('layout.app', ['active' => 'projects'])

@section('content')
<div class="container">
    <div class="d-flex justify-content-center mb-5">
        <h1>{{ $project->name }}</h1>
    </div>
    <div class="row row-cols-lg-3 row-cols-md-3 row-cols-sm-1">
        <div class="col-lg-3 col-md-6 col-sm-12">            
            <div class="card card-body mb-4 card-project-description">
                <h5 class="text-center">Descrição</h5>
                <p class="text-justify">{{ $project->description }}</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card card-body mb-4 card-project-image">
                <h5 class="text-center">Imagens</h5>
                @include('components.image_carrousel', ['id' => 'img-carr-project'.($project->id), 'class' => 'mb-4','images' => $project->images, 'images_base_64' => $project->imagesBase64])
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 card-project-description d-flex flex-column">
                @if(auth()->user())
                <div class="card card-body mb-2">
                    <h5 class="text-center">Opções</h5>
                    <div class="d-inline-flex justify-content-center">
                        <button type="button" class="btn btn-sm btn-warning text-light me-2" data-bs-toggle="modal" data-bs-target="#project-edit-{{ $project->id }}" title="Editar">
                            <i class="fas fa-pen-square"></i>
                        </button>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Tem certeza');" title="Deletar">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                        @include('projects.modal', ['id' => 'project-edit-'.($project->id), 'modal_title' => 'Atualizar projeto'])
                    </div>
                </div>
                @endif
                <div class="card card-body mb-2">
                    <h5 class="text-center">Tecnologias</h5>
                    <div class="d-flex justify-content-center">
                        @foreach ($project->tecnologies as $tecnology)                        
                        <img src="{{ $tecnology->iconUrl() }}" class="language-icon" title="{{ $tecnology->name }}" alt="language-icon">
                        @endforeach
                    </div>
                </div>
                <div class="card card-body">
                    <h5 class="text-center">Links</h5>
                    @if(isset($project->link))
                    <a class="btn btn-primary mb-3 mr-5" href="{{ $project->link }}" target="_blank" title="Link do projeto em funcionamento">
                        <i class="fas fa-globe-americas"></i>
                        Acesse o projeto
                    </a>
                    @endif
                    @if(isset($project->github_url))
                        <a class="btn btn-primary mr-5" href="{{ $project->github_url }}" target="_blank" title="Link do projeto no GitHub">
                            <i class="fab fa-github"></i>
                            Github
                        </a>
                    @endif
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script type="text/javascript" src="{{ asset('js/zoom.js') }}"></script>
@endpush