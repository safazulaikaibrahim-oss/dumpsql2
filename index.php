<?php

include 'connection.php';

$query = "SELECT * FROM data_kelas";

$result = mysqli_query( $koneksi, $query );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil data </title>

</head>
<body>
      <table border="1"> 
        <thead>
            <th>NO</th>
            <th>id</th>
            <th>Nama_kelas</th>
            <th>jumlah_siswa</th>

      </thead>
      </tbody>
        <?php
            $no =1;

            while($row = mysqli_fetch_assoc($result)){
                echo "<try>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['Nama_kelas'] . "</td>";
                echo "<td>" . $row['jumlah_siswa'] . "</td>";
           
            }
        ?>
        </tbody>
</tbody>
</table>
</body>