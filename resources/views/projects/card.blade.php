<div class="card card-project mb-4" onmouseover="zoom_in(this)" onmouseout="zoom_out(this)">
    @if(count($project->images) > 0 || count($project->imagesBase64) > 0)
    <div class="card-img-top">
        @include('components.image_carrousel', ['id' => 'project-'.($project->id).'-images','img_class' => 'img-carrousel', 'images' => $project->images, 'images_base_64' => $project->imagesBase64])
    </div>
    @else
    <img src="{{ asset('images/default_project_image.jpg') }}" class="card-img-top project-img img-cover" alt="imageBase64">
    @endif
    <div class="card-body">
        <h5 class="card-title mouse-pointer" onclick="goto('<?= route('projects.show', $project->id) ?>')">{{ $project->name }}</h5>
        <p class="card-text text-justify text-truncate">{{ $project->description }}</p>
        <div class="d-flex justify-content-center">
            @foreach ($project->tecnologies as $tecnology)                        
                <img src="{{ $tecnology->icon->url() }}" class="language-icon" title="{{ $tecnology->name }}" alt="language-icon">
            @endforeach
        </div>
        <div class="row text-center">
        @if(isset($project->link))
        <div class="col">
            <a class="btn btn-primary mr-5" href="{{ $project->link }}" target="_blank" title="Link do projeto em funcionamento">
                <i class="fas fa-globe-americas"></i>
            </a>
        </div>
        @endif
        @if(isset($project->github_url))
        <div class="col">
            <a class="btn btn-primary mr-5" href="{{ $project->github_url }}" target="_blank" title="Link do projeto no GitHub">
                <i class="fab fa-github"></i>
            </a>
        </div>
        @endif
        </div>
    </div>
</div>