
<!-- Modal -->
<div class="modal fade" id="editUser{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Usuario Nuevo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{route('usuarios.update', $item->id)}}">
                <div class="modal-body">
                    @csrf
                    @method("put")
                    <label>Nombre:</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$item->name}}" required minlength="4">

                    <label>Email:</label>
                    <input type="email" class="form-control" name="email" id="email"  value="{{$item->email}}" required minlength="4">


                    <label>Rol:</label>
                    <select class="form-control" name="rol" id="rol"  onchange="see()">>
                        <option value="Admin" @if ($item->rol=="admin") selected @endif >Admin</option>
                        <option value="Usuario" @if ($item->rol=="Usuario") selected @endif >Usuario</option>
                    </select>

                    <label>Contraseña: (Si se deja en blanco no se actualiza)</label>
                    <input type="password" class="form-control" name="password" id="password"  value=""  minlength="4">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Actualizar</button>
                </div>
            </form>

        </div>
    </div>
</div>

<script>
    function seeEdit(){
        const element = document.getElementById("see-editar");
        element.style.display="block";
    }
    seeEdit();
</script>