@extends('layout.app', ['active' => 'projects'])

@section('content')
<div class="container">
    <div class="d-flex justify-content-center mb-5">
        <h1>Projetos</h1>
    </div>
    @include('projects.list')
</div>
@endsection

@push('js')
<script type="text/javascript" src="{{ asset('js/zoom.js') }}"></script>
@endpush