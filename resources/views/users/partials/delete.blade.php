
<!-- Modal -->
<div class="modal fade" id="deleteUser{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Usuario Nuevo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{route('usuarios.destroy', $item->id)}}">
                <div class="modal-body">
                    @csrf
                    @method("delete")
                    <h4>¿Esta seguro de eliminar al Usuario {{$item->name}} </h4>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Eliminar</button>
                </div>
            </form>

        </div>
    </div>
</div>