<div class="card sized-img-card me-2 mb-2">
    <img src="data:{{ $img->extension }};base64,{{ $img->base64 }}" class='card-img-top img-cover sized-preview-img' alt='image'>
    <form id="delete-img-{{ $img->id }}-base64" class="w-100" action="{{ route('images.destroy', ['image' => $img, 'type' => 'base64']) }}" method="post">
        @csrf
        @method('delete')
        <button type="button" class="btn btn-block btn-danger w-100" onclick="confirmImageDelete('delete-img-{{ $img->id }}-base64')">Remover</button>
    </form>
</div>