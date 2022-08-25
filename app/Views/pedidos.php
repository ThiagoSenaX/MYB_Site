<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="container p-5 bg-white rounded shadow">

        <h2 class="text-center mb-4 text-dark font-weight-bold">Pedidos</h2>

        <hr>
        <div class="row">
            <!-- Botão cadastro -->
            <div class="col-12 col-lg-9 col-xl-9">
                <a href="#" class="btn btn-success btn-icon-split mb-4 pr-4" data-toggle="modal" data-target="#cadPedidoModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Realizar Pedido</span>
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
                        <th scope="col">Data</th>
                        <th scope="col">#Pedido</th>
                        <th scope="col">Status</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Total</th>
                        <th scope="col">Detalhes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row" class="text-center">31/11/21<br> 18:56h</td>
                        <td class="text-center">94</td>
                        <td><span class="badge bg-warning text-white">Realizado</span></td>
                        <td>Marcos César</td>
                        <td>(11) 98563-4586</td>
                        <td>Rua Queimadas, 232</td>
                        <td>R$ 375,00</td>
                        <td><a class="dropdown-item" href="#" data-toggle="modal" data-target="#pedidoModal"><i class="fas fa-list-alt fa-2x" style="color: rgb(0, 132, 255);"></i></a></td>

                    </tr>

                    <tr>
                        <td scope="row" class="text-center">30/11/21<br> 16:33h</td>
                        <td class="text-center">93</td>
                        <td><span class="badge bg-warning text-white">Realizado</span></td>
                        <td>Julia Silva</td>
                        <td>(11) 94658-1492</td>
                        <td>Rua das Graças, 118</td>
                        <td>R$ 396,00</td>
                        <td><a class="dropdown-item" href="#" data-toggle="modal" data-target="#pedidoModal2"><i class="fas fa-list-alt fa-2x" style="color: rgb(0, 132, 255);"></i></a></td>

                    </tr>

                    <tr>
                        <td scope="row" class="text-center">28/11/21<br> 21:30h</td>
                        <td class="text-center">92</td>
                        <td><span class="badge bg-primary text-white">Em Transporte</span></td>
                        <td>Marcelo Junior</td>
                        <td>(11) 97928-1492</td>
                        <td>Rua Maruta, 658</td>
                        <td>R$ 150,00</td>
                        <td><a class="dropdown-item" href="#" data-toggle="modal" data-target="#pedidoModal2"><i class="fas fa-list-alt fa-2x" style="color: rgb(0, 132, 255);"></i></a></td>
                    </tr>

                    <tr>
                        <td scope="row" class="text-center">28/11/21<br> 20:57h</td>
                        <td class="text-center">91</td>
                        <td><span class="badge bg-success text-white">Concluído</span></td>
                        <td>Ana Lurdes</td>
                        <td>(11) 92187-9692</td>
                        <td>Av. Cassorla, 148</td>
                        <td>R$ 220,00</td>
                        <td><a class="dropdown-item" href="#" data-toggle="modal" data-target="#pedidoModal2"><i class="fas fa-list-alt fa-2x" style="color: rgb(0, 132, 255);"></i></a></td>
                    </tr>

                    <tr>
                        <td scope="row" class="text-center">29/10/21<br> 12:45h</td>
                        <td class="text-center">90</td>
                        <td><span class="badge bg-primary text-white">Em Transporte</span></td>
                        <td>Victor Gabriel</td>
                        <td>(11) 98047-1696</td>
                        <td>Rua das Cerejas, 975</td>
                        <td>R$ 56,00</td>
                        <td><a class="dropdown-item" href="#" data-toggle="modal" data-target="#pedidoModal2"><i class="fas fa-list-alt fa-2x" style="color: rgb(0, 132, 255);"></i></a></td>
                    </tr>



                    <tr>
                        <td scope="row" class="text-center">27/11/21<br> 22:56h</td>
                        <td class="text-center">89</td>
                        <td><span class="badge bg-warning text-white">Realizado</span></td>
                        <td>Marcelo Castro</td>
                        <td>(11) 92356-4586</td>
                        <td>Rua Jeremoabo, 122</td>
                        <td>R$ 196,90</td>
                        <td><a class="dropdown-item" href="#" data-toggle="modal" data-target="#pedidoModal"><i class="fas fa-list-alt fa-2x" style="color: rgb(0, 132, 255);"></i></a></td>

                    </tr>

                    <tr>
                        <td scope="row" class="text-center">27/11/21<br> 14:24h</td>
                        <td class="text-center">88</td>
                        <td><span class="badge bg-success text-white">Concluído</span></td>
                        <td>Fernando Mark</td>
                        <td>(11) 91123-1492</td>
                        <td>Rua Vila Nova, 1096</td>
                        <td>R$ 87,90</td>
                        <td><a class="dropdown-item" href="#" data-toggle="modal" data-target="#pedidoModal2"><i class="fas fa-list-alt fa-2x" style="color: rgb(0, 132, 255);"></i></a></td>

                    </tr>

                    <tr>
                        <td scope="row" class="text-center">27/11/21<br> 11:59h</td>
                        <td class="text-center">87</td>
                        <td><span class="badge bg-success text-white">Concluído</span></td>
                        <td>Renata Pereira</td>
                        <td>(11) 99911-3122</td>
                        <td>Av. Paulista, 727</td>
                        <td>R$ 292,00</td>
                        <td><a class="dropdown-item" href="#" data-toggle="modal" data-target="#pedidoModal2"><i class="fas fa-list-alt fa-2x" style="color: rgb(0, 132, 255);"></i></a></td>
                    </tr>

                    <tr>
                        <td scope="row" class="text-center">26/11/21<br> 16:47h</td>
                        <td class="text-center">86</td>
                        <td><span class="badge bg-success text-white">Concluído</span></td>
                        <td>Alan Marques</td>
                        <td>(11) 92187-1452</td>
                        <td>Av. Ipiranga, 269</td>
                        <td>R$ 164,90</td>
                        <td><a class="dropdown-item" href="#" data-toggle="modal" data-target="#pedidoModal2"><i class="fas fa-list-alt fa-2x" style="color: rgb(0, 132, 255);"></i></a></td>
                    </tr>

                    <tr>
                        <td scope="row" class="text-center">26/10/21<br> 12:15h</td>
                        <td class="text-center">85</td>
                        <td><span class="badge bg-success text-white">Concluído</span></td>
                        <td>Richard Lucca</td>
                        <td>(11) 98047-1696</td>
                        <td>Rua Lagoa do Sapo, 772</td>
                        <td>R$ 38,00</td>
                        <td><a class="dropdown-item" href="#" data-toggle="modal" data-target="#pedidoModal2"><i class="fas fa-list-alt fa-2x" style="color: rgb(0, 132, 255);"></i></a></td>
                    </tr>
                </tbody>
            </table>
            <a href="#" style="text-decoration: none;">
                <h6 class="text-center" style="font-weight: 700;">Mostrar mais pedidos... (10)</h6>
            </a>

            <hr>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<div class="modal fade" id="pedidoModal" tabindex="-1" aria-labelledby="pedidoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fas fa-list-alt fa-2x text-white"></i>
                <h5 class="modal-title text-white fw-bold ml-3">Pedido: #94</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row text-dark">
                        <div class="col-6">
                            <h6><span class="lblcor">Cliente: </span>Marcos César Augusto</h6>
                        </div>
                        <div class="col-6">
                            <h6><span class="lblcor">Telefone: </span>(11) 98563-4586</h6>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>

                        <div class="col-6">
                            <h6><span class="lblcor">Pagamento: </span>Cartão de crédito (Visa)</h6>
                        </div>
                        <div class="col-6">
                            <h6><span class="lblcor">OBS: </span></h6>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-12 mb-3">
                            <h6><span class="lblcor">Endereço: </span>Rua das Laranjeiras, 23 - Ipiranga - CEP: 08569-426</h6>
                        </div>
                    </div>

                    <table class="table text-dark">
                        <thead>
                            <tr class="lblcor">
                                <th scope="col">Qtd</th>
                                <th scope="col">Produto</th>
                                <th scope="col">Preço</th>
                                <th scope="col">SubTotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="my-auto">
                                <td scope="row">1</td>
                                <td>Teclado Gamer Corsair</td>
                                <td>R$ 135,00</td>
                                <td>R$ 135,00</td>
                            </tr>
                            <tr class="my-auto">
                                <td scope="row">1</td>
                                <td>Headset gamer Razer (Verde)</td>
                                <td>R$ 220,00</td>
                                <td>R$ 220,00</td>
                            </tr>
                            <tr class="my-auto">
                                <td></td>
                                <td></td>
                                <td class="lblcor text-center">Frete:</td>
                                <td>R$ 20,00</td>
                            </tr>
                            <tr class="my-auto bg-gray-100">
                                <td></td>
                                <td></td>
                                <td class="lblcor">VALOR TOTAL:</td>
                                <td><b>R$ 375,00</b></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>

            <div class="modal-footer" style="text-align: left; align-items: left; justify-content: left; background-color: rgba(152, 204, 235, 0.2);">
                <label for="status" class="form-label lblcor">Status do pedido:</label>
                <select class="form-control" style="background-color: #f6c23e; color: #ffffff; font-weight: 700;" id="status" name="status" aria-label="Selecione o Fornecedor">
                    <option selected style="background-color: #f6c23e; color: #ffffff; font-weight: 700; ">Realizado</option>
                    <option style="background-color: rgb(0, 110, 255); color: #ffffff; font-weight: 700;">Em transporte</option>
                    <option style="background-color: rgb(0, 196, 0); color: #ffffff; font-weight: 700;">Concluído</option>
                    <option style="background-color: rgb(255, 82, 82); color: #ffffff; font-weight: 700;">Cancelado</option>
                </select>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="pedidoModal2" tabindex="-1" aria-labelledby="pedidoModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fas fa-list-alt fa-2x text-white mr-3"></i>
                <h5 class="modal-title text-center text-white">Pedido: #93</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row text-dark">
                        <div class="col-6">
                            <h6><span class="lblcor">Cliente: </span>Julia Silva da Costa</h6>
                        </div>
                        <div class="col-6">
                            <h6><span class="lblcor">Telefone: </span>(11) 94658-1492 </h6>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>

                        <div class="col-6">
                            <h6><span class="lblcor">Pagamento: </span>Cartão de crédito (Visa)</h6>
                        </div>
                        <div class="col-6">
                            <h6><span class="lblcor">OBS: </span></h6>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-12 mb-3">
                            <h6><span class="lblcor">Endereço: </span>Rua das Graças, 118 - Bonsucesso - CEP: 07172-256</h6>
                        </div>

                    </div>

                    <table class="table text-dark">
                        <thead>
                            <tr class="lblcor">
                                <th scope="col">Qtd</th>
                                <th scope="col">Produto</th>
                                <th scope="col">Preço</th>
                                <th scope="col">SubTotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="my-auto">
                                <td scope="row">2</td>
                                <td>Mouse Gamer RGB</td>
                                <td>R$ 98,00</td>
                                <td>R$ 196,00</td>
                            </tr>
                            <tr class="my-auto">
                                <td scope="row">1</td>
                                <td>Teclado Gamer RGB</td>
                                <td>R$ 160,00</td>
                                <td>R$ 160,00</td>
                            </tr>
                            <tr class="my-auto">
                                <td scope="row">1</td>
                                <td>MousePad Azul</td>
                                <td>R$ 15,00</td>
                                <td>R$ 15,00</td>
                            </tr>
                            <tr class="my-auto">
                                <td></td>
                                <td></td>
                                <td class="lblcor text-center">Frete:</td>
                                <td>R$ 25,00</td>
                            </tr>
                            <tr class="my-auto bg-gray-100">
                                <td></td>
                                <td></td>
                                <td class="lblcor">VALOR TOTAL:</td>
                                <td><b>R$ 396,00</b></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="modal-footer" style="text-align: left; align-items: left; justify-content: left; background-color: rgba(152, 204, 235, 0.2);">
                <label for="status" class="form-label lblcor">Status do pedido:</label>
                <select class="form-control" style="background-color: #f6c23e; color: #ffffff; font-weight: 700;" id="status" name="status" aria-label="Selecione o Fornecedor">
                    <option selected style="background-color: #f6c23e; color: #ffffff; font-weight: 700; ">Realizado</option>
                    <option style="background-color: rgb(0, 110, 255); color: #ffffff; font-weight: 700;">Em transporte</option>
                    <option style="background-color: rgb(0, 196, 0); color: #ffffff; font-weight: 700;">Concluído</option>
                    <option style="background-color: rgb(255, 82, 82); color: #ffffff; font-weight: 700;">Cancelado</option>
                </select>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="cadPedidoModal" tabindex="-1" aria-labelledby="cadPedidoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fas fa-plus mt-1 mr-1 text-light"></i><i class="fas fa-cash-register fa-2x text-white"></i>
                <h5 class="modal-title text-center text-white ml-3">Cadastrar Pedido:</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="Post">
                    <input type="hidden" name="cadProd" class="form-control" id="cadProd" value="1" readonly>
                    <input type="hidden" name="ativoprod" class="form-control" id="ativo" value="1" readonly>
                    <div class="row">
                        <div class="col-12 mb-4">
                            <label for="codcli" class="form-label lblcor">Código do Cliente:</label>
                            <input type="number" required class="form-control" id="codcli" name="codcli" placeholder="Ex: 25" aria-label="">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-10 mb-4">
                            <label for="codcategoria" class="form-label lblcor">Produto:</label>

                            <select class="form-control" id="codcategoria" name="codcategoria" aria-label="Selecione o Produto">
                                <option selected>Selecione o Produto</option>
                                <?php foreach ($produtos as $produto) : ?>
                                    <option value="<?php echo ($produto->Cod_Prod) ?>"><?php echo ($produto->Nm_Prod) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-2">
                            <label for="qtd" class="form-label lblcor">Qtd:</label>
                            <input type="number" required class="form-control" id="qtd" name="qtd" placeholder="123" aria-label="">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-10 mb-4">
                            <label for="codcategoria" class="form-label lblcor">Produto:</label>

                            <select class="form-control" id="codcategoria" name="codcategoria" aria-label="Selecione o Produto ">
                                <option selected>Selecione o Produto</option>
                                <?php foreach ($produtos as $produto) : ?>
                                    <option value="<?php echo ($produto->Cod_Prod) ?>"><?php echo ($produto->Nm_Prod) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-2">
                            <label for="qtd2" class="form-label lblcor">Qtd:</label>
                            <input type="number" required class="form-control" id="qtd2" name="qtd2" placeholder="123" aria-label="">
                        </div>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col">
                            <a href="#" class="mt-1" data-toggle="modal" data-target="#cadCategoriaModal">
                                <i class="fas fa-plus"></i>
                            </a>
                            <label for="formapg" class="form-label lblcor">Produto:</label>
                        </div>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col">
                            <label for="formapg" class="form-label lblcor">Forma de Pagamento:</label>
                            <select class="form-control" id="codcategoria" name="formapg" aria-label="Selecione a Forma de PG">
                                <option selected>Selecione a Forma de PG</option>
                                <?php foreach ($formaspg as $formapg) : ?>
                                    <option value="<?php echo ($formapg->Nome_FormaPg) ?>"><?php echo ($formapg->Nome_FormaPg) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col">
                            <label for="descricao" class="form-label lblcor">OBS:</label>
                            <textarea class="form-control" required placeholder="Escreva aqui alguma observação no pedido..." id="descricao" name="descprod" rows="5"></textarea>
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