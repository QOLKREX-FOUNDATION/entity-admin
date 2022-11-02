
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
            <form method="post" action="{{route('centers.store')}}" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <label>Nombre:(*)</label>
                    <input type="text" class="form-control" name="name" required minlength="4"  placeholder="Qolkrex Foundation">

                    <label>Tipo (*):</label>
                    <select name="type" class="form-control">
                        <option value="Veterina" selected>Veterinaria</option>
                        <option value="Albergue">Albergue</option>
                    </select>
                    
                    <label>Website Url:</label>
                    <input type="text" class="form-control" name="url" required minlength="4" placeholder="https://firulaixcoin.finance/">

                    <label>E-mail (*):</label>
                    <input type="text" class="form-control" name="email" required minlength="2" placeholder="hello@example.com">

                    <label>Teléfono (*):</label>
                    <input type="text" class="form-control" name="phone" required minlength="2" placeholder="51939130496">
                    
                    <label>Dirección (*):</label>
                    <input type="text" class="form-control" name="direction" required minlength="2" placeholder="Av. Oscar R. Benavides 809 - Chincha Alta - ruc 10215685603">

                                        
                    <label>Latitud (*):</label>
                    <input type="text" class="form-control" name="latitude" required  placeholder="12.0767835">
                    

                    <label>Longitud (*):</label>
                    <input type="text" class="form-control" name="longitude" required  placeholder="-77.0476776,17">
                    
                    <br>
                    <label>Imagen:</label>
                    <input type="file" name="img"  accept="image/jpeg, image/png">
                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>

        </div>
    </div>
</div>


