<!DOCTYPE html>
<html><head>
	<title>Cetak PDF</title>
    <style>
        body {
        font-family: sans-serif;
    }
        table, td, th {  
        border: 1px solid black;
        text-align: left;
    }

        table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 5px;
    }

        th, td {
        padding: 5px;
    }
        h3, h4 {
            text-align: center;
        }
</style>
</head><body>
    <h3> Hasil Penilaian Tengah Semester 1</h3>
    <h3 style="margin-top: 0px;"> SMKN 24 Jakarta </h3>
    <?php foreach ($siswa as $data) {?>
    Nama Siswa : <?= $data->Nama; ?> <br>
    Jurusan &emsp : <?= $data->Nama_Jurusan;?><br>
    Kelas &emsp : <?= $data->Nama_Kelas;?>
    <?php }?>
	<table>
            <tr>
				<th width="3px">No</th>
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