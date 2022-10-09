<?php
/* Smarty version 4.2.1, created on 2022-10-09 19:56:20
  from 'C:\xampp\htdocs\main\TPE-WEB2\templates\form_race.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63430b44990557_89181577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dba0b3875961d28891f91d744adebb6f272bd332' => 
    array (
      0 => 'C:\\xampp\\htdocs\\main\\TPE-WEB2\\templates\\form_race.tpl',
      1 => 1665338119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63430b44990557_89181577 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- formulario de alta de tarea -->
<form action= <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?> "admin-races/edit/confirm/<?php echo $_smarty_tpl->tpl_vars['edit']->value[0]->id_raza;?>
" <?php } else { ?> "admin-races/add" <?php }?> method="POST" class="my-4">
    
    <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?> <h2>Editar Raza</h2> <?php } else { ?> <h2>Agregar Raza</h2> <?php }?>
        
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
    
    <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?>
        <button type="button" class="btn btn-warning mt-3 ms-3"> <a href='admin-races' class="text-decoration-none text-dark">Cancelar</a> </button>
    <?php }?>

</form>

<?php }
}
