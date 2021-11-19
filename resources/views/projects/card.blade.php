<div class="card card-project mb-4" onmouseover="zoom_in(this)" onmouseout="zoom_out(this)">
    @if(count($project->images) > 0 || count($project->imagesBase64) > 0)
        @include('components.image_carrousel', ['id' => 'project-'.($project->id).'-images', 'images' => $project->images, 'images_base_64' => $project->imagesBase64])
    @else
        <img src="{{ asset('images/default_project_image.jpg') }}" class="card-img-top project-img img-cover" alt="imageBase64">
    @endif
    <div class="card-body">
        <h5 class="card-title mouse-pointer" onclick="goto('<?= route('projects.show', $project->id) ?>')">{{ $project->name }}</h5>
        <p class="card-text text-justify text-truncate">{{ $project->description }}</p>
        <div class="d-flex justify-content-center">
            <img src="{{ $project->language->iconUrl() }}" class="language-icon mr-1" title="{{ $project->language->name }}" alt="language-icon">
            @if(isset($project->framework))
            <img src="{{ $project->framework->iconUrl() }}" class="framework-icon mr-1" title="{{ $project->framework->name }}" alt="framework-icon">
            @endif
        </div>
        <div class="row text-center">
        @if(isset($project->link))
            <a class="col text-muted mr-5" href="{{ $project->link }}" target="_blank" title="Link do projeto em funcionamento">
                <i class="fas fa-globe-americas"></i>
            </a>
        @endif
        @if(isset($project->github_url))
            <a class="col text-muted mr-5" href="{{ $project->github_url }}" target="_blank" title="Link do projeto no GitHub">
                <i class="fab fa-github"></i>
            </a>
        @endif
        </div>
    </div>
</div>