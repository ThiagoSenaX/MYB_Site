<!DOCTYPE html>
<html lang="pt_br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/style.css') ?>">
  <link rel="shortcut icon" href="<?php echo base_url("img/MYB_AZUL.png")?>">
  <title>MYB - Manage Your Business</title>
  
</head>

<body>
  <header>
    <!-- Navbar fixa no inicio (desconsiderar)-->
        <nav class="navbar navbar-light bg-dark">
          <div class="container-fluid">
            <div>
              <a class="navbar-brand text-white mx-4 img-fluid" href="#"><img class="mx-3" src="<?php echo base_url("img/MYB_AZUL.png")?>" height="60"
                  alt="Logo myb"></a>
              </a>
            </div>
          </div>
        </nav>
    <!-- Navbar fixa no inicio (desconsiderar)-->


        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
          <div class="container-fluid">

              <a class="navbar-brand text-white mx-4" href="<?php echo base_url('./Home/index') ?>"><img class="mx-3" src="<?php echo base_url("img/MYBLOGOAZUL.png")?>" height="70" alt="Logo myb"></a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
              </button>
              
            <div class="collapse navbar-collapse ms-5" id="navbarSite">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <h5><a class="nav-link active text-white me-2" aria-current="page" href="#funcionalidades">Funcionalidades</a></h5>
                </li>
                <li class="nav-item">
                  <h5><a class="nav-link text-white me-2" href="#planos">Planos</a></h5>
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
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade mt-3 mt-sm-2 mt-md-2" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url("img/Capa_MYB.png")?>" class="d-block w-100 img-fluid" height="500" alt="site e app">
          <div class="carousel-caption d-none d-md-block">
            <p style="font-size: 20px; text-shadow: -1px 0px 10px black;">Tenha seu próprio Aplicativo e Site com a cara do seu negócio!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url("img/gerencie_ps.png")?>" class="d-block w-100 img-fluid" height="500" alt="gerencie">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="carousel">Melhore o Gerenciamento da Empresa</h1>
            <p style="font-size: 20px; text-shadow: -1px 0px 10px black;">Relatório de Vendas que geram dados e te ajudam na gestão do seu negócio.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url("img/celular.png")?>" class="d-block w-100 img-fluid" height="500" alt="automatize">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="carousel">Automatize Suas Vendas</h1>
            <p style="font-size: 20px; text-shadow: -1px 0px 10px black;">Facilidade para receber pedidos, e praticidade para seus clientes.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </header>
  <main>
    
    <div class="container">
      <div class="row mt-4 align-items-center">
        <div class="col-sm-12 col-md-5 col-lg-5 my-auto text-center">
          <img src="<?php echo base_url("img/AppDemo.png")?>" width="300" height="560" class="img-fluid">
        </div>
        
        <div class="col-sm-12 col-md-7 col-lg-7 my-auto mt-3">
          <h1 class="destaque text-center text-sm-center text-md-start text-lg-start">Tenha seu próprio Aplicativo e Site de Vendas!</h1><br />
          <h4 style="color: rgb(87, 87, 87); margin-top: 20px;"><img src="<?php echo base_url("img/check.png")?>" width="25" height="25"> Reduza Comissões</h4>
          <h4 style="color: rgb(87, 87, 87); margin-top: 20px;"><img src="<?php echo base_url("img/check.png")?>" width="25" height="25"> Automatize seu WhatsApp</h4>
          <h4 style="color: rgb(87, 87, 87); margin-top: 20px;"><img src="<?php echo base_url("img/check.png")?>" width="25" height="25"> Agilize a forma de Receber Pedidos</h4>
          <h4 style="color: rgb(87, 87, 87); margin-top: 20px;"><img src="<?php echo base_url("img/check.png")?>" width="25" height="25"> Tenha mais Visibilidade e Credibilidade</h4>
          
            <a href="<?php echo base_url('./ContatoController/Contato') ?>">
              <div class="d-grid gap-md-1 gap-lg-2 mt-5">
                <button class="btn btn-primary fs-5 fw-bold" type="button">Entrar em contato</button>
              </div>
            </a>
        </div>
        
      </div>
      <hr>
      <br/>


      
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6">
          <h1 class="destaque2 text-md-center text-lg-start">Gerencie seu Negócio</h1>
          <h3 class="sub text-md-center text-lg-start">Você no Controle Total!</h3>
          <h5 style="text-align: justify; font-size: 17px;" class="sub">Acompanhe os pedidos e relatórios em tempo real, pelo computador ou celular.
            Você pode fazer alterações nos produtos, promoções, área de entrega, e até enviar notificações push. 
            O sistema também conta com um DashBoard que gera relatórios e dados significativos que contribuem para uma boa gestão do seu negócio.
            Ou seja, é possível realizar qualquer alteração em seu aplicativo ou site em tempo real pelo painel web. </h5>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 mt-3 text-lg-end text-md-center text-sm-center">
          <img src="<?php echo base_url("img/dashboard.png")?>" width="600" class="ms-md-3 img-fluid"/>
        </div>
      </div>
    </div>



      <br/>
    </div>
    <div class="model">
      <div class="margem">
        <br/>
        <div class="container">
        <h2 class="branco">Baixe nosso App ou acesse nosso Site Demo.</h2>
        <h5 class="comentario mb-4">Experimente e veja como é prático e eficiente!</h5>
        <div class="d-none d-lg-block ">
          <div class="row mt-2 text-center">
            <div class="col-3 mx-auto">
              <a href="#"><img class="imgandroid img-fluid" src="<?php echo base_url("img/appTemplate_android.png")?>" width="250" height="400"/></a>
            </div>
            <div class="col-6 mx-auto">
              <a href="#"><img class="imgpc mt-4 img-fluid" src="<?php echo base_url("img/modelo_site.png")?>" width="540" height="320"/></a>
            </div>
            <div class="col-3 mx-auto ">
              <a href="#"><img class="imgios img-fluid" src="<?php echo base_url("img/appTemplate.png")?>" width="250" height="400"/></a>
            </div>
          </div>
        </div>
          <div class="row mt-2 text-center">
            <div class="col-sm-12 col-md-4 col-lg-4 mx-auto">
              <a href="#"><img src="<?php echo base_url("img/play.png")?>"/></a>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 mx-auto mb-4">
              <a href="#"><img src="<?php echo base_url("img/sited.png")?>"/></a>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 mx-auto">
              <a href="#"><img src="<?php echo base_url("img/appstore (1).png")?>"/></a>
            </div>
            
          </div>
        </div> 
      </div>
    </div>
    <br/>
    <br/>
    <div class="container">
      <h1 class="destaque text-center">Mais vendas e Menos esforço.</h1>
      <h3 class="sub text-center mt-3 mb-3">Receba mais pedidos, com muito mais praticidade!</h3>
      
      <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 mx-auto mt-4">
          <div class="card boxsombra border-0 text-white ">
            <img src="<?php echo base_url("img/destaque.png")?>" class="card-img-top" alt="destaque" style="border-top-left-radius: 10px; border-top-right-radius: 10px;" />
            <div class="card-body">
              <h5 class="card-title fw-bold"><img class="me-2" src="<?php echo base_url("img/star.png")?>" width="25" height="25" alt="estrela" />   Destaque seu Negócio</h5>
              <p class="card-text">Não se preocupe com Marketplaces com altas comissões, muitos concorrentes e péssimo suporte. Fortaleça sua marca com seu próprio site e aplicativo!</p>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 mx-auto mt-4">
          <div class="card boxsombra border-0 text-white pb-md-4 pb-lg-0">
            <img src="<?php echo base_url("img/AutoW.PNG")?>" class="card-img-top rounded-5" width="" alt="automatize" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
            <div class="card-body">
              <h5 class="card-title fw-bold"><img class="me-2" src="<?php echo base_url("img/comment.png")?>" width="25" height="25" alt="comment" /> Automatize o WhatsApp</h5>
              <p class="card-text" style="font-size: medium;">Ganhe tempo sem ter que anotar pedidos, envie o link do seu site e app automaticamente. Evite erros e reduza mão de obra no atendimento.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 mx-auto mt-4">
          <div class="card boxsombra border-0 text-white">
            <img src="<?php echo base_url("img/fidelize.png")?>" class="card-img-top" alt="fidelize" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
            <div class="card-body">
              <h5 class="card-title fw-bold"><img class="me-2" src="<?php echo base_url("img/cliente.png")?>" width="25" height="25" alt="cliente" /> Fidelize seus Clientes</h5>
              <p  class="card-text">Tenha um canal direto com seus clientes sem intermediários, através do seu próprio aplicativo. Crie promoções, cupons de desconto e assim fidelize os clientes!</p>
            </div>
          </div>
        </div>
      </div> 
      <br id="funcionalidades">
      <br>
      <br>
    </div>
      <div class="funcionalidades">
        <div class="margmfun">
          <br/>
          <div class="container">
            <h1 class="destaque text-center text-white mt-4">Funcionalidades</h1>
            <div class="row">
              
            <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mx-auto mt-5" style="max-width: 20rem;">
                <div class="boxazul border-3 border-info card text-white pb-4">
                  <div class="card-body">
                    <div class="icone">
                      <img src="<?php echo base_url("img/relatorio.png")?>" alt="relatorio" />
                    </div>
                    <h5 class="funcao fs-4 card-title fw-bold text-center pb-1">Dashboard</h5>
                    <p class="pfun card-text mt-3 pb-4">Acompanhe em tempo real relatórios de informações sobre vendas, clientes e produtos mais vendidos.</p>

                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mx-auto mt-5" style="max-width: 20rem;">
                <div class="boxazul border-3 border-info card text-white">
                  <div class="card-body">
                    <div class="icone">
                      <img src="<?php echo base_url("img/menu-suspenso.png")?>" alt="pedido" />
                    </div>
                    <h5 class="funcao fs-4 card-title fw-bold text-center">Gerenciador de pedidos</h5>
                    <p class="pfun card-text mt-3 pb-4">Uma única tela com todos os pedidos. Saiba em tempo real o status de cada pedido e melhore seu controle e gestão.</p>
                  </div>
                </div>
              </div>


              <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mx-auto mt-5" style="max-width: 20rem;">
                <div class="boxazul border-3 border-info card text-white">
                  <div class="card-body">
                    <div class="icone">
                      <img src="<?php echo base_url("img/estoque.png")?>" alt="produtos" />
                    </div>
                    <h5 class="funcao fs-4 card-title fw-bold text-center">Produtos</h5>
                    <p class="pfun card-text mt-3 pb-4">Adicione produtos, com suas categorias e fornecedores, podendo altera-los a qualquer momento, assim como sua disponibilidade.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mx-auto mt-5" style="max-width: 20rem;">
                <div class="boxazul border-3 border-info card text-white">
                  <div class="card-body">
                    <div class="icone">
                      <img src="<?php echo base_url("img/cupom.png")?>" alt="cupom" />
                    </div>
                    <h5 class="funcao fs-4 card-title fw-bold text-center">Cupom de Desconto</h5>
                    <p class="pfun card-text mt-3">Crie cupons de desconto para seus clientes, como por exemplo 10% OFF em determinada categoria. Ou Entrega Grátis para o primeiro pedido no app.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mx-auto mt-5" style="max-width: 20rem;">
                <div class="boxazul border-3 border-info card text-white pb-4">
                  <div class="card-body">
                    <div class="icone">
                      <img src="<?php echo base_url("img/localizacao.png")?>" alt="area" />
                    </div>
                    <h5 class="funcao fs-4 card-title fw-bold text-center pb-1">Área de entrega</h5>
                    <p class="pfun card-text mt-3 pb-4">Defina sua area de entrega e valores para cada região. Inative ou altere os preços quando quiser.</p>

                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mx-auto mt-5" style="max-width: 20rem;">
                <div class="boxazul border-3 border-info card text-white">
                  <div class="card-body">
                    <div class="icone">
                      <img src="<?php echo base_url("img/suporte-ao-cliente.png")?>" alt="suporte" />
                    </div>
                    <h5 class="funcao fs-4 card-title fw-bold text-center">Suporte</h5>
                    <p class="pfun card-text mt-3 pb-4">Suporte rápido e eficaz, por chat, whatsapp e telefone, para ajudar e resolver quaisquer questões. Todos os dias da semana.</p>
                  </div>
                </div>
              </div>
            </div>
            <br/>
            <br/>
            <h2 class="text-center mt-3 text-white fs-4">Mais Funcionalidades em Breve...</h1>
          </div>
          <hr id="planos"> 
          <br/>
        </div> 
      </div>
      <br/>
      <br/>
      <h1 class="destaque text-center">Planos</h1>
      <h3 class="sub text-center mt-3">Escolha o plano ideal para o seu negócio.</h3>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4 mt-5">
            <div class="card-panel center bg-light" style="box-shadow: none; border: 2px solid rgb(114, 114, 114); border-radius: 8px; box-shadow: 0px 0px 10px 3px rgb(124, 124, 124);">
              <div class="d-grid gap-2">                 
                <div class="btn-secondary fw-bold fs-4" type="text">Plano Starter</div>                 
              </div>
              <h2 class="plano text-primary text-center fs-1 fw-bold">Site</h2>
              <ul class="topicos fs-6 text-start">
                <li class="mb-3"> O cliente acessa pelo PC ou Celular</li>
                <li class="mb-3"> Com um domínio exclusivo para o seu negócio. Ex: suamarca.com</li>
                <li class="mb-3"> Painel Web para gestão e controle</li>
                <li class="mb-4"> Pronto em 7 dias úteis</li>
                <li class="mb-3"> Suporte técnico 7 dias por semana</li>
              </ul>
              <br/>
              <h5 class="mt-4">Mensalidades fixas de:</h5><h1 class="fw-bold text-primary lh-1">R$ 69,90</h1>
              <h5 class="text-center text-primary mt-4 mb-4 border rounded rounded-3 border-primary border-3"> Taxa de implementação: R$ 119,90</h5>

                <div class="d-grid gap-2"> 
                  <button class="btn btn-success fw-bold fs-5 mt-1" type="button">Solicitar</button>
                </div>

            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4 mt-5">
            <div class="card-panel center bg-light" style="box-shadow: none; border: 2px solid rgb(0, 110, 255); border-radius: 8px; box-shadow: 0px 0px 10px 3px rgb(124, 124, 124);">
              <div class="d-grid gap-2">                 
                <div class="btn-primary fw-bold fs-4" type="text">Plano Premium</div>                 
              </div>
              <h2 class="plano text-primary  text-center fs-1 fw-bold">Aplicativo</h2>
              <ul class="topicos fs-6 text-start">
                <li class="mb-3"> Publicação na Google Play Store e Apple AppStore</li>
                <li class="mb-3"> Promoções exclusivas pelo App</li>
                <li class="mb-3"> Painel Web para gestão e controle</li>
                <li class="mb-4"> Pronto em 7 dias úteis</li>                
                <li class="mb-3"> Suporte técnico 7 dias por semana</li>
              </ul>
              <br/>
                <h5 class="mt-4">Mensalidades fixas de:</h5><h1 class="fw-bold text-primary lh-1">R$ 79,90</h1>
              <h5 class="text-center text-primary mt-4 mb-4 border rounded rounded-3 border-primary border-3"> Taxa de implementação: R$ 169,90</h5>

                <div class="d-grid gap-2">                 
                  <button class="btn btn-success fw-bold fs-5 mt-1" type="button">Solicitar</button>                 
                </div>

            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4 mt-5">
            <div class="card-panel center" style="box-shadow: none; border:  2px solid rgb(250, 225, 6); background-color: rgba(219, 255, 255, 0.904); border-radius: 8px; box-shadow: 0px 0px 10px 3px rgb(124, 124, 124);">
              <div class="d-grid gap-2">                 
                <div class="btn-warning fw-bold fs-4" type="text">Plano Master</div>                 
              </div>
              <h2 class="plano text-primary  text-center text-primary fs-1 fw-bold">Aplicativo + Site</h2>
              <ul class="topicos fs-6 text-start text-dark">
                <li class="mb-3"> Site com o seu domínio próprio</li>
                <li class="mb-3"> O cliente acessa pelo PC ou Celular</li>
                <li class="mb-3"> Publicação na Google Play Store e Apple AppStore</li>
                <li class="mb-3"> Promoções exclusivas pelo App</li>
                <li class="mb-3"> Painel Web para gestão e controle</li>
                <li class="mb-3"> Pronto em 10 dias úteis</li>
                <li class="mb-3"> Suporte técnico 7 dias por semana</li>
              </ul>
                <h5 class="mt-3">Mensalidades fixas de:</h5><h1 class="fw-bold text-primary lh-1">R$ 99,90</h1>
              <h5 class="text-center text-primary mt-3 mb-4 border rounded rounded-3 border-primary border-3"> Taxa de implementação: R$ 249,90</h5>

                <div class="d-grid gap-2">                 
                  <button class="btn btn-success fw-bold fs-5" type="button">Solicitar</button>                 
                </div>

            </div>
          </div>

        </div>

      </div>
      <br/>
      <br/>
      <br/>  
    </div>

    <div class="rodape">
      <div class="container mt-5">
          <div class="row">
              <div class="col-12 col-sm-12 col-md-4 col-lg-5 mt-3 mx-auto text-center">
                <img class="img-fluid mt-4" src="<?php echo base_url("img/MYBLOGOAZUL.png")?>" width="240" alt="MYB" /> <br>
                <p class="text-white mt-3">©2021 Manage Your Business</p>
                <img class="img-fluid mt-3" src="<?php echo base_url("img/Etec.png")?>" width="80" alt="etec" />
                <img class="img-fluid mt-3 ms-4" src="<?php echo base_url("img/CPS.png")?>" width="80" alt="cps" />
              </div>
              <div class="col-12 col-sm-12 col-md-4 col-lg-3 mt-5 mt-lg-5 mt-md-5 mt-sm-5 mx-auto text-sm-center text-center text-md-start text-lg-start">
                  <h3 class="azul">Integrantes</h3><br>
                  <p>Alex Graciano da Cruz</p>
                  <p>Guilherme Siqueira Alencar</p>
                  <p>Renata Peixoto Goveia</p>
                  <p>Thiago Pinheiro Sena Souza</p><br>
              </div>
              <br>
              <div class="col-12 col-sm-12 col-md-2 col-lg-2 mt-5 mt-lg-5 mt-md-5 mt-sm-5 mx-auto text-sm-center text-center text-md-start text-lg-start">
                <h3 class="azul">Contato</h3><br>
                <p>Telefone</p>
                <p>WhatsApp</p>
                <p>Chat</p>
                <p>Email</p>
                <br>
              </div>
              <div class="col-12 col-sm-12 col-md-2 col-lg-2 mt-5 mt-lg-5 mt-md-5 mt-sm-5 mx-auto mb-4 text-sm-center text-center text-md-start text-lg-start">
                <h3 class="azul">Social</h3><br>
                <a href="https://instagram.com/manage_your_business_?utm_medium=copy_link" target="_blank">
                <img class="img-fluid" src="<?php echo base_url("img/instagram.png")?>" alt="instagram"/>
                </a>
                <br>
              </div>
            <hr>
      </div>
    </div>  
  </main>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
    crossorigin="anonymous"></script>
</body>

</html>