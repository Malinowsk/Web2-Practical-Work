
<!-- formulario de alta de tarea -->
<form action= {if isset($edit) } "admin/race/edit/confirm/{$edit[0]->id_raza}" {else} "admin/race/add" {/if} method="POST" class="my-4">
    
    {if isset($edit) } <h2>Editar Raza</h2> {else} <h2>Agregar Raza</h2> {/if}
        
    <div class="row text-center">
        <div class="col-6">
            <div class="form-group">
                <label class="fw-semibold">Nombre</label>
                <input name="name" type="text" class="form-control" {if isset($edit) } value ="{$edit[0]->nombre}" {/if}>
            </div>
        </div>
        
        <div class="col-6">
            <div class="form-group">
                <label class="fw-semibold">Faccion</label>
                <input name="faccion" type="text" class="form-control" {if isset($edit) } value ="{$edit[0]->faccion}" {/if}>
            </div>
        </div>
    
    </div>

    <button type="submit" class="btn btn-warning mt-3">{if isset($edit) } Aplicar {else} Guardar {/if}</button>
</form>

