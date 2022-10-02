<?php
/* Smarty version 4.2.1, created on 2022-10-02 00:21:29
  from 'C:\xampp\htdocs\main\TPE-WEB2\templates\form_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6338bd6902fc84_06489656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9855d50541d26f74f317f87fc54c89d40f789ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\main\\TPE-WEB2\\templates\\form_edit.tpl',
      1 => 1664662313,
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
function content_6338bd6902fc84_06489656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:form_alta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
?> 

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
