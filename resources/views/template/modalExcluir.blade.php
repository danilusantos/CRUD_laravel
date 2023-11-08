<!-- Modal -->
<div class="modal fade" id="excluirModal{{ $id }}" tabindex="-1" aria-labelledby="excluirModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light">
                <h1 class="modal-title fs-5" id="excluirModalLabel">Excluir</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja realmente realizar essa exclusão?
            </div>
            <div class="modal-footer">

                <form action="{{ $route }}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
                <a href="javascript:void(0)" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</a>

            </div>
        </div>
    </div>
</div>
