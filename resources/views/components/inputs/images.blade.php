<label class="mb-2" for="{{ $name }}">{{ $label }}</label>
<input type="file" class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" id="{{ $id ?? $name }}" accept="image/*" multiple
       onchange="loadImages(event)" @if(!isset($required) || isset($required) && $required) required @endif >
<input type="file" accept="image/*" name="temp-{{ $name }}" id="temp-{{ $id ?? $name }}" style="display: none;" >
@error($name)
<small class="text-danger">{{ $message }}</small>
@enderror

@push('js')
<script type="text/javascript">
    let previewContainer = document.getElementById("{{ $collapseImagesPreviewId }}");
    let tempImagesField = document.getElementById("temp-{{ $id ?? $name }}");
    const collapse = new bootstrap.Collapse(previewContainer);
    
    function loadImages(e) {
        let imagesField = e.target;

        copyFiles(imagesField, tempImagesField);
        imagesField.files = tempImagesField.files;
        
        previewContainer.innerHTML = ''

        for(var i = 0; i < imagesField.files.length; i++) {
            previewContainer.innerHTML = previewContainer.innerHTML + createImageContainer(i, imagesField.files[i]);
        }

        collapse.show();
    }

    function copyFiles(from, to) {
        const dt = new DataTransfer()
        
        for(var i = 0; i < from.files.length; i++) { dt.items.add(from.files[i]); }
        for(var i = 0; i < to.files.length; i++) { dt.items.add(to.files[i]); }
        
        to.files = dt.files;
    }

    function createImageContainer(index, file) {
        var url = URL.createObjectURL(file);
        var img_container_id = 'img_container_'+ index;
        var img_link = "<a href='"+url+"' target='_blank' rel='noopener noreferrer'>";
        var image = "<img src='"+URL.createObjectURL(file)+"' class='card-img-top img-cover sized-preview-img' alt='image'>";
        var btn_remove = '<button type="button" class="btn btn-block btn-danger" onclick="removeImage('+index+');">Remover</button>'
        var img_container = '<div class="card sized-img-card mb-2 mr-2" id="'+img_container_id+'">'+img_link+image+'</a>'+btn_remove+'</div>';
        return img_container;
    }

    function removeImage(index) {
        document.getElementById('img_container_'+index).remove();
        removeFile(index);
    }
    
    function removeFile(index) {
        images = document.getElementById('<?= $id ?? $name ?>');
        const dt = new DataTransfer()

        for(var i = 0; i < images.files.length; i++) {
            if(i != index) { dt.items.add(images.files[i]); }
        }

        images.files = dt.files;
        tempImagesField.files = dt.files;
        
        reloadFiles(images);
    }

    function reloadFiles(inputFile) {
        previewContainer.innerHTML = '';

        for(var i = 0; i < inputFile.files.length; i++) {
            previewContainer.innerHTML = previewContainer.innerHTML + createImageContainer(i, inputFile.files[i]);
        }

        if(inputFile.files.length == 0) { collapse.hide(); }
    };
</script>
@endpush