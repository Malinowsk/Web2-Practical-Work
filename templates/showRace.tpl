{include file="header.tpl"} 
     
<div class="row g-2">
    <div class="col-sm-6">

        <h2 class='my-4'>Lista de Razas</h2>

        <div class="table-responsive ">

            <table class="table container text-center border border-black">
                <thead  class="table-dark">
                    <tr>
                        <th class="border border-black" scope="col">Nombre</th>
                        <th class="border border-black" scope="col">Faccion</th>
                        <th class="border border-black" scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>

                    {foreach $races as $race} 
                        <tr class="border border-black" style="color:#C1DD94">
                            <td class="border border-black fst-italic">{$race->nombre}</td> 
                            <td class="border border-black fst-italic">{$race->faccion}</td>
                            <td class="border border-black fst-italic"><a href='public/race/{$race->id_raza}' type='button' class='btn btn-primary ml-auto'>Detalle</a></td>
                        </tr>
                    {/foreach} 
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-sm-6">
        {if isset($details)}

            {if !empty($details)}
                
                <h2 class='my-4'>Lista de Personaje de la raza : {$details[0]->nombre_r}</h2>

                <div class="table-responsive ">

                    <table class="table container text-center border border-black">
                        <thead  class="table-dark border border-black">
                            <tr>
                                <th class="border border-black" scope="col">Nombre</th>
                                <th class="border border-black" scope="col">Apellido</th>
                                <th class="border border-black" scope="col">Clase</th>
                                <th class="border border-black" scope="col">Raza</th>
                            </tr>
                        </thead>
                        <tbody>

                            {foreach $details as $detail} 
                                <tr style="color:#C1DD94" >
                                    <td class="border border-black">{$detail->nombre_p}</td> 
                                    <td class="border border-black">{$detail->apellido}</td>
                                    <td class="border border-black">{$detail->clase}</td>
                                    <td class="border border-black">{$detail->nombre_r}</td> 
                                </tr>
                            {/foreach} 
                        </tbody>
                    </table>
                </div>
            {else}
                <h2 class='my-4 mt-4 ms-4'>No existe cargado personajes de esa raza</h2>
            {/if}
        {/if}
    </div>
</div>

    
{include file="footer.tpl"}