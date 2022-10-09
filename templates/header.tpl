<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="https://i.pinimg.com/originals/0f/05/2e/0f052e804604670ac46e613b85a99017.jpg">
    <title>Warcraft</title>
</head>
<body style="background-color: #14454E ; color:#648C93">
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #052D34">
            <div class="container-fluid">
              <a class="navbar-brand" style="color:white" href="">Warcraft</a>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item ">
                    <a class="nav-link text-decoration-underline" aria-current="page" style="color:white" href="personages">Personajes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-decoration-underline" aria-current="page" style="color:white" href="races">Razas</a>
                  </li>
                  {if isset($smarty.session.USER_ID)}
                
                    <li class="nav-item">
                      <a class="nav-link text-decoration-underline" aria-current="page" style="color:white" href="admin-personages">Administrar Personajes</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-decoration-underline" aria-current="page" style="color:white" href="admin-races">Administrar Razas</a>
                    </li>
                  
                  {/if}
                </ul>
              </div>
            </div>
           {* {if isset($loggedIn) and $loggedIn == true} *}
            {if isset($smarty.session.USER_ID)}
              <div>
              <a href='logout' class="btn btn-dark text-decoration-none" style="margin-right: 10px; color: #0d6efd">Salir</a>
              </div>
            {else} 
              <div style="width:150px">
                <a href='login' class="btn btn-dark text-decoration-none" style="margin-right: 10px; color: #0d6efd">Iniciar sesión</a>
              </div>
            {/if}
        </nav>
    </header>

    <!-- inicio main container -->
    <main class="container">

    
