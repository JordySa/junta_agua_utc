
</div>
</div>
        </div>
        </div>
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p> 
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url(); ?>/assets/vendor/global/global.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/quixnav-init.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="<?php echo base_url(); ?>/assets/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/morris/morris.min.js"></script>


    <script src="<?php echo base_url(); ?>/assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="<?php echo base_url(); ?>/assets/vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="<?php echo base_url(); ?>/assets/vendor/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="<?php echo base_url(); ?>/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="<?php echo base_url(); ?>/assets/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="<?php echo base_url(); ?>/assets/js/dashboard/dashboard-1.js"></script>
    <!-- Datatable -->

</body>

<?php if ($this->session->flashdata("confirmacion")): ?>
  <script type="text/javascript">
    iziToast.success({
         title: 'CONFIRMACIÓN',
         message: '<?php echo $this->session->flashdata("confirmacion"); ?>',
         position: 'topRight',
       });
  </script>
<?php endif; ?>

<?php if ($this->session->flashdata("error")): ?>
  <script type="text/javascript">
    iziToast.danger({
         title: 'ADVERTENCIA',
         message: '<?php echo $this->session->flashdata("error"); ?>',
         position: 'topRight',
       });
  </script>
<?php endif; ?>


<?php if ($this->session->flashdata("bienvenida")): ?>
  <script type="text/javascript">
    iziToast.info({
         title: 'CONFIRMACIÓN',
         message: '<?php echo $this->session->flashdata("bienvenida"); ?>',
         position: 'topRight',
       });
  </script>
<?php endif; ?>


<style media="screen">
    .error{
      color:red;
      font-size: 16px;
    }
    input.error, select.error{
      border: 2px solid red;
    }
</style>
</html>