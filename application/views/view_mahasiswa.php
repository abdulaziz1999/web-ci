<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    Data Mahasiswa

    <?php //echo "<pre>"; print_r($list_mhs); echo "</pre>";?>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>IPK</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach($dataMahasiswa as $row):?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $row->nim?></td>
                <td><?= $row->nama?></td>
                <td><?= $row->gender?></td>
                <td><?= $row->ipk?></td>
                <td><?= $row->prodi_kode?></td>
            </tr>    
        <?php endforeach;?>
        </tbody>
    </table>

    <hr>
    Data Mahasiswa Join Prodi
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>IPK</th>
                <th>Kode Prodi</th>
                <th>Nama Prodi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach($dataJoin as $row):?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $row->nim?></td>
                <td><?= $row->nama_mahasiswa?></td>
                <td><?= $row->gender?></td>
                <td><?= $row->ipk?></td>
                <td><?= $row->prodi_kode?></td>
                <td><?= $row->nama_prodi?></td>
            </tr>    
        <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>