<?php
/* Smarty version 4.2.1, created on 2022-10-09 19:54:02
  from 'C:\xampp\htdocs\main\TPE-WEB2\templates\showAdmRace.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63430aba6f92e8_34935574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9700aea2bd6990712e8a0addbf653480393e737b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\main\\TPE-WEB2\\templates\\showAdmRace.tpl',
      1 => 1665336960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_race.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63430aba6f92e8_34935574 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:form_race.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 


<table class="table container text-center border border-black">
    <thead class="table-dark border border-black">
        <tr>
            <th class="col-4 border border-black">Nombre</th>
            <th class="col-4 border border-black">Faccion</th>
            <th class="col-2 border border-black">Accion</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['races']->value, 'race');
$_smarty_tpl->tpl_vars['race']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['race']->value) {
$_smarty_tpl->tpl_vars['race']->do_else = false;
?>
            <tr style="color:#C1DD94">
                <td class = "border border-black fst-italic"><?php echo $_smarty_tpl->tpl_vars['race']->value->nombre;?>
</td> 
                <td class = "border border-black fst-italic"><?php echo $_smarty_tpl->tpl_vars['race']->value->faccion;?>
</td>
                <td class = "border border-black"><a href='admin-races/edit/<?php echo $_smarty_tpl->tpl_vars['race']->value->id_raza;?>
' type='button' class='btn btn-success ml-auto ms-3 me-3'>Editar</a><a href='admin-races/delete/<?php echo $_smarty_tpl->tpl_vars['race']->value->id_raza;?>
' type='button' class='btn btn-danger ml-auto ms-3 me-3'>Borrar</a></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
    </tbody>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
