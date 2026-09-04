<?php

include 'connection.php';

// Ambil semua data dari tabel data_kelas
$query = "SELECT * FROM data_kelas";

$result = mysqli_query($koneksi, $query);

// Cek apakah query berhasil
if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Kelas</title>
</head>

<body>

    <h2>Data Kelas</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama_Kelas</th>
                <th>Jumlah_Siswa</th>
            </tr>
        </thead>

        <tbody>

            <?php
            

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";

               
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['Nama_kelas'] . "</td>";
                echo "<td>" . $row['jumlah_siswa'] . "</td>";

                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

</body>
</html>