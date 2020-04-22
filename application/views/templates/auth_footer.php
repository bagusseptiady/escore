<!-- jQuery -->
<script src="<?= base_url('assets/')?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/')?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/')?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="<?= base_url('assets/')?>dist/js/adminlte.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
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
</body>
</html>