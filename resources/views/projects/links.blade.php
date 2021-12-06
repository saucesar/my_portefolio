<div class="card card-body shadow">
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