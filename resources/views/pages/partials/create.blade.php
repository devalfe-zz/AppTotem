<form method="POST" v-on:submit.prevent="createCategoria">
    <div class="modal fade" id="create">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close" aria-hidden="true"></i>
                    </button>
                    <h4>Nueva tarea</h4>
                </div>
                <div class="modal-body">
                    <label for="cat">Crear Categoría</label>
                    <input type="text" name="cat" class="form-control" v-model="newCategoria">
                    <span v-for="error in errors"class="text-danger"> @{{ error }} </span>
                </div>
                <div class="modal-footer">
                <input class="btn btn-primary" type="submit" value="Guardar">
                </div>
            </div>
        </div>
    </div>
</form>