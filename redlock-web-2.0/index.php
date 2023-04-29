<?php
$servername = "172.18.0.2";
$username = "root";
$password = "root";
$dbname = "Redlock";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari tabel 'users'
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Menampilkan keseluruhan data dalam sebuah tabel
if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jabatan</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["ID"] . "</td>
                <td>" . $row["Nama"] . "</td>
                <td>" . $row["Alamat"] . "</td>
                <td>" . $row["Jabatan"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No data found.";
}

// Tutup koneksi database
$conn->close();
?>
