<?php
/* Smarty version 4.2.1, created on 2022-10-02 21:59:47
  from 'C:\xampp\htdocs\main\TPE-WEB2\templates\showAdmPersonage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6339edb3d934c9_32452077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0edd6ac7c89517656ea2584450c877e5c22d3ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\main\\TPE-WEB2\\templates\\showAdmPersonage.tpl',
      1 => 1664740784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_personage.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6339edb3d934c9_32452077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<?php $_smarty_tpl->_subTemplateRender("file:form_personage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
?>

<table class="table container text-center border border-black">
    <thead class="table-dark border border-black">
        <tr>
            <th class="col-2 border border-black">Nombre</th>
            <th class="col-2 border border-black">Apellido</th>
            <th class="col-2 border border-black">Clase</th>
            <th class="col-2 border border-black">Raza</th>
            <th class="col-2 border border-black">Acciones</th>
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
                <td class = "border border-black fst-italic"><?php echo $_smarty_tpl->tpl_vars['personage']->value->nombre_p;?>
</td> 
                <td class = "border border-black fst-italic"><?php echo $_smarty_tpl->tpl_vars['personage']->value->apellido;?>
</td>
                <td class = "border border-black fst-italic"><?php echo $_smarty_tpl->tpl_vars['personage']->value->clase;?>
</td> 
                <td class = "border border-black fst-italic"><?php echo $_smarty_tpl->tpl_vars['personage']->value->nombre_r;?>
</td>
                <td class = "border border-black"><a href='admin/personage/edit/<?php echo $_smarty_tpl->tpl_vars['personage']->value->id_personaje;?>
' type='button' class='btn btn-success ml-auto ms-3 me-3'>Editar</a><a href='admin/personage/delete/<?php echo $_smarty_tpl->tpl_vars['personage']->value->id_personaje;?>
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
