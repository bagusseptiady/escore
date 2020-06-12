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
    Jurusan : <?= $data->Nama_Jurusan;?><br>
    Kelas : <?= $data->Nama_Kelas;?>
    <?php }?>
	<table>
            <tr>
				<th width="3px">No</th>
                <th>Mata Pelajaran</th>
                <th>Nilai Harian</th>
                <th>PTS</th>
                <th>KKM</th>
                <th>Predikat</th>
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
                <td><?= $data->Predikat;?></td>
            </tr>
            <?php } else{?>
            <?php }?>
            <?php }?>
        </table><br><br>
        <table style="width: 30%;">
            <tr>
                <th colspan="2" style="text-align: center;">Absen Siswa</th>
            </tr> 
            <?php foreach($dee as $data){?>
            <tr>
                <td>Alfa</td>
                <td><?= $data->Alpa;?></td>
            </tr>
            <tr>
                <td>Sakit</td>
                <td><?= $data->Sakit;?></td>
            </tr>
            <tr>
                <td>Izin</td>
                <td><?= $data->Izin;?></td>
            </tr>
            <?php }?>
         </table><br><br>
        <table style="border: 0px;">
            <tr >
                <td style="text-align:left; border:0px; padding-left: 35px;">Orang Tua</td>
                <td style="text-align:center; border:0px;">Kepala Sekolah</td>
                <td style="text-align:right; border:0px; padding-right: 55px;">Guru</td>
            </tr>
            <tr>
                <td style="border:0px; height: 50px;"></td>
                <td style="border:0px; height: 50px;"></td>
                <td style="border:0px; height: 50px;"></td>
            </tr>
            <tr>
				<td style="text-align:left; border:0px;">_______________</td>
                <td style="text-align:center; border:0px;">_______________</td>
                <td style="text-align:right; border:0px;">_______________</td>
        	</tr>
        </table>			
</body></html>