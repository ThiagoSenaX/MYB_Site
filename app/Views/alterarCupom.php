 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Content Row -->

     <div class="container p-5 bg-white rounded shadow">

         <h3 class="text-center mt-0 mb-2 text-dark font-weight-bold">Cupom: #<?php echo ($cupom->Cod_Cupom) ?></h3>
         <hr>
         <form method="post">

             <input type="hidden" name="codCupomAlterar" class="form-control" id="codProd" value="<?php echo ($cupom->Cod_Cupom) ?>" readonly>
             <input type="hidden" name="ativoCupom" class="form-control" id="ativo" value="1" readonly>
             <div class="row">
                 <div class="col-8 mb-4">
                     <label for="nome" class="form-label lblcor">Código do cupom:</label>
                     <input type="text" class="form-control" value="<?php echo ($cupom->Codigo_Cupom) ?>" id="codigoCupom" name="codigoCupom" placeholder="CUPOMEXEMPLO" aria-label="" value="FRETEGRATIS">
                 </div>

                 <div class="col mb-4">
                     <label for="preco" class="form-label lblcor">% Desconto:</label>
                     <input type="number" class="form-control" value="<?php echo ($cupom->Desconto_Cupom) ?>" id="preco" name="descontoCupom" placeholder="10" aria-label="" value="10">
                 </div>
             </div>
             <div class="row g-3 mb-4">
                 <div class="col">
                     <label for="descricao" class="form-label lblcor">Descrição:</label>
                     <textarea class="form-control" placeholder="Escreva aqui a descrição do cupom, requisitos e outros..." id="descricao" name="descrCupom" rows="5"><?php echo ($cupom->Desc_Cupom) ?></textarea>
                 </div>
             </div>
             <div class="row">
                 <div class="col-6">
                     <a href="<?php echo base_url('./MarketingController/Marketing') ?>" style="text-decoration: none;">
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