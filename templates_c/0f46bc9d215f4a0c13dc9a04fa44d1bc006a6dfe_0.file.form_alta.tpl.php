<?php
/* Smarty version 4.2.1, created on 2022-10-02 01:41:03
  from 'C:\xampp\htdocs\main\TPE-WEB2\templates\form_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6338d00f471828_66422443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f46bc9d215f4a0c13dc9a04fa44d1bc006a6dfe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\main\\TPE-WEB2\\templates\\form_alta.tpl',
      1 => 1664667661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6338d00f471828_66422443 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- formulario de alta de tarea -->
<form action= <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?> "admin/race/edit/confirm/<?php echo $_smarty_tpl->tpl_vars['edit']->value[0]->id_raza;?>
" <?php } else { ?> "admin/race/add" <?php }?> method="POST" class="my-4">
    <h2>Agregar Raza</h2>
    <div class="row text-center">
        <div class="col-6">
            <div class="form-group">
                <label class="fw-semibold">Nombre</label>
                <input name="name" type="text" class="form-control" <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?> value ="<?php echo $_smarty_tpl->tpl_vars['edit']->value[0]->nombre;?>
" <?php }?>>
            </div>
        </div>
        
        <div class="col-6">
            <div class="form-group">
                <label class="fw-semibold">Faccion</label>
                <input name="faccion" type="text" class="form-control" <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?> value ="<?php echo $_smarty_tpl->tpl_vars['edit']->value[0]->faccion;?>
" <?php }?>>
            </div>
        </div>
    
    </div>

    <button type="submit" class="btn btn-warning mt-3"><?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?> Aplicar <?php } else { ?> Guardar <?php }?></button>
</form>

<?php }
}
