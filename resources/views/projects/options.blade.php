<div class="card card-body shadow mb-2">
    <h5 class="text-center">Opções</h5>
    <div class="d-inline-flex justify-content-center">
        <button type="button" class="btn btn-sm btn-warning text-light me-2" data-bs-toggle="modal" data-bs-target="#project-edit-{{ $project->id }}" title="Editar">
            <i class="fas fa-pen-square"></i>
        </button>
        <form action="{{ route('projects.destroy', $project->id) }}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Tem certeza?');"
                title="Deletar">
                <i class="fas fa-trash"></i>
            </button>
        </form>
        @include('projects.modal', ['id' => 'project-edit-'.($project->id), 'modal_title' => 'Atualizar projeto'])
    </div>
</div>