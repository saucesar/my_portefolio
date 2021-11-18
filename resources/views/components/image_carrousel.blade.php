<div id="{{ $id }}" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
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
    @if (isset($with_controls) && $with_controls)        
    <a class="carousel-control-prev" href="#{{ $id }}" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#{{ $id }}" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    @endif
</div>