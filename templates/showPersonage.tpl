 {include file="header.tpl"}
    
<h2 class='my-4'>Lista de Personajes</h2>
<div class="table-responsive ">

    <table class="table container text-center border border-black">
        <thead class="table-dark border border-black">
            <tr>
                <th class="border border-black">Nombre</th>
                <th class="border border-black">Apellido</th>
                <th class="border border-black">Clase</th>
                <th class="border border-black">Raza</th>
                <th class="border border-black">Accion</th>
            </tr>
        </thead>
        <tbody>

            {foreach $personages as $personage} 
                <tr style="color:#C1DD94">
                    <td class="border border-black fst-italic">{$personage->nombre_p}</td> 
                    <td class="border border-black fst-italic">{$personage->apellido}</td>
                    <td class="border border-black fst-italic">{$personage->clase}</td>
                    <td class="border border-black fst-italic">{$personage->nombre_r}</td> 
                    <td class="border border-black fst-italic"><a href='public/personage/{$personage->id_personaje}' type='button' class='btn btn-primary ml-auto'>Detalle</a></td>
                </tr>
            {/foreach} 
        </tbody>
    </table>
</div>

{if $detail != null}
    <h2 class='my-4'>Detalle de Personaje</h2>
    <li class='list-group-item d-flex justify-content-between align-items-center'>
        <span> Nombre: <b>{$detail[0]->nombre_p}</b> - Apellido: <b>{$detail[0]->apellido}</b> - Clase: <b>{$detail[0]->clase}</b> - Raza: <b>{$detail[0]->nombre_r}</b> - Faccion: <b>{$detail[0]->faccion}</b>  </span>
    </li>
{/if}

{include file="footer.tpl"}