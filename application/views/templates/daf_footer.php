<script src="<?= base_url('assets/')?>plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/')?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/')?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url('assets/')?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?= base_url('assets/')?>dist/js/adminlte.min.js"></script>
<script src="<?= base_url('assets/')?>dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
<script type="text/javascript">
        $(document).ready(function(){
 
            $('#sekolah').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('auth/get_sub_category');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id_sub+'>'+data[i].Nama_Kelas+'</option>';
                        }
                        $('#subsekolah').html(html);
 
                    }
                });
                return false;
            }); 
             
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
 
            $('#subsekolah').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('auth/get_subnm');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id_user+'>'+data[i].Nama+'</option>';
                        }
                        $('#nam').html(html);
 
                    }
                });
                return false;
            }); 
             
        });
    </script>
    
<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>
</body>
</html>