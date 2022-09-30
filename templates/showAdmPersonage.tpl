{include file="header.tpl"}
    
<form action='admin/personage/add' method='POST' class='my-4'>
    <h1>Agregar Personaje</h1>
    <div class='row'>
        <div class='col-3'>
            <div class='form-group'>
                <label>Nombre</label>
                <input name='name' type='text' class='form-control'>
            </div>
        </div>
        
        <div class='col-3'>
            <div class='form-group'>
                <label>Apellido</label>
                <input name='lastname' type='text' class='form-control'>
            </div>
        </div>

        <div class='col-3'>
            <div class='form-group'>
                <label>Clase</label>
                <input name='class' type='text' class='form-control'>
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

    <button type="submit" class="btn btn-primary mt-3">Guardar</button>
</form>

<ul class="list-group">
    {foreach $personages as $personage} 
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> Nombre: <b>{$personage->nombre_p}</b> - Apellido: <b>{$personage->apellido}</b> - Clase: <b>{$personage->clase} </b> </span>
            <a href='admin/personage/delete/{$personage->id_personaje}' type='button' class='btn btn-danger ml-auto'>Borrar</a>
        </li>
    {/foreach} 
</ul>

{include file="footer.tpl"}