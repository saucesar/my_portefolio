@if(session('success'))
<div class="alert alert-success alert-dismissible fade show">
    <span>{{ session('success') }}</span>
</div>
@endif