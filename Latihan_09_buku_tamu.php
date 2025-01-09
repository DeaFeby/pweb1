<h3>Buku Tamu</h3>
<hr>
<div class="container">
    <h4>Isi Buku Tamu</h4>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" name="pesan" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>

<?php
include 'Latihan_09_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $pesan = $_POST['pesan'];

    $sql = "INSERT INTO buku_tamu (nama, pesan) VALUES ('$nama', '$pesan')";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success mt-3'>Pesan berhasil ditambahkan.</div>";
    } else {
        echo "<div class='alert alert-danger mt-3'>Error: " . $conn->error . "</div>";
    }
}
?>

<div class="container mt-5">
    <h4>Daftar Buku Tamu</h4>
    <?php
    $sql = "SELECT * FROM buku_tamu ORDER BY id DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='border p-3 mb-3'>
                    <h5>" . htmlspecialchars($row['nama']) . "</h5>
                    <p>" . htmlspecialchars($row['pesan']) . "</p>
                  </div>";
        }
    } else {
        echo "<p>Belum ada pesan.</p>";
    }
    ?>
</div>
