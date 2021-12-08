<div class="card sized-img-card me-2 mb-2">
    <a href='{{ $img->url() }}' target='_blank' rel='noopener noreferrer'>
        <img src="{{ $img->url() }}" class='card-img-top img-cover sized-preview-img' alt='image'>
    </a>
    <form id="delete-img-{{ $img->id }}" class="w-100" action="{{ route('images.destroy', $img) }}" method="post">
        @csrf
        @method('delete')
        <button type="button" class="btn btn-block btn-danger w-100" onclick="confirmImageDelete('delete-img-{{ $img->id }}');">Remover</button>
    </form>
</div>