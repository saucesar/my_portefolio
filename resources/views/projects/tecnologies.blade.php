<div class="card card-body mb-2 shadow">
    <h5 class="text-center">Tecnologias</h5>
    <div class="d-flex justify-content-center">
        @foreach ($tecnologies as $tecnology)
        <img src="{{ $tecnology->iconUrl() }}" class="language-icon" title="{{ $tecnology->name }}" alt="language-icon">
        @endforeach
    </div>
</div>