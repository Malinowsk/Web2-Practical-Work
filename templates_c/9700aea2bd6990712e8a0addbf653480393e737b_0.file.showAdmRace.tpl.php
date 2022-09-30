<?php
/* Smarty version 4.2.1, created on 2022-09-30 18:22:52
  from 'C:\xampp\htdocs\main\TPE-WEB2\templates\showAdmRace.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633717dc737ef6_22256117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9700aea2bd6990712e8a0addbf653480393e737b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\main\\TPE-WEB2\\templates\\showAdmRace.tpl',
      1 => 1664554968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_alta.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633717dc737ef6_22256117 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:form_alta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 

<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['races']->value, 'race');
$_smarty_tpl->tpl_vars['race']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['race']->value) {
$_smarty_tpl->tpl_vars['race']->do_else = false;
?>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> Nombre: <b><?php echo $_smarty_tpl->tpl_vars['race']->value->nombre;?>
</b> - faccion: <b><?php echo $_smarty_tpl->tpl_vars['race']->value->faccion;?>
</b> </span>
            <a href='admin/race/delete/<?php echo $_smarty_tpl->tpl_vars['race']->value->id_raza;?>
' type='button' class='btn btn-danger ml-auto'>Borrar</a>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
