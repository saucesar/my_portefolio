<div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-1">
    @foreach ($projects as $project)
    <div class="col-lg-4 col-md-6 col-sm-12">
        @include('projects.card')
    </div>
    @endforeach
</div>
<div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-1">
    <div class="col-lg-4 col-md-6 col-sm-12">
        {{ $projects->links() }}
    </div>
</div>