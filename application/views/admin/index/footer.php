 <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Smega & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo base_url('asset/majes/');?>vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo base_url('asset/majes/');?>vendors/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url('asset/majes/');?>vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?php echo base_url('asset/majes/');?>vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url('asset/majes/');?>js/off-canvas.js"></script>
  <script src="<?php echo base_url('asset/majes/');?>js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url('asset/majes/');?>js/template.js"></script>

  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url('asset/majes/');?>js/dashboard.js"></script>
  <script src="<?php echo base_url('asset/majes/');?>js/data-table.js"></script>

   <!-- swet -->
  <script src="<?php echo base_url();?>asset/sweet/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/sweet/dist/sweetalert.css">
  <script src="<?php echo base_url();?>asset/myjs/myscript.js" type="text/javascript"></script>
  <script type="text/javascript" src="<?php echo base_url('asset/myjs/logout.js');?>"></script>

  <script src="<?php echo base_url('asset/majes/');?>js/file-upload.js"></script>


  <!-- End custom js for this page-->
  <script type="text/javascript">
    $(document).ready( function () {
    $('#user').DataTable();
} );
  </script>


<script>
var hasil1 = $('#hasil1').attr('data-isi');
var hasil2 = $('#hasil2').attr('data-isi');
var hasil3 = $('#hasil3').attr('data-isi');

var nama1 = $('#nama1').attr('data-isi');
var nama2 = $('#nama2').attr('data-isi');
var nama3 = $('#nama3').attr('data-isi');
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [nama1, nama2, nama3],
        datasets: [{
            label: '# Jumlah suara',
            data: [hasil1, hasil2, hasil3, 32, 2, 3],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

<!-- berhasil di tambahkan /admin/kandidat -->
<script type="text/javascript">
  var berhasil = $('#berhasil').attr('data-isi');

  if(berhasil){
    swal({
      title:"",
       text:berhasil  , 
       type:"success"
    });
  }
</script>

<!-- latihan -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#kirim').click(function(){
      var email = $('#email').val();
      console.log(email);

      $.ajax({
        url: "<?php echo site_url('admin/latihan_aksi');?>",
        type: POST,
        data: email,
        success: function(){
          console.log("berhasil");
        }
      })
    });
  })
</script>
</body>

</html>

