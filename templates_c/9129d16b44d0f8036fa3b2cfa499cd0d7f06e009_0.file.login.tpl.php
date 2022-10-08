<?php
/* Smarty version 4.2.1, created on 2022-10-08 20:05:33
  from 'C:\xampp\htdocs\main\TPE-WEB2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6341bbed3d29d6_19713438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9129d16b44d0f8036fa3b2cfa499cd0d7f06e009' => 
    array (
      0 => 'C:\\xampp\\htdocs\\main\\TPE-WEB2\\templates\\login.tpl',
      1 => 1665252328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6341bbed3d29d6_19713438 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-80">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <form action="public/validate" method="POST" class="mb-md-5 mt-md-4">

                            <h2 class="fw-bold mb-2 text-uppercase">Iniciar sesión</h2>
                            <p class="text-white-50 mb-5">¡Por favor, introduce tu email y contraseña!</p>

                            <div class="form-outline form-white mb-4">
                                <input name='email' type="email" id="typeEmailX" class="form-control form-control-lg" />
                                <label class="form-label" for="typeEmailX">Email</label>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input name='password' type="password" id="typePasswordX" class="form-control form-control-lg" />
                                <label class="form-label" for="typePasswordX">Contraseña</label>
                            </div>

                            <button type="submit" class="btn btn-warning mt-3"> Iniciar sesión </button>
                            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
                                <div class="alert alert-danger mt-3">
                                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                                </div>
                            <?php }?>
                    
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section><?php }
}
