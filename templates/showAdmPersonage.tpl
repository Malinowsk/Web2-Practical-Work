{include file="header.tpl"}
    
{include file="form_personage.tpl" scope=parent}

<table class="table container text-center border border-black">
    <thead class="table-dark border border-black">
        <tr>
            <th class="col-2 border border-black">Nombre</th>
            <th class="col-2 border border-black">Apellido</th>
            <th class="col-2 border border-black">Clase</th>
            <th class="col-2 border border-black">Raza</th>
            <th class="col-2 border border-black">Acciones</th>
        </tr>
    </thead>
    <tbody> 
        {foreach $personages as $personage}
            <tr style="color:#C1DD94">
                <td class = "border border-black fst-italic">{$personage->nombre_p}</td> 
                <td class = "border border-black fst-italic">{$personage->apellido}</td>
                <td class = "border border-black fst-italic">{$personage->clase}</td> 
                <td class = "border border-black fst-italic">{$personage->nombre_r}</td>
                <td class = "border border-black"><a href='admin/personage/edit/{$personage->id_personaje}' type='button' class='btn btn-success ml-auto ms-3 me-3'>Editar</a><a href='admin/personage/delete/{$personage->id_personaje}' type='button' class='btn btn-danger ml-auto ms-3 me-3'>Borrar</a></td>
            </tr>
        {/foreach} 
    </tbody>
</table>

{include file="footer.tpl"}