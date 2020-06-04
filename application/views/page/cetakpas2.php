<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>
	<h3 style="text-align: center"> Hasil Penilaian Akhir Semester 2</h3>
	    <table class="table table-hover table-bordered table-striped text-nowrap">
            <tr>
                <th>No</th>
                <th>Mata Pelajaran</th>
                <th>PAS</th>
                <th>KKM</th>
                <th>Nilai Pengetahuan</th>
                <th>KKM</th>
                <th>Nilai Keterampilan</th>
                <th>KKM</th>
            </tr>
            <?php $no=1; 
            foreach($pas as $data){
            if($data->Semester&&$data->Matpel!=NULL){?>
            <tr>
                <td><?=  $no++ ?></td>
                <td><?= $data->Nama_Matpel;?></td>
                <td><?= $data->PAS;?></td>
                <td><?= $data->KKMA;?></td>
                <td><?= $data->NP;?></td>
                <td><?= $data->KKM;?></td>
                <td><?= $data->NK;?></td>
                <td><?= $data->KKM2;?></td>
            </tr>
            <?php } else{?>
            <?php }?>
            <?php }?>
         </table>			
</body></html>