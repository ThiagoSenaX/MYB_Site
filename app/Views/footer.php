        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header rounded-3">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Deseja mesmo sair?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-dark">Selecione "Log Out" se você realmente deseja encerrar a sessão.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="<?php echo base_url('./LoginController/Login') ?>">Log Out</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('./vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('./vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('./vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('./js/sb-admin-2.min.js')?>"></script>

    <!-- Script para mascaras -->
    <script src="<?php echo base_url('./js/mascara.js')?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('./vendor/chart.js/Chart.min.js')?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('./js/demo/chart-area-demos.js')?>"></script>
    <script src="<?php echo base_url('./js/demo/chart-pie-demos.js')?>"></script>
    <script src="<?php echo base_url('./js/demo/chart-pie2-demos.js')?>"></script>
    <script src="<?php echo base_url('./js/demo/chart-pie3-demos.js')?>"></script>
    <script src="<?php echo base_url('./js/demo/chart-bar-demo.js')?>"></script>

</body>

</html>