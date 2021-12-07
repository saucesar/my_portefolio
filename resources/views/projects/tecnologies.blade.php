<div class="card card-body mb-2 shadow">
    <h5 class="text-center">Tecnologias</h5>
    <div class="d-flex justify-content-center">
        @foreach ($tecnologies as $tecnology)
        <div class="card card-body d-flex justify-content-center" >
            <a href="@if(isset($tecnology->link)) {{ $tecnology->link }} @else # @endif" @if(isset($tecnology->link)) target="_blank" @endif >
                <img src="{{ $tecnology->icon->url() }}" width="30px" title="{{ $tecnology->name }}" alt="tecnology-icon">
            </a>
        </div>
        @endforeach
    </div>
</div>