
<!-- formulario de alta de tarea -->
<form action="admin/race/add" method="POST" class="my-4">
    <h1>Agregar Raza</h1>
    <div class="row">
        <div class="col-5">
            <div class="form-group">
                <label>Nombre</label>
                <input name="name" type="text" class="form-control">
            </div>
        </div>
        
        <div class="col-5">
            <div class="form-group">
                <label>Faccion</label>
                <input name="faccion" type="text" class="form-control">
            </div>
        </div>
    
    </div>

    <button type="submit" class="btn btn-primary mt-3">Guardar</button>
</form>