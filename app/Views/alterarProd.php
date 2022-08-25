 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Content Row -->

     <div class="container p-5 bg-white rounded shadow">

         <h3 class="text-center mt-0 mb-2 text-dark font-weight-bold">Produto: #<?php echo ($produto->Cod_Prod) ?></h3>
         <hr>
         <form method="Post" enctype="multipart/form-data">
             <input type="hidden" name="codProdAlterar" class="form-control" id="codProd" value="<?php echo ($produto->Cod_Prod) ?>" readonly>
             <input type="hidden" name="ativoprod" class="form-control" id="ativo" value="1" readonly>
             <div class="row">
                 <div class="col-8 mb-4">
                     <label for="nomeprod" class="form-label lblcor">Nome:</label>
                     <input type="text" class="form-control" style="color: #000000;" id="nome" name="nomeprodalt" value="<?php echo ($produto->Nm_Prod) ?>">
                 </div>
                 <div class="col-4 mb-4">
                     <label for="codforn" class="form-label lblcor">Fornecedor/Marca:</label>
                     <select class="form-control" style="color: #000000;" id="fornecedor" name="fornprodalt" aria-label="Selecione o Fornecedor">
                         <option <?php isset($fornecedorSelec->Nm_Fantasia_Forn)?print("selected"):"";?> value="<?php echo($fornecedorSelec->Cod_Forn)?>"><?php echo($fornecedorSelec->Nm_Fantasia_Forn)?></option>
                         <?php foreach ($fornecedores as $fornecedor) : ?>
                             <option style="color: #000000;" value="<?php echo ($fornecedor->Cod_Forn) ?>"><?php echo ($fornecedor->Nm_Fantasia_Forn) ?></option>
                         <?php endforeach; ?>
                     </select>
                 </div>
             </div>
             <div class="row g-3">
                 <div class="col mb-4">
                     <label for="codcategoria" class="form-label lblcor">Categoria:</label>

                     <select class="form-control" style="color: #000000;" id="categoria" name="cateprodalt" aria-label="Selecione a Categoria">
                        <option <?php isset($categoriaSelec->Nm_Categoria)?print("selected"):"";?> value="<?php echo($categoriaSelec->Cod_Categoria)?>"><?php echo($categoriaSelec->Nm_Categoria)?></option>
                         <?php foreach ($categorias as $categoria) : ?>
                             <option style="color: #000000;" value="<?php echo ($categoria->Cod_Categoria) ?>"><?php echo ($categoria->Nm_Categoria) ?></option>
                         <?php endforeach; ?>
                     </select>
                 </div>
                 <div class="col mb-4">
                     <label for="preco" class="form-label lblcor">Preço:</label>
                     <input type="tel" style="color: #000000;" required class="form-control" value="<?php echo ($produto->Preco_Prod) ?>" id="preco" name="precoprodalt" placeholder="R$" aria-label="">
                 </div>
                 <div class="col mb-4">
                     <label for="estoque" class="form-label lblcor">Qtd. Estoque:</label>
                     <input type="number" style="color: #000000;" required class="form-control" value="<?php echo ($produto->Qtd_Estoque_Prod) ?>" id="estoque" name="qtdprodalt" placeholder="Ex: 123" aria-label="">
                 </div>
             </div>
             <div class="row g-3 mb-4">
                 <div class="col">
                     <label for="descricao" class="form-label lblcor">Descrição:</label>
                     <textarea class="form-control" style="color: #000000;" required placeholder="Escreva aqui a descrição do produto..." id="descricao" name="descprodalt" rows="2"><?php echo ($produto->Desc_Prod) ?></textarea>
                 </div>
             </div>
             <div class="row g-3 mb-4">
                 <div class="col-12 text-left">
                     <label for="img" class="form-label lblcor"><i class="fas fa-images"></i> Imagem:</label>
                     <input type="file" name="imgprod" id="imgprod"><br>
                 </div>
             </div>
             <hr>
             <div class="row">
                 
                 <div class="col-6">
                 <a href="<?php echo base_url('./ProdutoController/Produtos')?>" style="text-decoration: none;">
                     <button class="btn btn-secondary btn-lg btn-block" type="button">Cancelar</button>
                     </a>
                    </div>
                 
                 <div class="col-6 ml-auto">
                     <button class="btn btn-success btn-lg btn-block" type="submit">Alterar</button></a>
                 </div>
             </div>
         </form>

     </div>

 </div>