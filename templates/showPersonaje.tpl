 {include file="header.tpl"}
    
<h1>Lista de Personaje</h1>
<div class="table-responsive ">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Clase</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>

            {foreach $personages as $personage} 
                <tr>
                    <td>{$personage->nombre}</td> 
                    <td>{$personage->apellido}</td>
                    <td>{$personage->clase}</td>
                    <td><a href='public/personage/{$personage->id_personaje}' type='button' class='btn btn-primary ml-auto'>Detalle</a></td>
                </tr>
            {/foreach} 
        </tbody>
    </table>
</div>

{if $detalle != null}
    <h2>Detalle de Personaje</h2>
    <li class='list-group-item d-flex justify-content-between align-items-center'>
        <span> Nombre: <b>{$detalle[0]->nombre}</b> - Apellido: <b>{$personage->apellido}</b> - Clase: <b>{$personage->clase}</b>  </span>
    </li>
{/if}

{include file="footer.tpl"}