
<!-- Modal -->
<div class="modal fade" id="nuevoUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Usuario Nuevo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{route('usuarios.store')}}">
                <div class="modal-body">
                    @csrf
                    <label>Nombre:</label>
                    <input type="text" class="form-control" name="name" id="name" required minlength="4">

                    <label>Email:</label>
                    <input type="email" class="form-control" name="email" id="email" required minlength="4">

                    <label>Contraseña:</label>
                    <input type="password" class="form-control" name="password" id="password" required minlength="4">
                    @if ($item->rol=="Admin")

                    <label>Rol:</label>
                    <select class="form-control" name="rol" id="rol" onchange="see()">
                        <option value="Admin">Admin</option>
                        <option value="Usuario">Usuario</option>
                        <option value="Logger">Logger</option>
                    </select>
                    @endif

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>

        </div>
    </div>
</div>

<script>
    function see(){
        const element = document.getElementById("see");
        element.style.display="block";
    }

</script>