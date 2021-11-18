@extends('layout.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center mb-5">
        <h1>Destaques</h1>
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
<script type="text/javascript" src="{{ asset('js/zoom.js') }}"></script>
@endpush