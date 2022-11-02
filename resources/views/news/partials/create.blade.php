
<!-- Modal -->
<div class="modal fade" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Usuario Nuevo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{route('news.store')}}" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <label>Autor (*):</label>
                    <input type="text" class="form-control" value="{{$user->name}}" placeholder="" readonly>

                    <label>Etiqueta (*):</label>
                    <input type="text" class="form-control" name="title" required minlength="4" required>

                    <label>Url Blog (Ej: Medium) (*) :</label>
                    <input type="url" class="form-control" name="url" required minlength="4" required placeholder="https://medium.com/@conysturm/c%C3%B3mo-hacer-una-publicaci%C3%B3n-en-medium-a8e7ddc84be9">
                                    
                    <label>Fecha (*):</label>
                    <input type="date" class="form-control" name="date_publish"  required >

                    <label>Estado de la Publicación (*):</label>
                    <select name="status" class="form-control" required>
                        <option value="Pendiente" selected>Pendiente</option>
                        <option value="Publicado">Publicado</option>
                    </select>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>

        </div>
    </div>
</div>