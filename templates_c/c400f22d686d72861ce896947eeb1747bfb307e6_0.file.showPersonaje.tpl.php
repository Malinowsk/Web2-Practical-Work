<?php
/* Smarty version 4.2.1, created on 2022-09-30 03:46:01
  from 'C:\xampp\htdocs\main\TPE-WEB2\templates\showPersonaje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63364a59091455_75985022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c400f22d686d72861ce896947eeb1747bfb307e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\main\\TPE-WEB2\\templates\\showPersonaje.tpl',
      1 => 1664502356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63364a59091455_75985022 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
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

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personages']->value, 'personage');
$_smarty_tpl->tpl_vars['personage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['personage']->value) {
$_smarty_tpl->tpl_vars['personage']->do_else = false;
?> 
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['personage']->value->nombre;?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['personage']->value->apellido;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['personage']->value->clase;?>
</td>
                    <td><a href='public/personage/<?php echo $_smarty_tpl->tpl_vars['personage']->value->id_personaje;?>
' type='button' class='btn btn-primary ml-auto'>Detalle</a></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
        </tbody>
    </table>
</div>

<?php if ($_smarty_tpl->tpl_vars['detalle']->value != null) {?>
    <h2>Detalle de Personaje</h2>
    <li class='list-group-item d-flex justify-content-between align-items-center'>
        <span> Nombre: <b><?php echo $_smarty_tpl->tpl_vars['detalle']->value[0]->nombre;?>
</b> - Apellido: <b><?php echo $_smarty_tpl->tpl_vars['personage']->value->apellido;?>
</b> - Clase: <b><?php echo $_smarty_tpl->tpl_vars['personage']->value->clase;?>
</b>  </span>
    </li>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
