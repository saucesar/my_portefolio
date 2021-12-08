@extends('layout.app', ['active' => 'projects'])

@section('content')
<div class="container">
    <div class="d-flex justify-content-center mb-5">
        <h1>{{ $project->name }}</h1>
    </div>
    <div class="row row-cols-lg-3 row-cols-md-3 row-cols-sm-1">
        <div class="col-lg-3 col-md-6 col-sm-12">
            @include('projects.description', ['description' => $project->description])
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card card-body mb-4 card-project-image shadow">
                <h5 class="text-center">Imagens</h5>
                @include('components.image_carrousel', ['id' => 'img-carr-project'.($project->id), 'class' => 'mb-4', 'with_img_link' => true, 'img_class' => 'img-carrousel-show','images' => $project->images, 'images_base_64' => $project->imagesBase64])
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 card-project-description d-flex flex-column">
            @if(auth()->user())
                @include('projects.options')
            @endif
            @include('projects.tecnologies', ['tecnologies' => $project->tecnologies])
            @include('projects.links')
        </div>
    </div>
    @if(Auth::user())
    <div class="row mb-2">
        <div class="col">
            <div class="card card-body shadow-lg">
                <div class="w-100 d-inline-flex overflow-auto">
                    @foreach ($project->images as $img)
                    @include('components.cards.image', ['img' => $img])
                    @endforeach
                    @foreach ($project->imagesBase64 as $img)
                    @include('components.cards.image_base_64', ['img' => $img])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection

@push('js')
<script type="text/javascript" src="{{ asset('js/zoom.js') }}"></script>
@if(old('modalId'))
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">
    $("#{{ old('modalId') }}").modal('toggle')
</script>
@endif
@endpush