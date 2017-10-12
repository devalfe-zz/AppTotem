<form method="POST"  @submit.prevent="createCategorias" >
    <div class="modal fade" id="create">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h4>Nueva Categoría</h4>
                    <button type="button" class="close" data-dismiss="modal"><i class="text-white fa fa-close" aria-hidden="true"></i>
                    </button>   
                </div>
                <div class="modal-body">  
                     <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" name="titulo" class="form-control" placeholder="titulo de categoria" v-model="addCategoria.titulo">
                        <span class="text-danger">@{{ errors }}</span>
                     </div>
                     <div class="form-group">
                        <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="activo" class="form-control" value="activo" v-model="addCategoria.activo">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description" v-if="addCategoria.activo === true">Publicar</span><span v-else>No Publicar</span>
                        </label>
                        <span class="text-danger">@{{ errors }}</span>
                     </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>