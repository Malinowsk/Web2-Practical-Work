<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Warcraft</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-secondary">
            <div class="container-fluid">
              <a class="navbar-brand" href="">Warcraft</a>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="public/personage">Personajes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="public/race">Razas</a>
                  </li>
                  {if isset($smarty.session.USER_ID)}
                
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="admin/personage">Administrar Personajes</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="admin/race"">Administrar Razas</a>
                    </li>
                  
                  {/if}
                </ul>
              </div>
            </div>
           {* {if isset($loggedIn) and $loggedIn == true} *}
            {if isset($smarty.session.USER_ID)}
              <div>
                <button type="button" class="btn btn-dark me-3"> <a href='public/logout' class="text-decoration-none text-while">Salir</a> </button>
              </div>
            {else} 
              <div>
                <button class="btn btn-dark me-3"> <a href='public/login' class="text-decoration-none text-while">Iniciar sesión</a> </button>
              </div>
            {/if}
        </nav>
    </header>

    <!-- inicio main container -->
    <main class="container">

    
