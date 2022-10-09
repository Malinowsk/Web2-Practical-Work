<?php
/* Smarty version 4.2.1, created on 2022-10-09 19:42:29
  from 'C:\xampp\htdocs\main\TPE-WEB2\templates\showRace.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63430805df5193_29254334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6319da744167c2c231da5d0b6c711b3c2f2ea490' => 
    array (
      0 => 'C:\\xampp\\htdocs\\main\\TPE-WEB2\\templates\\showRace.tpl',
      1 => 1665337163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63430805df5193_29254334 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
     
<div class="row g-2">
    <div class="col-sm-6">

        <h2 class='my-4'>Lista de Razas</h2>

        <div class="table-responsive ">

            <table class="table container text-center border border-black">
                <thead  class="table-dark">
                    <tr>
                        <th class="border border-black" scope="col">Nombre</th>
                        <th class="border border-black" scope="col">Faccion</th>
                        <th class="border border-black" scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['races']->value, 'race');
$_smarty_tpl->tpl_vars['race']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['race']->value) {
$_smarty_tpl->tpl_vars['race']->do_else = false;
?> 
                        <tr class="border border-black" style="color:#C1DD94">
                            <td class="border border-black fst-italic"><?php echo $_smarty_tpl->tpl_vars['race']->value->nombre;?>
</td> 
                            <td class="border border-black fst-italic"><?php echo $_smarty_tpl->tpl_vars['race']->value->faccion;?>
</td>
                            <td class="border border-black fst-italic"><a href='races/<?php echo $_smarty_tpl->tpl_vars['race']->value->id_raza;?>
' type='button' class='btn btn-primary ml-auto'>Detalle</a></td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-sm-6">
        <?php if ((isset($_smarty_tpl->tpl_vars['details']->value))) {?>

            <?php if (!empty($_smarty_tpl->tpl_vars['details']->value)) {?>
                
                <h2 class='my-4'>Personajes de la raza: <?php echo $_smarty_tpl->tpl_vars['details']->value[0]->nombre_r;?>
</h2>

                <div class="table-responsive ">

                    <table class="table container text-center border border-black">
                        <thead  class="table-dark border border-black">
                            <tr>
                                <th class="border border-black" scope="col">Nombre</th>
                                <th class="border border-black" scope="col">Apellido</th>
                                <th class="border border-black" scope="col">Clase</th>
                                <th class="border border-black" scope="col">Raza</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['details']->value, 'detail');
$_smarty_tpl->tpl_vars['detail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['detail']->value) {
$_smarty_tpl->tpl_vars['detail']->do_else = false;
?> 
                                <tr style="color:#C1DD94" >
                                    <td class="border border-black"><?php echo $_smarty_tpl->tpl_vars['detail']->value->nombre_p;?>
</td> 
                                    <td class="border border-black"><?php echo $_smarty_tpl->tpl_vars['detail']->value->apellido;?>
</td>
                                    <td class="border border-black"><?php echo $_smarty_tpl->tpl_vars['detail']->value->clase;?>
</td>
                                    <td class="border border-black"><?php echo $_smarty_tpl->tpl_vars['detail']->value->nombre_r;?>
</td> 
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                        </tbody>
                    </table>
                </div>
            <?php } else { ?>
                <h2 class='my-4 mt-4 ms-4'>No existe cargado personajes de esa raza</h2>
            <?php }?>
        <?php }?>
    </div>
</div>

    
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
