<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/style.css') ?>">
  <link rel="shortcut icon" href="<?php echo base_url('/img/MYB_AZUL.png') ?>">
  <script src="https://kit.fontawesome.com/25a14f67bd.js" crossorigin="anonymous"></script>
  <title>MYB - Contato</title>
</head>


<body class="bgcontato">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
      <div class="container-fluid">

        <a class="navbar-brand text-white mx-4" href="<?php echo base_url('./Home/index') ?>"><img class="mx-3" src="<?php echo base_url('/img/MYBLOGOAZUL.png') ?>" height="70" alt="Logo myb"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSites">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ms-5" id="navbarSites">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <h5><a class="nav-link active text-white me-2" aria-current="page" href="<?php echo base_url('./Home/index') ?>">Home</a></h5>
            </li>
            <li class="nav-item">
              <h5><a class="nav-link text-white me-2" href="<?php echo base_url('./ContatoController/Contato') ?>">Contato</a></h5>
            </li>
            <li class="nav-item">
              <h5><a class="nav-link text-white me-2" href="<?php echo base_url('./CadastroController/Cadastro') ?>">Cadastro</a></h5>
            </li>
            <li class="nav-item">
              <a style="text-decoration: none" href="<?php echo base_url('./LoginController/Login') ?>">
                <div class="d-grid gap-2">
                  <button class="btn btn-info btn-lg me-5 fw-bold" type="submit">Entrar</button>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- DESCONSIDERAR ESSA NAVBAR ESRATICA PAARA MARGEM -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">

        <a class="navbar-brand text-white mx-4" href="<?php echo base_url('./Home/index') ?>"><img class="mx-3" src="<?php echo base_url('/img/MYBLOGOAZUL.png') ?>" height="70" alt="Logo myb"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSites">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ms-5" id="navbarSites">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <h5><a class="nav-link active text-white me-2" aria-current="page" href="<?php echo base_url('./Home/index') ?>">Home</a></h5>
            </li>
            <li class="nav-item">
              <h5><a class="nav-link text-white me-2" href="<?php echo base_url('./ContatoController/Contato') ?>">Contato</a></h5>
            </li>
            <li class="nav-item">
              <h5><a class="nav-link text-white me-2" href="<?php echo base_url('./CadastroController/Cadastro') ?>">Cadastro</a></h5>
            </li>
            <li class="nav-item">
              <a style="text-decoration: none" href="<?php echo base_url('./LoginController/Login') ?>">
                <div class="d-grid gap-2">
                  <button class="btn btn-info btn-lg me-5 fw-bold" type="submit">Entrar</button>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- FIM DA NAV BAR -->
  </header>
  <div class="container">
    <div class="row">
    <?php if ($msg != '') { ?>
          <div class="alert alert-success mt-2" role="alert">
            <i class="fas fa-check-circle" style="font-size: 25px; margin-right: 5px;"></i><?php echo ($msg) ?>
          </div>
        <?php } ?>
      <div class="col-12 col-sm-12 col-md-7 col-lg-7" style="background-color: rgba(0, 247, 255, 0.8);">
        <h1 class="contato mt-5 ms-4">Tem alguma dúvida?</h1>
        <h2 class="contato mt-3 ms-4">Mande uma mensagem pra gente!</h2>
        <form method="Post">
          <input hidden type="text" name="cadMensagem" id="cadMensagem" value="1">
          <div class="row g-3 mt-3 ms-3 me-3">
            <div class="col">
              <label for="nome" class="form-label fw-bolder fs-5">Nome:</label>
              <input type="text" required name="nome" id="nome" class="form-control" placeholder="" aria-label="First name">
            </div>
            <div class="col">
              <label for="email" class="form-label fw-bolder fs-5">E-mail:</label>
              <input type="email" required name="email" id="email" class="form-control" placeholder="" aria-label="Last name">
            </div>
          </div>
          <div class="row mt-4 ms-3 me-3">
            <div class="col">
              <label for="msg" class="form-label fw-bolder fs-5">Mensagem:</label>
              <textarea class="form-control" required id="msg" name="msg" rows="4"></textarea>
            </div>
          </div>
          <div class="row mt-4 ms-3 me-3">
            <div class="d-grid gap-2 pb-4">
              <button type="submit" class="btn btn-dark mt-2 fw-bolder fs-5 rounded-pill">Enviar Mensagem</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-12 col-sm-12 col-md-5 col-lg-5 my-auto text-center">
        <img src="<?php echo base_url('/img/email.png') ?>" class="message" width="200" alt="message">
      </div>
    </div>
    <br />
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>