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
        height: 20px;
        width: 100%;
        margin-top: 5px;
    }
        th, td {
        padding: 5px;
    }
        h3{
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