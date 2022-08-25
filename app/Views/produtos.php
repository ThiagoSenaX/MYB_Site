 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Content Row -->

     <div class="container p-5 bg-white rounded shadow">

         <h2 class="text-center mb-4 text-dark font-weight-bold">Produtos</h2>

         <hr>
         <div class="row">

             <!-- Botão cadastro produto -->
             <div class="col-12 col-sm-12 col-md-6 col-lg-3">

                 <a href="#" class="btn btn-success btn-icon-split mb-4" data-toggle="modal" data-target="#cadProdutoModal">
                     <span class="icon text-white-50">
                         <i class="fas fa-plus"></i>
                     </span>
                     <span class="text"> Cadastrar Produto</span>
                 </a>
             </div>

             <!-- Botão cadastro categoria -->
             <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                 <a href="#" class="btn btn-info btn-icon-split mb-4" data-toggle="modal" data-target="#cadCategoriaModal">
                     <span class="icon text-white-50">
                         <i class="fas fa-tag"></i>
                     </span>
                     <span class="text">Categorias</span>
                 </a>
             </div>



             <div class="col-12 col-sm-12 col-md-6 col-lg-3">

                 <a href="#" class="btn btn-warning btn-icon-split mb-4" data-toggle="modal" data-target="#cadFornecedorModal">
                     <span class="icon text-white-50">
                         <i class="fas fa-building"></i>
                     </span>
                     <span class="text">Fornecedores</span>
                 </a>
             </div>


             <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                 <form class="form-inline navbar-search">
                     <div class="input-group text-right">
                         <input type="text" class="form-control bg-light border-0 small" placeholder="Proucurar por..." aria-label="Proucurar">
                         <div class="input-group-append">
                             <button class="btn btn-primary" type="button">
                                 <i class="fas fa-search fa-sm"></i>
                             </button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
         <div class="table-responsive mt-3 mt-lg-1">
             <table class="table text-dark">
                 <thead>
                     <tr>
                         <th scope="col">#</th>
                         <th>Habilitado</th>
                         <th class="text-center">Imagem</th>
                         <th>Nome</th>
                         <th>Preço</th>
                         <th class="text-center">Estoque</th>
                         <th>Alterar</th>
                     </tr>
                 </thead>
                 <tbody>

                     <?php foreach ($produtos as $produto) :
                        ?>
                         <tr>
                             <th scope="row"><?php echo ($produto->Cod_Prod) ?></th>
                             <td>
                                 <input id="switch<?php echo ($produto->Cod_Prod) ?>" class="switch" type="checkbox" value="" checked>
                                 <label for="switch<?php echo ($produto->Cod_Prod) ?>"></label>
                             </td>
                             <td class="text-center"><img src="<?php echo base_url($produto->Img_Prod)?>" height="60"></td>
                             <td><?php echo ($produto->Nm_Prod) ?></td>
                             <td>R$ <?php echo ($produto->Preco_Prod) ?></td>
                             <td class="text-center"><?php echo ($produto->Qtd_Estoque_Prod) ?></td>
                             <td>
                                <form method="POST">
                                    <input type="hidden" name="codProd" value="<?php echo ($produto->Cod_Prod) ?>">
                                    <button type="submit" class="btn btn-primary rounded-circle"><i class="fas fa-pencil-alt fa-2x"></i></button>
                                </form> 
                                 <!--<button type="button" class="btn btn-info" data-toggle="modal" data-target="#produtoModal"
                                 data-codigo='<?//php echo ($produto->Cod_Prod) ?>'
                                 data-nome='<?//php echo ($produto->Nm_Prod) ?>' >
                                     <i class="fas fa-pencil-alt fa-2x"></i>
                                 </button>-->
                             </td>
                         </tr>
                     <?php endforeach; ?>


                     
                 </tbody>
             </table>
             <a href="#" style="text-decoration: none;">
                <h6 class="text-center" style="font-weight: 700;">Mostrar mais produtos...</h6>
            </a>

            <hr>
         </div>
     </div>


     <div class="modal fade" id="cadProdutoModal" tabindex="-1" aria-labelledby="cadProdutoModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-xl modal-dialog-scrollable">
             <div class="modal-content">
                 <div class="modal-header">
                     <i class="fas fa-plus mt-1 mr-1 text-light"></i><i class="fas fa-box-open fa-2x text-white"></i>
                     <h5 class="modal-title text-center text-white ml-3">Cadastrar Produto:</h5>
                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true" class="text-white">×</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form method="Post" enctype="multipart/form-data">
                         <input type="hidden" name="cadProd" class="form-control" id="cadProd" value="1" readonly>
                         <input type="hidden" name="ativoprod" class="form-control" id="ativo" value="1" readonly>
                         <div class="row">
                             <div class="col-8 mb-4">
                                 <label for="nomeprod" class="form-label lblcor">Nome:</label>
                                 <input type="text" required class="form-control" id="nomeprod" name="nomeprod" placeholder="Nome produto" aria-label="">
                             </div>
                             <div class="col-4 mb-4">
                                 <a href="#" class="mt-1" data-toggle="modal" data-target="#cadFornecedorModal">
                                     <i class="fas fa-plus"></i>
                                 </a>
                                 <label for="codforn" class="form-label lblcor">Fornecedor/Marca:</label>
                                 <select class="form-control" id="codforn" name="codforn" aria-label="Selecione o Fornecedor">
                                     <option selected>Selecione o Fornecedor</option>
                                     <?php foreach ($fornecedores as $fornecedor) : ?>
                                         <option value="<?php echo ($fornecedor->Cod_Forn) ?>"><?php echo ($fornecedor->Nm_Fantasia_Forn) ?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                         </div>
                         <div class="row g-3">
                             <div class="col mb-4">
                                 <a href="#" class="mt-1" data-toggle="modal" data-target="#cadCategoriaModal">
                                     <i class="fas fa-plus"></i>
                                 </a>

                                 <label for="codcategoria" class="form-label lblcor">Categoria:</label>

                                 <select class="form-control" id="codcategoria" name="codcategoria" aria-label="Selecione a Categoria">
                                     <option selected>Selecione a Categoria</option>
                                     <?php foreach ($categorias as $categoria) : ?>
                                         <option value="<?php echo ($categoria->Cod_Categoria) ?>"><?php echo ($categoria->Nm_Categoria) ?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                             <div class="col mb-4">
                                 <label for="preco" class="form-label lblcor">Preço:</label>
                                 <input type="tel" required class="form-control" id="preco" name="precoprod" placeholder="R$" aria-label="">
                             </div>
                             <div class="col mb-4">
                                 <label for="estoque" class="form-label lblcor">Qtd. Estoque:</label>
                                 <input type="number" required class="form-control" id="estoque" name="qtdprod" placeholder="Ex: 123" aria-label="">
                             </div>
                         </div>
                         <div class="row g-3 mb-4">
                             <div class="col">
                                 <label for="descricao" class="form-label lblcor">Descrição:</label>
                                 <textarea class="form-control" required placeholder="Escreva aqui a descrição do produto..." id="descricaoprod" name="descprod" rows="5"></textarea>
                             </div>
                         </div>
                         <div class="col-12 my-auto text-center">
                            <label for="img" class="form-label lblcor"><i class="fas fa-images"></i> Imagem: </label>
                             <input type="file" name="imgprod" id="imgprod"><br>
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

     <div class="modal fade" id="cadCategoriaModal" tabindex="-1" aria-labelledby="cadCategoriaModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-xl modal-dialog-scrollable">
             <div class="modal-content">
                 <div class="modal-header">
                     <i class="fas fa-plus mt-1 mr-1 text-light"></i><i class="fas fa-tag fa-2x text-white"></i>
                     <h5 class="modal-title text-center text-white ml-3">Cadastrar Categoria:</h5>
                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true" class="text-white">×</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form method="Post">
                         <input type="hidden" name="cadCategoria" class="form-control" id="cadCategoria" value="1" readonly>
                         <input type="hidden" name="ativocategoria" class="form-control" id="ativo" value="1" readonly>
                         <div class="row">
                             <div class="col-12 mb-4">
                                 <label for="nome" class="form-label lblcor">Nome:</label>
                                 <input type="text" required class="form-control" id="nomeprod" name="nomecategoria" placeholder="Nome da categoria" aria-label="">
                             </div>


                             <!-- <div class="col-1 my-auto text-center">
                                <label for="img" class="form-label lblcor"><i class="fas fa-images"></i></label>
                                 <input type="file" name="img" id="img"><br>
                             </div> -->
                         </div>
                         <div class="row g-3 mb-4">
                             <div class="col">
                                 <label for="descricao" class="form-label lblcor">Descrição:</label>
                                 <textarea class="form-control" required placeholder="Escreva aqui a descrição da categoria..." id="descricao" name="desccategoria" rows="5"></textarea>
                             </div>
                         </div>
                         <div class="row mb-3 ml-auto">
                             <div class="col-12 ml-auto text-right">
                                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                 <button class="btn btn-success" type="submit">Cadastrar</button></a>
                             </div>
                         </div>
                     </form>
                     <div class="modal-footer">
                         <div class="table-responsive">
                             <h3 class="text-center m-3 text-dark font-weight-bold">Categorias:</h3>
                             <table class="table text-dark">
                                 <thead>
                                     <tr>
                                         <th scope="col">#</th>
                                         <th scope="col">Habilitado</th>
                                         <th scope="col">Categoria</th>
                                         <th scope="col">Descrição</th>
                                         <th scope="col">Alterar</th>
                                     </tr>
                                 </thead>
                                 <tbody>

                                     <?php foreach ($categorias as $categoria) : ?>
                                         <tr>
                                             <th scope="row"><?php echo ($categoria->Cod_Categoria) ?></th>
                                             <td>
                                                 <input id="switch<?php echo ($categoria->Cod_Categoria) ?>" class="switch" type="checkbox" value="" checked>
                                                 <label for="switch<?php echo ($categoria->Cod_Categoria) ?>"></label>
                                             </td>
                                             <td><?php echo ($categoria->Nm_Categoria) ?></td>
                                             <td><?php echo ($categoria->Desc_Categoria) ?></td>
                                             <td><a class="dropdown-item" href="#" data-toggle="modal" data-target="#CategoriaModal"><i class="fas fa-pencil-alt fa-2x" style="color: rgb(0, 132, 255);"></i></a></td>
                                         </tr>
                                     <?php endforeach; ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>


                 </div>
             </div>
         </div>
     </div>


     <div class="modal fade" id="cadFornecedorModal" tabindex="-1" aria-labelledby="cadFornecedorModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-xl modal-dialog-scrollable">
             <div class="modal-content">
                 <div class="modal-header">
                     <i class="fas fa-plus mt-1 mr-1 text-light"></i><i class="fas fa-building fa-2x text-white"></i>
                     <h5 class="modal-title text-center text-white ml-3">Cadastrar Fornecedor:</h5>
                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true" class="text-white">×</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form method="Post">
                         <input type="hidden" name="cadFornecedor" class="form-control" id="cadFornecedor" value="1" readonly>
                         <div class="row">
                             <div class="col-12 mb-4">
                                 <label for="nome" class="form-label lblcor">Nome:</label>
                                 <input type="text" required class="form-control" id="nomeforn" name="nomeforn" placeholder="Nome fornecdor" aria-label="">
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-6 mb-4">
                                 <label for="nome" class="form-label lblcor">Telefone 1:</label>
                                 <input type="text" required class="form-control" id="tel1forn" name="tel1forn" placeholder="(11)4004-9999" aria-label="">
                             </div>
                             <div class="col-6 mb-4">
                                 <label for="nome" class="form-label lblcor">Telefone 2 (Opcional):</label>
                                 <input type="text" class="form-control" id="tel2forn" name="tel2forn" placeholder="(11)4004-0000" aria-label="">
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-12 mb-4">
                                 <label for="nome" class="form-label lblcor">E-mail:</label>
                                 <input type="email" required class="form-control" id="emailforn" name="emailforn" placeholder="fornecedor@email.com" aria-label="">
                             </div>
                         </div>

                         <div class="row mb-3 ml-auto">
                             <div class="col-12 ml-auto text-right">
                                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                 <button class="btn btn-success" type="submit">Cadastrar</button></a>
                             </div>
                         </div>
                     </form>
                     <div class="modal-footer">

                         <div class="table-responsive">
                             <h3 class="text-center m-3 text-dark font-weight-bold">Fornecedores:</h3>
                             <table class="table text-dark">
                                 <thead>
                                     <tr>
                                         <th scope="col">#</th>
                                         <th scope="col">Nome</th>
                                         <th scope="col">Telefone1</th>
                                         <th scope="col">Telefone2</th>
                                         <th scope="col">E-mail</th>
                                         <th scope="col">Alterar</th>
                                     </tr>
                                 </thead>
                                 <tbody>

                                     <?php foreach ($fornecedores as $fornecedor) : ?>
                                         <tr>
                                             <th scope="row"><?php echo ($fornecedor->Cod_Forn) ?></th>
                                             <td><?php echo ($fornecedor->Nm_Fantasia_Forn) ?></td>
                                             <td><?php echo ($fornecedor->Tel1_Forn) ?></td>
                                             <td><?php echo ($fornecedor->Tel2_Forn) ?></td>
                                             <td><?php echo ($fornecedor->Email_Forn) ?></td>
                                             <td><a class="dropdown-item" href="#" data-toggle="modal" data-target="#CategoriaModal"><i class="fas fa-pencil-alt fa-2x" style="color: rgb(0, 132, 255);"></i></a></td>
                                         </tr>
                                     <?php endforeach; ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="modal fade" id="produtoModal" tabindex="-1" aria-labelledby="produtoModal" aria-hidden="true">
         <div class="modal-dialog modal-xl modal-dialog-scrollable">
             <div class="modal-content">
                 <div class="modal-header text-white">
                     <i class="fas fa-box-open fa-2x text-white mr-3"></i>
                     <h5 class="modal-title text-center text-white">Produto: #</h5>
                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true" class="text-white">×</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form method="Post">
                         <input type="hidden" name="cadProd" class="form-control" id="cadProd" value="1" readonly>
                         <input type="hidden" name="ativoprod" class="form-control" id="ativo" value="1" readonly>
                         <div class="row">
                             <div class="col-8 mb-4">
                                 <label for="nomeprod" class="form-label lblcor">Nome:</label>
                                 <input type="text" class="nome form-control" id="nome" name="nomeprodalt">
                             </div>
                             <div class="col-4 mb-4">
                                 <a href="#" class="mt-1" data-toggle="modal" data-target="#cadFornecedorModal">
                                     <i class="fas fa-plus"></i>
                                 </a>
                                 <label for="codforn" class="form-label lblcor">Fornecedor/Marca:</label>
                                 <select class="form-control" id="fornecedor" name="codfornalt" aria-label="Selecione o Fornecedor">
                                     <option selected>Selecione o Fornecedor</option>
                                     <?php foreach ($fornecedores as $fornecedor) : ?>
                                         <option value="<?php echo ($fornecedor->Cod_Forn) ?>"><?php echo ($fornecedor->Nm_Fantasia_Forn) ?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                         </div>
                         <div class="row g-3">
                             <div class="col mb-4">
                                 <a href="#" class="mt-1" data-toggle="modal" data-target="#cadCategoriaModal">
                                     <i class="fas fa-plus"></i>
                                 </a>

                                 <label for="codcategoria" class="form-label lblcor">Categoria:</label>

                                 <select class="form-control" id="categoria" name="codcategoriaalt" aria-label="Selecione a Categoria">
                                     <option selected>Selecione a Categoria</option>
                                     <?php foreach ($categorias as $categoria) : ?>
                                         <option value="<?php echo ($categoria->Cod_Categoria) ?>"><?php echo ($categoria->Nm_Categoria) ?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                             <div class="col mb-4">
                                 <label for="preco" class="form-label lblcor">Preço:</label>
                                 <input type="tel" required class="form-control" id="preco" name="precoprod" placeholder="R$" aria-label="">
                             </div>
                             <div class="col mb-4">
                                 <label for="estoque" class="form-label lblcor">Qtd. Estoque:</label>
                                 <input type="number" required class="form-control" id="estoque" name="qtdprod" placeholder="Ex: 123" aria-label="">
                             </div>
                         </div>
                         <div class="row g-3 mb-4">
                             <div class="col">
                                 <label for="descricao" class="form-label lblcor">Descrição:</label>
                                 <textarea class="form-control" required placeholder="Escreva aqui a descrição do produto..." id="descricao" name="descprod" rows="5"></textarea>
                             </div>
                         </div>
                         <div class="col-1 my-auto text-center">
                             <label for="img" class="form-label lblcor"><i class="fas fa-images"></i></label>
                             <input type="file" name="imgprod" id="imgprod"><br>
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

 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->