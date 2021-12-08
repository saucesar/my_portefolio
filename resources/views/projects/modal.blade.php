<!-- Modal -->
<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id }}Label">{{ $modal_title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="@if(isset($project)) {{ route('projects.update', $project->id) }} @else {{ route('projects.store') }} @endif" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @if(isset($project))
                    @method('put') 
                    @endif
                    @csrf
                    @include('projects.form')
                    <input type="hidden" name="modalId" value="{{ $id }}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>