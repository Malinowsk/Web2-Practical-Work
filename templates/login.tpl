<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-80">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <form action="validate" method="POST" class="mb-md-5 mt-md-4">

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
                            {if $error} 
                                <div class="alert alert-danger mt-3">
                                    {$error}
                                </div>
                            {/if}
                    
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>