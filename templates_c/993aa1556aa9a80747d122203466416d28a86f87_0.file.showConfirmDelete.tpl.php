<?php
/* Smarty version 4.2.1, created on 2022-10-02 05:22:46
  from 'C:\xampp\htdocs\main\TPE-WEB2\templates\showConfirmDelete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633904068510b6_25550993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '993aa1556aa9a80747d122203466416d28a86f87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\main\\TPE-WEB2\\templates\\showConfirmDelete.tpl',
      1 => 1664680964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633904068510b6_25550993 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personages']->value, 'personage');
$_smarty_tpl->tpl_vars['personage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['personage']->value) {
$_smarty_tpl->tpl_vars['personage']->do_else = false;
?> 
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['personage']->value->nombre_p;?>
</td> 
                        <td><?php echo $_smarty_tpl->tpl_vars['personage']->value->apellido;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['personage']->value->clase;?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            </tbody>
        </table>
    </div>

    <h3>Estos personajes pertenecen a la tipo de raza que desea borrar, si confirma la accion todos los personajes se borran junto con la raza. </h3>

    <div>
    <a href='admin/race/delete/confirm/<?php echo $_smarty_tpl->tpl_vars['personage']->value->id_raza;?>
' type='button' class='btn btn-danger ml-auto ms-3 me-3'>Confirmar</a>

    <a href='admin/race' type='button' class='btn btn-primary ml-auto ms-3 me-3'>Cancelar</a>
    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}