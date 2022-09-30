<?php
/* Smarty version 4.2.1, created on 2022-09-30 16:54:00
  from 'C:\xampp\htdocs\main\TPE-WEB2\templates\showRace.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63370308d98f29_10594424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6319da744167c2c231da5d0b6c711b3c2f2ea490' => 
    array (
      0 => 'C:\\xampp\\htdocs\\main\\TPE-WEB2\\templates\\showRace.tpl',
      1 => 1664549638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63370308d98f29_10594424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
     

<div class="row g-2">
    <div class="col-sm-6">

        <h1>Lista de Razas</h1>

        <div class="table-responsive ">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Faccion</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['races']->value, 'race');
$_smarty_tpl->tpl_vars['race']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['race']->value) {
$_smarty_tpl->tpl_vars['race']->do_else = false;
?> 
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['race']->value->nombre;?>
</td> 
                            <td><?php echo $_smarty_tpl->tpl_vars['race']->value->faccion;?>
</td>
                            <td><a href='public/race/<?php echo $_smarty_tpl->tpl_vars['race']->value->id_raza;?>
' type='button' class='btn btn-primary ml-auto'>Detalle</a></td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                </tbody>
            </table>
        </div>
    </div>


    <?php if ($_smarty_tpl->tpl_vars['details']->value != null) {?>
        <div class="col-sm-6">
            <h2>Lista de Personaje de la raza : <?php echo $_smarty_tpl->tpl_vars['details']->value[0]->nombre_r;?>
</h2>
            
            <div class="table-responsive ">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Clase</th>
                            <th scope="col">Raza</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['details']->value, 'detail');
$_smarty_tpl->tpl_vars['detail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['detail']->value) {
$_smarty_tpl->tpl_vars['detail']->do_else = false;
?> 
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['detail']->value->nombre_p;?>
</td> 
                                <td><?php echo $_smarty_tpl->tpl_vars['detail']->value->apellido;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['detail']->value->clase;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['detail']->value->nombre_r;?>
</td> 
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                    </tbody>
                </table>
            </div>
        </div>
    <?php }?>
</div>

    
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
