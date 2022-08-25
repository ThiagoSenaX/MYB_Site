<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->

    <div class="container p-5 bg-white rounded shadow">

        <h2 class="text-center mb-4 text-dark font-weight-bold">Marketing</h2>

        <hr>
        <div class="row">
            <!-- Botão cadastro -->
            <div class="col-12 col-lg-9 col-xl-9">
                <a href="#" class="btn btn-success btn-icon-split mb-4" data-toggle="modal" data-target="#cadCupomModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Cadastrar Cupom</span>
                </a>
            </div>

            <div class="col-12 col-lg-3 col-xl-3 mb-3">
                <form class="form-inline my-2 my-md-0 navbar-search">
                    <div class="input-group text-right">
                        <input type="text" class="form-control bg-light border-0" placeholder="Proucurar por..." aria-label="Proucurar">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table text-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Habilitado</th>
                        <th scope="col">Código</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Usos</th>
                        <th scope="col">Alterar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cupons as $cupom) : ?>
                        <tr>
                            <th scope="row"><?php echo ($cupom->Cod_Cupom) ?></th>
                            <td>
                                <input id="switch<?php echo ($cupom->Cod_Cupom) ?>" class="switch" type="checkbox" value="" checked>
                                <label for="switch<?php echo ($cupom->Cod_Cupom) ?>"></label>
                            </td>
                            <td><?php echo ($cupom->Codigo_Cupom) ?></td>
                            <td><?php echo ($cupom->Desc_Cupom) ?></td>
                            <td>
                                <h5><span class="badge bg-info text-white"><i class="fas fa-shopping-cart mr-1"></i> <?php echo ($cupom->Uso_Cupom) ?></span></h5>
                            </td>
                            <td>
                                <form method="POST">
                                    <input type="hidden" name="codCupom" value="<?php echo ($cupom->Cod_Cupom) ?>">
                                    <button type="submit" class="btn btn-primary rounded-circle"><i class="fas fa-pencil-alt fa-2x"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    <!--
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <input id="switch1" class="switch" type="checkbox" value="" checked>
                        <label for="switch1"></label>
                    </td>
                    <td>FRETEGRATIS</td>
                    <td>Frete Grátis na entrega!</td>
                    <td><h5><span class="badge bg-info text-white"><i class="fas fa-shopping-cart mr-1"></i> 9</span></h5></td>
                    <td><a class="dropdown-item" href="#" data-toggle="modal"
                        data-target="#alterarCupom"><i class="fas fa-pencil-alt fa-2x"
                            style="color: rgb(0, 132, 255);"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>
                        <input id="switch2" class="switch" type="checkbox" value="" checked>
                        <label for="switch2"></label>
                    </td>
                    <td>MOUSEOFF</td>
                    <td>Desconto nos produtos da categoria: Mouse</td>
                    <td><h5><span class="badge bg-info text-white"><i class="fas fa-shopping-cart mr-1"></i> 2</span></h5></td>
                    <td><a class="dropdown-item" href="#" data-toggle="modal"
                        data-target="#alterarCupom"><i class="fas fa-pencil-alt fa-2x"
                            style="color: rgb(0, 132, 255);"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>
                        <input id="switch3" class="switch" type="checkbox" value="" checked>
                        <label for="switch3"></label>
                    </td>
                    <td>MOUSEOFF</td>
                    <td>Desconto de 15% nos produtos da categoria: Mouse</td>
                    <td><h5><span class="badge bg-info text-white"><i class="fas fa-shopping-cart mr-1"></i> 4</span></h5></td>
                    <td><a class="dropdown-item" href="#" data-toggle="modal"
                        data-target="#alterarCupom"><i class="fas fa-pencil-alt fa-2x"
                            style="color: rgb(0, 132, 255);"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>
                        <input id="switch4" class="switch" type="checkbox" value="" checked>
                        <label for="switch4"></label>
                    </td>
                    <td>MONITORESOFF</td>
                    <td>Desconto de 10% nos produtos da categoria: Monitores</td>
                    <td><h5><span class="badge bg-info text-white"><i class="fas fa-shopping-cart mr-1"></i> 1</span></h5></td>
                    <td><a class="dropdown-item" href="#" data-toggle="modal"
                        data-target="#alterarCupom"><i class="fas fa-pencil-alt fa-2x"
                            style="color: rgb(0, 132, 255);"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>
                        <input id="switch5" class="switch" type="checkbox" value="">
                        <label for="switch5"></label>
                    </td>
                    <td>BLACKFRIDAY</td>
                    <td>Desconto de 5% em todos os produtos da loja!!!</td>
                    <td><h5><span class="badge bg-info text-white"><i class="fas fa-shopping-cart mr-1"></i> 0</span></h5></td>
                    <td><a class="dropdown-item" href="#" data-toggle="modal"
                        data-target="#alterarCupom"><i class="fas fa-pencil-alt fa-2x"
                            style="color: rgb(0, 132, 255);"></i></a></td>
                </tr>
            -->
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<div class="modal fade" id="cadCupomModal" tabindex="-1" aria-labelledby="cadCupomModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fas fa-plus mt-1 mr-1 text-light"></i><i class="fas fa-receipt fa-2x text-white"></i>
                <h5 class="modal-title text-center text-white ml-3">Cadastrar Cupom:</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">

                    <input type="hidden" name="cadCupom" class="form-control" id="cadCupom" value="1" readonly>
                    <input type="hidden" name="ativocupom" class="form-control" id="ativocupom" value="1" readonly>
                    <input type="hidden" name="usocupom" class="form-control" id="usocupom" value="0" readonly>

                    <div class="row">
                        <div class="col-8 mb-4">
                            <label for="codigocupom" class="form-label lblcor">Código do cupom:</label>
                            <input type="text" required class="form-control text-dark" id="codigocupom" name="codigocupom" placeholder="CUPOMEXEMPLO" aria-label="">
                        </div>

                        <div class="col mb-4">
                            <label for="descontocupom" class="form-label lblcor">% Desconto:</label>
                            <input type="number" max="100" class="form-control text-dark" id="descontocupom" name="descontocupom" placeholder="10" aria-label="">
                        </div>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col">
                            <label for="descricao" required class="form-label lblcor">Descrição:</label>
                            <textarea class="form-control text-dark" placeholder="Escreva aqui a descrição do cupom, requisitos e outros..." id="descricao" name="descrcupom" rows="5"></textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-success" type="submit">Cadastrar</button></a>
            </div>
            </form>

        </div>
    </div>
</div>


<div class="modal fade" id="alterarCupom" tabindex="-1" aria-labelledby="alterarCupomLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fas fa-receipt fa-2x text-white"></i>
                <h5 class="modal-title text-center text-white ml-3">Cupom #1:</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="row">
                        <div class="col-8 mb-4">
                            <label for="nome" class="form-label lblcor">Código do cupom:</label>
                            <input type="text" class="form-control" id="nomeProd" name="nomeProd" placeholder="CUPOMEXEMPLO" aria-label="" value="FRETEGRATIS">
                        </div>

                        <div class="col mb-4">
                            <label for="preco" class="form-label lblcor">% Desconto:</label>
                            <input type="number" class="form-control" id="preco" name="precoProd" placeholder="10" aria-label="" value="10">
                        </div>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col">
                            <label for="descricao" class="form-label lblcor">Descrição:</label>
                            <textarea class="form-control" placeholder="Escreva aqui a descrição do cupom, requisitos e outros..." id="descricao" name="descProd" rows="5">Frete Grátis na entrega!</textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-success" type="submit">Salvar</button></a>
            </div>
            </form>

        </div>
    </div>
</div>