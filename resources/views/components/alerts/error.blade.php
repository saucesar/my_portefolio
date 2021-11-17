@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
        <i class="nc-icon nc-simple-remove"></i>
    </button>
    <span>{{ session('error') }}</span>
</div>
@endif