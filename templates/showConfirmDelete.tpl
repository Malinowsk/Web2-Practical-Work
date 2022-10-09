{include file="header.tpl"}

<div class="col-sm-12">

    <div class="table-responsive ">

        <table class="table container text-center border border-black">
            <thead class="table-dark border border-black">
                <tr>
                    <th class="col-2 border border-black" scope="col">Nombre</th>
                    <th class="col-2 border border-black" scope="col">Apellido</th>
                    <th class="col-2 border border-black" scope="col">Clase</th>
                </tr>
            </thead>
            <tbody>

                {foreach $personages as $personage} 
                    <tr style="color:#C1DD94">
                        <td class = "border border-black fst-italic">{$personage->nombre_p}</td> 
                        <td class = "border border-black fst-italic">{$personage->apellido}</td>
                        <td class = "border border-black fst-italic">{$personage->clase}</td>
                    </tr>
                {/foreach} 
            </tbody>
        </table>
    </div>

    <h3>Estos personajes pertenecen a la tipo de raza que desea borrar, si confirma la accion todos los personajes se borran junto con la raza. </h3>

    <div>
    <a href='admin-races/delete/confirm/{$personage->id_raza}' type='button' class='btn btn-danger ml-auto ms-3 me-3'>Confirmar</a>

    <a href='admin-races' type='button' class='btn btn-primary ml-auto ms-3 me-3'>Cancelar</a>
    </div>

</div>

{include file="footer.tpl"}