<script src="<?= base_url('assets/')?>plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/')?>dist/js/raphael-min.js"></script>
  <script src="<?= base_url('assets/')?>dist/js/morris.min.js"></script>
<!-- jQuery UI 1.12.1 -->
<script src="<?= base_url('assets/')?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/')?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/')?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('assets/')?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/')?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/')?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/')?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/')?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/')?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/')?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/')?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/')?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/')?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/')?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/')?>dist/js/demo.js"></script>
<script>
    Morris.Bar({
    element: 'graph',
    data: <?php echo $dat;?>,
    xkey: 'Semester',
    ykeys: ['NH1', 'NH2', 'NH3', 'NH4', 'NH5'],
    labels: ['Nilai Harian 1', 'Nilai Harian 2', 'Nilai Harian 3', 'Nilai Harian 4', 'Nilai Harian 5']
    });
</script>
<script>
    Morris.Bar({
    element: 'graph3',
    data: <?php echo $dat3;?>,
    xkey: 'Semester',
    ykeys: ['NH', 'PTS'],
    labels: ['Rata-Rata Nilai Harian', 'Penilaian Akhir Semester']
    });
</script>
<script>
    Morris.Bar({
    element: 'graph2',
    data: <?php echo $dat2;?>,
    xkey: 'Semester',
    ykeys: ['PAS', 'NP', 'NK'],
    labels: ['Penilaian Akhir Semester', 'Nilai Pengetahuan', 'Nilai Keterampilan']
    });
</script>
<script type="text/javascript">
        $(document).ready(function(){

         $('#graph').load("<?= base_url();?> page/siswa");

            $("#Submit").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	        : "<?= base_url();?> page/siswa",
                    data        : data,

                    cache	: false,
                    success	: function(data){
                        $('#graph').load("<?= base_url();?> page/siswa");
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){

         $('#graph3').load("<?= base_url();?> page/siswa");

            $("#Submit3").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	        : "<?= base_url();?> page/siswa",
                    data        : data,

                    cache	: false,
                    success	: function(data){
                        $('#graph3').load("<?= base_url();?> page/siswa");
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){

         $('#graph2').load("<?= base_url();?> page/siswa");

            $("#Submit2").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	        : "<?= base_url();?> page/siswa",
                    data        : data,

                    cache	: false,
                    success	: function(data){
                        $('#graph2').load("<?= base_url();?> page/siswa");
                    }
                });
            });
        });
    </script>
</body>
</html>