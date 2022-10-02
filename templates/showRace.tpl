{include file="header.tpl"} 
     

<div class="row g-2">
    <div class="col-sm-6">

        <h2>Lista de Razas</h2>

        <div class="table-responsive ">

            <table class="table container text-center">
                <thead  class="table-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Faccion</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>

                    {foreach $races as $race} 
                        <tr>
                            <td>{$race->nombre}</td> 
                            <td>{$race->faccion}</td>
                            <td><a href='public/race/{$race->id_raza}' type='button' class='btn btn-primary ml-auto'>Detalle</a></td>
                        </tr>
                    {/foreach} 
                </tbody>
            </table>
        </div>
    </div>


    {if $details != null}
        <div class="col-sm-6">
            <h2>Lista de Personaje de la raza : {$details[0]->nombre_r}</h2>
            
            <div class="table-responsive ">

                <table class="table container text-center">
                    <thead  class="table-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Clase</th>
                            <th scope="col">Raza</th>
                        </tr>
                    </thead>
                    <tbody>

                        {foreach $details as $detail} 
                            <tr>
                                <td>{$detail->nombre_p}</td> 
                                <td>{$detail->apellido}</td>
                                <td>{$detail->clase}</td>
                                <td>{$detail->nombre_r}</td> 
                            </tr>
                        {/foreach} 
                    </tbody>
                </table>
            </div>
        </div>
    {/if}
</div>

    
{include file="footer.tpl"}