<?php
/* Smarty version 4.2.1, created on 2022-10-09 19:44:47
  from 'C:\xampp\htdocs\main\TPE-WEB2\templates\default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6343088fb68586_40678983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4089ee1e327e2eedcc0e2573500659c6d93ba2f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\main\\TPE-WEB2\\templates\\default.tpl',
      1 => 1665336182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6343088fb68586_40678983 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center">
            <h1 class="display-1 fw-bold">404</h1>
            <p class="fs-3"> <span class="text-danger">Opps!</span> Página no encontrada.</p>
            <p class="lead">
                La página que buscas no existe.
            </p>
            <a href="" class="btn btn-dark text-decoration-none" style="color: #0d6efd">Inicio</a>
        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
