<?php
/* Smarty version 4.2.1, created on 2022-09-30 17:45:39
  from 'C:\xampp\htdocs\main\TPE-WEB2\templates\showAdmPersonage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63370f23873001_02774916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0edd6ac7c89517656ea2584450c877e5c22d3ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\main\\TPE-WEB2\\templates\\showAdmPersonage.tpl',
      1 => 1664552729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63370f23873001_02774916 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<form action='admin/personage/add' method='POST' class='my-4'>
    <h1>Agregar Personaje</h1>
    <div class='row'>
        <div class='col-3'>
            <div class='form-group'>
                <label>Nombre</label>
                <input name='name' type='text' class='form-control'>
            </div>
        </div>
        
        <div class='col-3'>
            <div class='form-group'>
                <label>Apellido</label>
                <input name='lastname' type='text' class='form-control'>
            </div>
        </div>

        <div class='col-3'>
            <div class='form-group'>
                <label>Clase</label>
                <input name='class' type='text' class='form-control'>
            </div>
        </div>

        <div class='col-3'>
            <div class='form-group'>
                <label>Raza</label>
                <select name='race' class='form-control'>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['races']->value, 'race');
$_smarty_tpl->tpl_vars['race']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['race']->value) {
$_smarty_tpl->tpl_vars['race']->do_else = false;
?> 
                    <option value="<?php echo $_smarty_tpl->tpl_vars['race']->value->id_raza;?>
"><?php echo $_smarty_tpl->tpl_vars['race']->value->nombre;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                </select>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Guardar</button>
</form>

<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personages']->value, 'personage');
$_smarty_tpl->tpl_vars['personage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['personage']->value) {
$_smarty_tpl->tpl_vars['personage']->do_else = false;
?> 
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> Nombre: <b><?php echo $_smarty_tpl->tpl_vars['personage']->value->nombre_p;?>
</b> - Apellido: <b><?php echo $_smarty_tpl->tpl_vars['personage']->value->apellido;?>
</b> - Clase: <b><?php echo $_smarty_tpl->tpl_vars['personage']->value->clase;?>
 </b> </span>
            <a href='admin/personage/delete/<?php echo $_smarty_tpl->tpl_vars['personage']->value->id_personaje;?>
' type='button' class='btn btn-danger ml-auto'>Borrar</a>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
