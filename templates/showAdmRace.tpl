{include file="header.tpl"}

{include file="form_alta.tpl"} 

<ul class="list-group">
    {foreach $races as $race}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> Nombre: <b>{$race->nombre}</b> - faccion: <b>{$race->faccion}</b> </span>
            <a href='admin/race/delete/{$race->id_raza}' type='button' class='btn btn-danger ml-auto'>Borrar</a>
        </li>
    {/foreach} 
</ul>

{include file="footer.tpl"}