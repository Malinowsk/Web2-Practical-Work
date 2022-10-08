<form action= {if isset($edit) } "admin/personage/edit/confirm/{$edit[0]->id_personaje}" {else} "admin/personage/add" {/if} method='POST' class='my-4'>
    
    {if isset($edit) } <h2>Editar Personaje</h2> {else} <h2>Agregar Personaje</h2>{/if}
    
    <div class='row text-center'>
        <div class='col-3'>
            <div class='form-group'>
                <label>Nombre</label>
                <input name='name' type='text' class='form-control'  {if isset($edit) } value ="{$edit[0]->nombre}" {/if}>
            </div>
        </div>
        
        <div class='col-3'>
            <div class='form-group'>
                <label>Apellido</label>
                <input name='lastname' type='text' class='form-control'  {if isset($edit) } value ="{$edit[0]->apellido}" {/if}>
            </div>
        </div>
        
        <div class='col-3'>
            <div class='form-group'>
                <label>Clase</label>
                <input name='class' type='text' class='form-control'  {if isset($edit) } value ="{$edit[0]->clase}" {/if}>
            </div>
        </div>
        
        <div class='col-3'>
            <div class='form-group'>
                <label>Raza</label>
                <select name='race' class='form-control'>
                    {foreach $races as $race} 
                        <option value="{$race->id_raza}">{$race->nombre}</option>
                    {/foreach} 
                </select>
            </div>
        </div>
    </div>
    
    <button type="submit" class="btn btn-warning mt-3">{if isset($edit) } Aplicar {else} Guardar {/if}</button>
    {if isset($edit) }
        <button type="button" class="btn btn-warning mt-3 ms-3"> <a href='admin/personage' class="text-decoration-none text-dark">Cancelar</a> </button>
    {/if}

</form>