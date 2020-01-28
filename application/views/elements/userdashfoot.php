<!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Traincheck <?php echo date('Y');?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top" style="display: none;">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url("index.php/welcome/logout"); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script>
<!-- Plugin JavaScript -->
<script src="<?php echo base_url("assets/js/jquery.easing.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/jquery.magnific-popup.min.js"); ?>"></script>
<!-- Custom scripts for this template -->
<script src="<?php echo base_url("assets/js/Chart.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/chart-area-demo.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/chart-pie-demo.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/userDash.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/castomProfileAll.js"); ?>"></script>




</body></html>