
<!-- Modal -->
<div class="modal fade" id="edit{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Usuario Nuevo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{route('news.update', $item->id)}}" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method("put")
                    <label>Destacado:
                        <input type="checkbox" name="featured"  value="1" @if($item->featured==1) checked @endif>
                    </label>
                    <br>

                    <label>Autor:</label>
                    <input type="text" name="autor"  class="form-control" value="{{$item->autor}}" placeholder="" required>
                
                    <label>Titulo (Ingles):</label>
                    <input type="text" class="form-control" name="title_en"  value="{{$item->title_en}}" required minlength="4" required>

                    <label>Titulo (Spanish):</label>
                    <input type="text" class="form-control" name="title_es"  value="{{$item->title_es}}" required minlength="4" required>
                    
                    <label>Descripción (Ingles):</label>
                    <textarea class="form-control ckeditor"  style="height: 150px" name="description_en" required>{{$item->description_en}}</textarea>

                    <label>Descripción (Spanish):</label>
                    <textarea class="form-control ckeditor"  style="height: 150px" name="description_es" required>{{$item->description_es}}</textarea>

                    <label>Fecha:</label>
                    <input type="date" class="form-control" name="date_publish" value="{{$item->date_publish}}"   required >

            
                    <label>Estado de la Publicación :</label>
                    <select name="status" class="form-control" required>
                        <option value="Pendiente"  @if($item->status == "Pendiente")  selected @endif>Pendiente</option>
                        <option value="Publicado" @if($item->status == "Publicado")  selected @endif>Publicado</option>
                    </select>
                    
                    <br>
                    <label>Imagen:</label>
                    @if($item->img!='')
                    <img src="https://firulaixcoin.finance/images/news/{{$item->img}}" style="max-width:300px;max-height:300px">
                    @endif
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