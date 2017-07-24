<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
    <body>
        <table border = "1" style = "border-collapse:collapse; width:50%;">
            <tr style = "background:gray">
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
            <?php foreach($dta as $d){ ?>
            <tr>
                <td><?php echo $d['nim']?></td>
                <td><?php echo $d['nama']?></td>
                <td><?php echo $d['alamat']?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>