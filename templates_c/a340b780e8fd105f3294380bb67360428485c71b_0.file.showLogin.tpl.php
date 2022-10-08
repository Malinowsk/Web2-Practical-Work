<?php
/* Smarty version 4.2.1, created on 2022-10-07 18:45:02
  from 'C:\xampp\htdocs\main\TPE-WEB2\templates\showLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6340578e224679_60301368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a340b780e8fd105f3294380bb67360428485c71b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\main\\TPE-WEB2\\templates\\showLogin.tpl',
      1 => 1665160798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:login.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6340578e224679_60301368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 

<?php $_smarty_tpl->_subTemplateRender("file:login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
?> 

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
