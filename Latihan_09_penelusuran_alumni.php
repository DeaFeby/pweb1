<h3>FORM DATA ALUMNI</h3>
<hr>
<?php
include 'Latihan_09_config.php'; //memasukkan file konfigurasi untuk koneksi database

// Handle Pencarian Alumni
$searchQuery = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
    $searchQuery = $_POST['search'];
}

// Menampilkan daftar alumni berdasarkan pencarian atau semua alumni
$sql = "SELECT * FROM alumni";
if ($searchQuery != "") {
    $sql .= " WHERE nama LIKE '%$searchQuery%'";
}
$result = $conn->query($sql);
?>

<!-- Form Pencarian Alumni -->
<div class="container mt-3">
    <h2>Cari Alumni</h2>
    <form method="POST" action="">
        <div class="mb-3">
            <input type="text" class="form-control" name="search" placeholder="Cari nama alumni..." value="<?php echo $searchQuery; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Cari</button>
    </form>
</div>

<!-- Tampilkan Daftar Alumni -->
<div class="container mt-5">
    <h2>Daftar Alumni</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tahun Lulus</th>
                <th>Jurusan</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['tahun_lulus'] . "</td>";
                    echo "<td>" . $row['jurusan'] . "</td>";
                    echo "<td><img src='" . $row['foto'] . "' width='50' height='50'></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Tidak ada alumni ditemukan.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
$conn->close();
?>