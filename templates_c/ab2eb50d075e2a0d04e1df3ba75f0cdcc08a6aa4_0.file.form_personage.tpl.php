<?php
/* Smarty version 4.2.1, created on 2022-10-08 04:04:19
  from 'C:\xampp\htdocs\main\TPE-WEB2\templates\form_personage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6340daa3dc4634_52756885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab2eb50d075e2a0d04e1df3ba75f0cdcc08a6aa4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\main\\TPE-WEB2\\templates\\form_personage.tpl',
      1 => 1665194655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6340daa3dc4634_52756885 (Smarty_Internal_Template $_smarty_tpl) {
?><form action= <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?> "admin/personage/edit/confirm/<?php echo $_smarty_tpl->tpl_vars['edit']->value[0]->id_personaje;?>
" <?php } else { ?> "admin/personage/add" <?php }?> method='POST' class='my-4'>
    
    <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?> <h2>Editar Personaje</h2> <?php } else { ?> <h2>Agregar Personaje</h2><?php }?>
    
    <div class='row text-center'>
        <div class='col-3'>
            <div class='form-group'>
                <label>Nombre</label>
                <input name='name' type='text' class='form-control'  <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?> value ="<?php echo $_smarty_tpl->tpl_vars['edit']->value[0]->nombre;?>
" <?php }?>>
            </div>
        </div>
        
        <div class='col-3'>
            <div class='form-group'>
                <label>Apellido</label>
                <input name='lastname' type='text' class='form-control'  <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?> value ="<?php echo $_smarty_tpl->tpl_vars['edit']->value[0]->apellido;?>
" <?php }?>>
            </div>
        </div>
        
        <div class='col-3'>
            <div class='form-group'>
                <label>Clase</label>
                <input name='class' type='text' class='form-control'  <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?> value ="<?php echo $_smarty_tpl->tpl_vars['edit']->value[0]->clase;?>
" <?php }?>>
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
    
    <button type="submit" class="btn btn-warning mt-3"><?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?> Aplicar <?php } else { ?> Guardar <?php }?></button>
    <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?>
        <button type="button" class="btn btn-warning mt-3 ms-3"> <a href='admin/personage' class="text-decoration-none text-dark">Cancelar</a> </button>
    <?php }?>

</form><?php }
}
