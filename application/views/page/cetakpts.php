<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>
	<h3 style="text-align: center"> Hasil Penilaian Tengah Semester </h3>
	<table class="table table-hover table-bordered table-striped text-nowrap mt-2">
            <tr>
				<th>No</th>
                <th>Semester</th>
                <th>Mata Pelajaran</th>
                <th>Nilai Harian</th>
                <th>PTS</th>
                <th>KKM</th>
        	</tr>
        	<?php $no=1; 
            foreach($pts as $data){
            if($data->Semester&&$data->Matpel!=NULL){?>
            <tr>
				<td><?=  $no++ ?></td>
                <td><?= $data->Semester;?></td>
                <td><?= $data->Nama_Matpel;?></td>
                <td><?= $data->NH;?></td>
                <td><?= $data->PTS;?></td>
                <td><?= $data->KKMT;?></td>
            </tr>
            <?php } else{?>
            <?php }?>
            <?php }?>
        </table>			
</body></html>