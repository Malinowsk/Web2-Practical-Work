 {include file="header.tpl"}
    
<h2>Lista de Personaje</h2>
<div class="table-responsive ">

    <table class="table container text-center">
        <thead class="table-dark">
            <tr>
                <th >Nombre</th>
                <th >Apellido</th>
                <th >Clase</th>
                <th >Raza</th>
                <th >Accion</th>
            </tr>
        </thead>
        <tbody>

            {foreach $personages as $personage} 
                <tr>
                    <td>{$personage->nombre_p}</td> 
                    <td>{$personage->apellido}</td>
                    <td>{$personage->clase}</td>
                    <td>{$personage->nombre_r}</td> 
                    <td><a href='public/personage/{$personage->id_personaje}' type='button' class='btn btn-primary ml-auto'>Detalle</a></td>
                </tr>
            {/foreach} 
        </tbody>
    </table>
</div>

{if $detail != null}
    <h2>Detalle de Personaje</h2>
    <li class='list-group-item d-flex justify-content-between align-items-center'>
        <span> Nombre: <b>{$detail[0]->nombre_p}</b> - Apellido: <b>{$detail[0]->apellido}</b> - Clase: <b>{$detail[0]->clase}</b> - Raza: <b>{$detail[0]->nombre_r}</b> - Faccion: <b>{$detail[0]->faccion}</b>  </span>
    </li>
{/if}

{include file="footer.tpl"}