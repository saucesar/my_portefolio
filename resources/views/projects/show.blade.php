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
        <div class="col-lg-3 col-md-6 col-sm-12 card-project-image">
            <div class="card card-body mb-2 card-project-details-50">
                <h5 class="text-center">Tecnologias</h5>
                <div class="d-flex justify-content-center">
                    <img src="{{ $project->language->iconUrl() }}" class="language-icon" title="{{ $project->language->name }}" alt="language-icon">
                    @if(isset($project->framework))
                    <img src="{{ $project->framework->iconUrl() }}" class="framework-icon" title="{{ $project->framework->name }}" alt="framework-icon">
                    @endif
                </div>
            </div>
            <div class="card card-body mb-2 card-project-details-50">
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