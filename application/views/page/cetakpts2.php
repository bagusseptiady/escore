<!DOCTYPE html>
<html><head>
	<title>Cetak PDF</title>
    <style>
        table, td, th {  
        border: 1px solid black;
        text-align: left;
    }

        table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 10px;
    }

        th, td {
        padding: 15px;
    }
        h3 {
            text-align: center;
        }
</style>
</head><body>
	<h3> Hasil Penilaian Tengah Semester 2</h3>
    <?php foreach ($siswa as $data) {?>
    <p> Nama Siswa : <?= $data->Nama; ?> <br>
        Jurusan : <?= $data->Nama_Jurusan;?><br>
        Kelas : <?= $data->Nama_Kelas;?>
    </p>
    <?php }?>
	<table>
            <tr>
				<th>No</th>
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