<div id="{{ $id }}" class="carousel slide {{  $class ?? '' }}" data-ride="carousel" style="height: 100%;">
    <div class="carousel-inner">
        @if(count($images) == 0 && count($images_base_64) == 0)
        <div class="carousel-item active">
            @if (isset($with_img_link) && $with_img_link)
            <a href="{{ asset('images/default_project_image.jpg') }}" target="_blank">
                <img src="{{ asset('images/default_project_image.jpg') }}" class="img-cover rounded mx-auto d-block {{ $img_class ?? '' }}" alt="image">
            </a>
            @else
            <img src="{{ asset('images/default_project_image.jpg') }}" class="img-cover rounded mx-auto d-block {{ $img_class ?? '' }}" alt="image">
            @endif
        </div>    
        @endif
        <?php $active = true ?>
        @foreach ($images as $image)
        <div class="carousel-item @if($active) active <?php $active = false ?> @endif">
            @if (isset($with_img_link) && $with_img_link)
            <a href="{{ $image->url() }}" target="_blank">
                <img src="{{ $image->url() }}" class="img-cover rounded mx-auto d-block {{ $img_class ?? '' }}" alt="image">
            </a>
            @else
            <img src="{{ $image->url() }}" class="img-cover rounded mx-auto d-block {{ $img_class ?? '' }}" alt="image">
            @endif
        </div>
        @endforeach
        @foreach ($images_base_64 as $image)
        <div class="carousel-item @if($active) active <?php $active = false ?> @endif">
            <img src="data:{{ $image->extension }};base64,{{ $image->base64 }}" class="img-cover rounded mx-auto d-block {{ $img_class ?? '' }}" alt="image">
        </div>
        @endforeach
    </div>
    @if(count($images) > 0 || count($images_base_64) > 0)        
    <button class="carousel-control-prev" type="button" data-bs-target="#{{ $id }}" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#{{ $id }}" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    @endif
</div>