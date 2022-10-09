{include file="header.tpl"}

{include file="form_race.tpl"} 


<table class="table container text-center border border-black">
    <thead class="table-dark border border-black">
        <tr>
            <th class="col-4 border border-black">Nombre</th>
            <th class="col-4 border border-black">Faccion</th>
            <th class="col-2 border border-black">Accion</th>
        </tr>
    </thead>
    <tbody>
        {foreach $races as $race}
            <tr style="color:#C1DD94">
                <td class = "border border-black fst-italic">{$race->nombre}</td> 
                <td class = "border border-black fst-italic">{$race->faccion}</td>
                <td class = "border border-black"><a href='admin-races/edit/{$race->id_raza}' type='button' class='btn btn-success ml-auto ms-3 me-3'>Editar</a><a href='admin-races/delete/{$race->id_raza}' type='button' class='btn btn-danger ml-auto ms-3 me-3'>Borrar</a></td>
            </tr>
        {/foreach} 
    </tbody>
</table>

{include file="footer.tpl"}