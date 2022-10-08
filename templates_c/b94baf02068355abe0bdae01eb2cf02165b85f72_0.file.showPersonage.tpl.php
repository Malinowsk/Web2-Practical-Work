<?php
/* Smarty version 4.2.1, created on 2022-10-08 19:58:39
  from 'C:\xampp\htdocs\main\TPE-WEB2\templates\showPersonage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6341ba4fd9f648_14117387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b94baf02068355abe0bdae01eb2cf02165b85f72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\main\\TPE-WEB2\\templates\\showPersonage.tpl',
      1 => 1665251917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6341ba4fd9f648_14117387 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
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

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personages']->value, 'personage');
$_smarty_tpl->tpl_vars['personage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['personage']->value) {
$_smarty_tpl->tpl_vars['personage']->do_else = false;
?> 
                <tr style="color:#C1DD94">
                    <td class="border border-black fst-italic"><?php echo $_smarty_tpl->tpl_vars['personage']->value->nombre_p;?>
</td> 
                    <td class="border border-black fst-italic"><?php echo $_smarty_tpl->tpl_vars['personage']->value->apellido;?>
</td>
                    <td class="border border-black fst-italic"><?php echo $_smarty_tpl->tpl_vars['personage']->value->clase;?>
</td>
                    <td class="border border-black fst-italic"><?php echo $_smarty_tpl->tpl_vars['personage']->value->nombre_r;?>
</td> 
                    <td class="border border-black fst-italic"><a href='public/personage/<?php echo $_smarty_tpl->tpl_vars['personage']->value->id_personaje;?>
' type='button' class='btn btn-primary ml-auto'>Detalle</a></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
        </tbody>
    </table>
</div>

<?php if ($_smarty_tpl->tpl_vars['detail']->value != null) {?>
    <h2 class='my-4'>Detalle de Personaje</h2>
    <li class='list-group-item d-flex justify-content-between align-items-center'>
        <span> Nombre: <b><?php echo $_smarty_tpl->tpl_vars['detail']->value[0]->nombre_p;?>
</b> - Apellido: <b><?php echo $_smarty_tpl->tpl_vars['detail']->value[0]->apellido;?>
</b> - Clase: <b><?php echo $_smarty_tpl->tpl_vars['detail']->value[0]->clase;?>
</b> - Raza: <b><?php echo $_smarty_tpl->tpl_vars['detail']->value[0]->nombre_r;?>
</b> - Faccion: <b><?php echo $_smarty_tpl->tpl_vars['detail']->value[0]->faccion;?>
</b>  </span>
    </li>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
