<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOSEN</title>
</head>
<body>
    <div class="col-md-12">
        <h3>Daftar Dosen</h3>
        <table class="table">
            <thead>
                <tr>
                <th>No</th>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Pendidikan</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $nomor=1;
                foreach($list_dsn as $dsn){
            ?>
                <tr>
                    <td><?php echo $nomor ?></td>
                    <td><?php echo $dsn->nidn ?></td>
                    <td><?php echo $dsn->nama ?></td>
                    <td><?php echo $dsn->gender ?></td>
                    <td><?php echo $dsn->pendidikan ?></td>
                </tr>
            <?php
            $nomor++;
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
