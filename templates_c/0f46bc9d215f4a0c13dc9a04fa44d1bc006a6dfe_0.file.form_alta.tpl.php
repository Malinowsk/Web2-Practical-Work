<?php
/* Smarty version 4.2.1, created on 2022-09-30 18:19:28
  from 'C:\xampp\htdocs\main\TPE-WEB2\templates\form_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63371710dba280_57642674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f46bc9d215f4a0c13dc9a04fa44d1bc006a6dfe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\main\\TPE-WEB2\\templates\\form_alta.tpl',
      1 => 1664136210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63371710dba280_57642674 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- formulario de alta de tarea -->
<form action="admin/race/add" method="POST" class="my-4">
    <h1>Agregar Raza</h1>
    <div class="row">
        <div class="col-5">
            <div class="form-group">
                <label>Nombre</label>
                <input name="name" type="text" class="form-control">
            </div>
        </div>
        
        <div class="col-5">
            <div class="form-group">
                <label>Faccion</label>
                <input name="faccion" type="text" class="form-control">
            </div>
        </div>
    
    </div>

    <button type="submit" class="btn btn-primary mt-3">Guardar</button>
</form><?php }
}
