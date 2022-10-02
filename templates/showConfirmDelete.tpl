{include file="header.tpl"}

<div class="col-sm-12">

    <div class="table-responsive ">

        <table class="table container text-center">
            <thead  class="table-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Clase</th>
                </tr>
            </thead>
            <tbody>

                {foreach $personages as $personage} 
                    <tr>
                        <td>{$personage->nombre_p}</td> 
                        <td>{$personage->apellido}</td>
                        <td>{$personage->clase}</td>
                    </tr>
                {/foreach} 
            </tbody>
        </table>
    </div>

    <h3>Estos personajes pertenecen a la tipo de raza que desea borrar, si confirma la accion todos los personajes se borran junto con la raza. </h3>

    <div>
    <a href='admin/race/delete/confirm/{$personage->id_raza}' type='button' class='btn btn-danger ml-auto ms-3 me-3'>Confirmar</a>

    <a href='admin/race' type='button' class='btn btn-primary ml-auto ms-3 me-3'>Cancelar</a>
    </div>

</div>

{include file="footer.tpl"}