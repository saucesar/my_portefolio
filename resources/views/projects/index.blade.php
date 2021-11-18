@extends('layout.app', ['active' => 'projects'])

@section('content')
<div class="container">
    <div class="d-flex justify-content-center mb-5">
        <h1>Projetos</h1>
    </div>
    <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-1">
        @foreach ($projects as $project)
        <div class="col-lg-4 col-md-6 col-sm-12">
            @include('projects.card')
        </div>
        @endforeach
    </div>
</div>
@endsection

@push('js')
<script type="text/javascript">
    function zoom_in(card) {
        card.classList.add("shadow-lg")
        card.classList.add("card-zoom")
    }

    function zoom_out(card) {
        card.classList.remove("shadow-lg")
        card.classList.remove("card-zoom")
    }
</script>
@endpush