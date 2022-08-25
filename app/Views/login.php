<!doctype html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="<?php echo base_url('img/MYB_AZUL.png')?>">
    <title>MYB - Login</title>
    <style>
      
    body{
        background-image: url(<?php echo base_url('img/predios2.png')?>);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    * {
        padding: 0;
        margin: 0;  
        box-sizing: border-box;
      }

    .row {
      background: rgba(0, 247, 255, 0.76);
      border-radius: 30px;
      box-shadow: 12px 12px 12px ;
     }
    
    .btnlogin{
       border:none;
       outline:none;
       height: 45px;
       background-color: black;
       color:white;
       border-radius:4px;
       font-weight:bold;
    }

    h1.login{
        font-weight: 700;
        font-size: 300%;
        color: white;
        text-shadow: -1px 0px 4px rgb(58, 58, 58);
    }
    h4.login{
        font-weight: 500;
    }
    p{
      font-weight:bold;
    }

    a{
      text-decoration: none;
      color: aliceblue;
      font-size: 20px;
      font-weight: 600;
      text-shadow: -1px 0px 4px rgb(58, 58, 58);
    }

    a:hover{
      color: rgb(243, 241, 135);
    }
    </style>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
        <div class="container-fluid">

            <a class="navbar-brand text-white mx-4" href="<?php echo base_url('./Home/index') ?>"><img class="mx-3" src="<?php echo base_url('img/MYBLOGOAZUL.png')?>" height="70" alt="Logo myb"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSites">
              <span class="navbar-toggler-icon"></span>
            </button>
            
          <div class="collapse navbar-collapse ms-5" id="navbarSites">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <h5><a class="nav-link active text-white me-2" aria-current="page" href="<?php echo base_url('./Home/index') ?>">Home</a></h5>
              </li>
              <li class="nav-item">
                <h5><a class="nav-link text-white me-2" href="<?php echo base_url('./ContatoController/Contato')?>">Contato</a></h5>
              </li>
              <li class="nav-item">
                  <a style="text-decoration: none" href="<?php echo base_url('./CadastroController/Cadastro') ?>">
                    <div class="d-grid gap-2">
                      <button class="btn btn-info btn-lg me-5 fw-bold" type="submit">Cadastrar-se</button>
                    </div>
                  </a>     
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <br>
    <br>
    <br>
    <br>
    
   <section class="form my-5 mx-2">
    <div class="container">
       <div class="row">
          <div class="col-lg-5">
           <img src="<?php echo base_url('img/loja_avatar.png')?>" class="img-fluid p-3" height="300" alt="">
          </div>
           <div class="col-lg-7 px-5">
             <h1 class="login font-weight-bold py-2 mt-4">Login Empresa</h1>
             <h4 class="login">Entre na sua conta:</h4>
            <form>
               <div class="form-row">
                  <div class="col-lg-10">
                    <label for="texto" class="form-label fs-6">E-mail</label>
                     <input type="text" name="email" id="email" placeholder="Digite seu Email" class="form-control p-2">
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-10">
                    <label for="senha" class="form-label fs-6 mt-2">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="************" class="form-control p-2">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-10">
                  <a href="<?php echo base_url('./DashboardController/Dashboard')?>">
                    <div class="d-grid gap-2">
                      <button type="button" class="btn btn-dark btnlogin mt-4">Entrar</button>
                    </div>
                  </a>
                  </div>
                </div>
                <div class="form-row mt-3 text-center">
                  <div class="col-lg-10">
                  <a class="me-5 mb-4" href="#">Esqueci a senha</a><a class="ms-5 mb-4" href="<?php echo base_url('./CadastroController/Cadastro')?>">Registre-se</a>
                  </div>
                </div>  
            </form>
            </div>
          </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   
  </body>
</html>