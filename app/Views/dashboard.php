<!-- Begin Page Content -->
<div class="container-fluid">

<h2 class="text-center mb-4 text-dark">Dashboard</h2>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Faturamento</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">R$ 4.146,80</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Ticket Médio</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">R$ 46,00</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pedidos
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">94</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-info"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Clientes</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">125</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">FATURAMENTO MENSAL NO ANO</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">FORMA DE PAGAMENTO</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Boleto
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Cartão crédito
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> Cartão débito
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-6 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">TOP 10 CLIENTES</h6>
            </div>
            <div class="card-body">
                <table class="table text-dark">
                    <thead>
                        <tr>
                            <th scope="col">Nome do Cliente</th>
                            <th scope="col">Qtd</th>
                            <th scope="col">Compras</th>

                        </tr>
                    </thead>
                    <tbody>                           
                        <tr class="my-auto">

                            <td>Marcos César Augusto</td>
                            <td>3</td>
                            <td>R$ 775,00</td>
                            
                        </tr>

                        <tr>
                            <td>Julia Silva da Costa</td>
                            <td>2</td>
                            <td>R$ 696,00</td>            
                        </tr>

                        <tr>
                            <td>Marcelo Junior de Andrade</td>
                            <td>2</td>
                            <td>R$ 556,00</td>            
                        </tr>

                        <tr>
                            <td>Ana Lurdes Blanco</td>
                            <td>4</td>
                            <td>R$ 482,00</td>            
                        </tr>

                        <tr>
                            <td>Victor Gabriel de Araújo</td>
                            <td>2</td>
                            <td>R$ 455,50</td>            
                        </tr>

                        <tr>

                            <td>Marcelo Castro Silva</td>
                            <td>3</td>
                            <td>R$ 423,90</td>
                            
                        </tr>

                        <tr>
                            <td>Fernando Mark Sena</td>
                            <td>2</td>
                            <td>R$ 404,50</td>            
                        </tr>

                        <tr>
                            <td>Thiago Silva Medeiros</td>
                            <td>2</td>
                            <td>R$ 400,90</td>            
                        </tr>

                        <tr>
                            <td>Renata Pereira Bastos</td>
                            <td>2</td>
                            <td>R$ 395,00</td>            
                        </tr>

                        <tr>
                            <td>Alan Marques de Araújo</td>
                            <td>2</td>
                            <td>R$ 392,90</td>            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

    <!-- Content Column -->
    <div class="col-lg-6 mb-4">

        <!-- Project Card Example -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">TOP 10 PRODUTOS</h6>
            </div>
            <div class="card-body">
                <table class="table text-dark">
                    <thead>
                        <tr>
                            <th scope="col">Nome do Produto</th>
                            <th scope="col">Qtd</th>
                            <th scope="col">Vendas</th>

                        </tr>
                    </thead>
                    <tbody>           
                        <tr>
                            <td>Monitor Gamer 25” LG Ultrawide Full</td>
                            <td>2</td>
                            <td>R$ 1.858,00</td>            
                        </tr>

                        <tr>

                            <td>Teclado Gamer Corsair RGB</td>
                            <td>6</td>
                            <td>R$ 1.050,00</td>
                            
                        </tr>

                        <tr>
                            <td>Headset Gamer Razer</td>
                            <td>5</td>
                            <td>R$ 998,00</td>            
                        </tr>

                        <tr>
                            <td>Cadeira Gamer XT Racer Reclinável</td>
                            <td>1</td>
                            <td>R$ 899,00</td>    
                        </tr>

                        <tr>
                            <td>Mouse Gamer RGB</td>
                            <td>5</td>
                            <td>R$ 664,00</td>            
                        </tr>

                        <tr>
                            <td>Teclado Gamer Mecânico RGB</td>
                            <td>4</td>
                            <td>R$ 620,00</td>            
                        </tr>

                        <tr>
                            <td>Headset Gamer Azul Razer</td>
                            <td>2</td>
                            <td>R$ 598,00</td>            
                        </tr>

                        <tr>
                            <td>HeadSet Gamer Verde Razer</td>
                            <td>2</td>
                            <td>R$ 590,00</td>            
                        </tr>
                        
                        <tr>
                            <td>SSD Kingston A400 250GB</td>
                            <td>3</td>
                            <td>R$ 570,00</td>    
                        </tr>

                        <tr>
                            <td>Mouse Sem Fio RGB Multilaser</td>
                            <td>6</td>
                            <td>R$ 570,00</td>
                            
                        </tr>

                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>

<div class="row">

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-4">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">ORIGEM DOS PEDIDOS</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart2"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-danger"></i> Apicativo
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Site
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-4">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">FORMA DE ENTREGA</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart3"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-warning"></i> Entrega
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle" style="color: #FF6347;"></i> Retirada
                    </span>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-4 col-lg-4">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">FATURAMENTO MENSAL</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-bar">
                    <canvas id="myBarChart"></canvas>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-dark">
<div class="container my-auto text-white">
<div class="copyright text-center my-auto">
    <span>Copyright &copy; MYB - Manage Your Business 2021</span>
</div>
</div>
</footer>
<!-- End of Footer -->