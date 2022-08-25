<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/cadastro.css" />
    <link rel="shortcut icon" href="<?php echo base_url("img/MYB_AZUL.png") ?>">
    <script src="JavaScript1.js"></script>
    <title>MYB - Cadastro</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins'sans-serif;
        }

        body {
            background-image: url(<?php echo base_url('img/predios2.png') ?>);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            height: 100%;
            justify-content: center;
            align-items: center;

        }

        .box {
            max-width: 700px;
            min-width: 500px;
            background: rgba(0, 204, 255, 0.596);
            padding: 25px;
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.582) 15px 15px 15px;
            font-weight: bold;
            color: rgb(255, 255, 255);
            text-shadow: -1px 0px 8px rgb(58, 58, 58);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
            background: rgba(3, 62, 110, 0.63);
            border-radius: 30px;
            color: white;
            text-shadow: -1px 0px 4px rgb(58, 58, 58);
            font-size: 300%;
        }


        button.cad {
            border: none;
            outline: none;
            height: 50px;
            width: 650px;
            max-width: 650px;
            background-color: black;
            color: white;
            border-radius: 10px;
            font-weight: bold;
        }

        button:hover {
            background: rgb(85, 85, 85);
            border: 1px solid;
            color: rgb(253, 253, 253);
        }


        @media screen and (min-width: 150px) and (max-width: 400px) {
            h4 {
                display: none;
                visibility: hidden;
            }
        }
    </style>
    <script src="https://kit.fontawesome.com/25a14f67bd.js" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <!-- Navbar fixa no inicio (desconsiderar)-->
        <nav class="navbar navbar-light bg-dark">
            <div class="container-fluid">
                <div>
                    <a class="navbar-brand text-white mx-4" href="#"><img class="mx-3" src="img/LogoMYB.png" height="60" alt="Logo myb"></a>
                    </a>
                </div>
            </div>
        </nav>
        <!-- Navbar fixa no inicio (desconsiderar)-->


        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
            <div class="container-fluid">

                <a class="navbar-brand text-white mx-4" href="<?php echo base_url('./Home/index') ?>"><img class="mx-3" src="<?php echo base_url('img/MYBLOGOAZUL.png') ?>" height="70" alt="Logo myb"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSite">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse ms-5" id="navbarSite">
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item">
                            <h5><a class="nav-link text-white me-2" href="<?php echo base_url('./Home/index') ?>">Home</a></h5>
                        </li>
                        <li class="nav-item">
                            <h5><a class="nav-link text-white me-2" href="<?php echo base_url('./ContatoController/Contato') ?>">Contato</a></h5>
                        </li>

                        <li class="nav-item">
                            <a style="text-decoration: none" href="<?php echo base_url('./LoginController/Login') ?>">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-info btn-lg me-5 fw-bold" onclick="Entrar();" type="submit">Entrar</button>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br />
        <br />
        <div class="conteiner">
        <?php
            if ($msg === 'OK') { ?>
                <div class="alert alert-success mt-2" role="alert">
                    <i class="fas fa-check-circle" style="font-size: 25px; margin-right: 5px;"></i>Cadastro Realizado com Sucesso!
                </div>
                <div class="alert alert-warning mt-2" role="alert">
                    <i class="fas fa-info-circle" style="font-size: 25px; margin-right: 5px;"></i>Entraremos em contato para solicitar imagens, cores e mais detalhes para o desenvolvimento do Site/App.
                </div>
            <?php } else if($msg === 'ERRO') { ?>
                <div class="alert alert-danger mt-2" role="alert">
                    <i class="fas fa-times-circle" style="font-size: 25px; margin-right: 5px;"></i>Não foi possível realizar seu cadastro. Revise suas informações e tente novamente.
                </div>
            <?php }?>

        <div class="box mt-4">

            



            <h1>Cadastre-se</h1>
            <h4>Informações pessoais:</h4>
            <hr>
            <form method="POST">
                <input hidden type="text" name="cadEmpresa" id="cadEmpresa" value="1">
                <div class="row">
                    <div class="col-12">
                        <label for="Nome_Pessoal" class="form-label">Nome completo:</label>
                        <input type="text" required name="Nome_Pessoal" id="Nome_Pessoal" class="form-control" required placeholder="Antonio José da Silva" aria-label="Nome Completo">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <label for="CPF_Pessoal" class="form-label">CPF:</label>
                        <input type="text" required name="CPF_Pessoal" id="CPF_Pessoal" class="form-control" required placeholder="123.456.789-00" aria-label="CPF">
                    </div>
                    <div class="col-12 col-lg-4">
                        <label for="Dt_Pessoal" class="form-label">Data de Nascimento:</label>
                        <input type="text" required name="Dt_Pessoal" id="Dt_Pessoal" class="form-control" required placeholder="01/01/1991" aria-label="data">
                    </div>
                    <div class="col-12 col-lg-4">
                        <label for="Sexo_Pessoal" class="form-label">Sexo:</label>
                        <input type="text" required name="Sexo_Pessoal" id="Sexo_Pessoal" class="form-control" required placeholder="Masculino" aria-label="sexo">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <label for="Tel_Empresa" class="form-label">Telefone:</label>
                        <input type="tel" required name="Tel_Empresa" class="form-control" id="Tel_Empresa" required placeholder="(11) 99311-8547">
                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="Email_Pessoal" class="form-label">Email:</label>
                        <input type="email" required class="form-control" name="Email_Pessoal" id="Email_Pessoal" required placeholder="seuemail@email.com">
                    </div>
                    
                    <div class="row">
                        <h4 class="mt-5">Informações da empresa:</h4>
                        <hr>

                        <div class="col-12">
                            <label for="Nm_Fantasia_Empresa" class="form-label">Nome da empresa:</label>
                            <input type="text" required name="Nm_Fantasia_Empresa" class="form-control" required id="Nm_Fantasia_Empresa" placeholder="MYB">
                        </div>

                        <div class="col-12 col-lg-6">
                            <label for="CNPJ_Empresa" class="form-label">CNPJ:</label>
                            <input type="text" required name="CNPJ_Empresa" class="form-control" id="CNPJ_Empresa" required placeholder="12.345.678/0001-90">
                        </div>

                        <div class="col-12 col-lg-6">
                            <label for="Nm_Razao_Social" class="form-label">Razão Social:</label>
                            <input type="text" required name="Nm_Razao_Social" class="form-control" id="Nm_Razao_Social" required placeholder="Manage You Busines">
                        </div>

                        <div class="col-12">
                            <label for="Cod_Segm" class="form-label">Segmento de atuação da empresa:</label>
                            <select id="Cod_Segm" required name="Cod_Segm" required class="form-select">
                                <option selected></option>
                                <?php foreach ($segmentos as $segmento) : ?>
                                    <option value="<?php echo ($segmento->Cod_Segmento) ?>"><?php echo ($segmento->Nm_Segmento) ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label class="mt-2" style="color: rgb(255, 248, 181); font-size: 14px;">* Caso não tenha o segmento da sua empresa, entre em contato conosco para mais informações</label>
                        </div>

                        <div class="col-12 col-lg-6">
                            <label for="Estado_Empresa" class="form-label">Estado:</label>
                            <select id="Estado_Empresa" required name="Estado_Empresa" required class="form-select">
                                <option selected></option>
                                <option value="Acre">Acre</option>
                                <option value="Alagoas">Alagoas</option>
                                <option value="Amazonas">Amazonas</option>
                                <option value="Amapá">Amapá</option>
                                <option value="Bahia">Bahia</option>
                                <option value="Ceará">Ceará</option>
                                <option value="Distrito Federal">Distrito Federal</option>
                                <option value="Espírito Santo">Espírito Santo</option>
                                <option value="Goiás">Goiás</option>
                                <option value="Maranhão">Maranhão</option>
                                <option value="Mato Grosso">Mato Grosso</option>
                                <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                <option value="Minas Gerais">Minas Gerais</option>
                                <option value="Pará">Pará</option>
                                <option value="Paraíba">Paraíba</option>
                                <option value="Paraná">Paraná</option>
                                <option value="Pernambuco">Pernambuco</option>
                                <option value="Piauí">Piauí</option>
                                <option value="Rio de Janeiro">Rio de Janeiro</option>
                                <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                <option value="Rondônia">Rondônia</option>
                                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                <option value="Roraima">Roraima</option>
                                <option value="Santa Catarina">Santa Catarina</option>
                                <option value="Sergipe">Sergipe</option>
                                <option value="São Paulo">São Paulo</option>
                                <option value="Tocantins">Tocantins</option>
                            </select>
                        </div>

                        <div class="col-12 col-lg-6">
                            <label for="Cidade_Empresa" class="form-label">Cidade:</label>
                            <input type="text" required class="form-control" name="Cidade_Empresa" required id="Cidade_Empresa">
                        </div>

                        <div class="col-12 col-lg-4">
                            <label for="Endereco_Empresa" class="form-label">Logradouro:</label>
                            <input type="text" required name="Endereco_Empresa" id="Endereco_Empresa" class="form-control" required placeholder="Av.Juscelino Kubitschek" aria-label="endereço">
                        </div>
                        <div class="col-12 col-lg-4">
                            <label for="Endereco_Empresa" class="form-label">Número:</label>
                            <input type="text" required name="Numero_Empresa" id="Numero_Empresa" class="form-control" required placeholder="478" aria-label="numero">
                        </div>
                        <div class="col-12 col-lg-4">
                            <label for="Complemento_Empresaa" class="form-label">Complemento:</label>
                            <input type="text" required name="Complemento_Empresa" id="Complemento_Empresa" class="form-control" placeholder="Sobrado amarelo" aria-label="complemento">
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="Email_Empresa" class="form-label">Email:</label>
                        <input type="email" required placeholder="antoniosilva@gmail.com" name="Email_Empresa" class="form-control" id="Email_Empresa">
                        <label class="mt-2" style="color: rgb(255, 248, 181); font-size: 14px;">Observação: Esse e-mail e senha é para o seu acesso ao Sistema Administrativo.</label>
                    </div>
                    <div class="col-12 col-lg-6">
                        <label for="Senha_Empresa" class="form-label">Senha:</label>
                        <input type="password" required placeholder="*****************" class="form-control" name="Senha_Empresa" id="Senha_Empresa">
                    </div>
                    <div class="form-row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary cad mt-4 mb-0">Cadastrar</button>
                        </div>
                    </div>
            </form>
        </div>
        </div>
        </div>
        <br />
        <div class="modal fade" id="mensagemModal" tabindex="-1" role="dialog" aria-labelledby="mensagemModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg " role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success text-center justify-content-center">
                        <h5 class="modal-title text-white" id="mensagemModalLabel">Cadastro Realizado com Sucesso!</h5>
                    </div>
                    <div class="modal-body text-center fs-5">
                        <img class="mb-5" src="<?php echo base_url('img/verificado.png') ?>" height="300" /><br />
                        Entraremos em contato para solicitar imagens, cores e mais detalhes para o desenvolvimento do Site/App!
                    </div>
                    <div class="modal-footer text-center justify-content-center">
                        <a class="btn btn-success" href="<?php echo base_url('./LoginController/Login') ?>">OK</a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var mensagemModal = document.getElementById('mensagemModal') // relatedTarget
            myModal.show(mensagemModal)
        </script>
</body>

</html>