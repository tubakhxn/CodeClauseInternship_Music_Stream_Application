      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Uprising.com 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
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
        <div class="modal-body">Sure want to LogOut?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
          <a class="btn btn-primary" href="logout.php">Yes</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/sbadm0n/vendor/jquery/jquery.min.js"></script>
  <script src="assets/sbadm0n/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/sbadm0n/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/sbadm0n/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="assets/sbadm0n/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/sbadm0n/js/demo/chart-area-demo.js"></script>
  <script src="assets/sbadm0n/js/demo/chart-pie-demo.js"></script>
  <script src="assets/js/wow.js"></script>
  <script>
    const music = new Audio();
    $('.btnPp').on('click', function(e) {
      const track = $(this).data('name');

      if(music.paused) {
        e.target.classList.replace('fa-play-circle', 'fa-pause-circle');
        music.src = 'assets/tracks/' + track;
        music.play();
        music.addEventListener('ended',function(){
          e.target.classList.replace('fa-pause-circle', 'fa-play-circle');
          music.pause();
        });
      } else {
        e.target.classList.replace('fa-pause-circle', 'fa-play-circle');
        music.pause();
      }
    });

    function deleteTrack(e) {
      alert('asd');
    }
  </script>
  <script>
  new WOW().init();
  </script>
</body>

</html>
