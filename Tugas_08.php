<?php
// Fungsi untuk membaca data dari file CSV
function readAlumniData($file) {
    $data = [];
    if (file_exists($file)) {
        $handle = fopen($file, 'r');
        while (($row = fgetcsv($handle)) !== false) {
            $data[] = $row;
        }
        fclose($handle);
    }
    return $data;
}

// Fungsi untuk menulis data ke file CSV
function writeAlumniData($file, $data) {
    $handle = fopen($file, 'w');
    foreach ($data as $row) {
        fputcsv($handle, $row);
    }
    fclose($handle);
}

$file = 'alumni.csv'; // File CSV untuk menyimpan data alumni

// Menambahkan alumni baru
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['add'])) {
    $name = $_POST['name'];
    $year = $_POST['year'];
    $major = $_POST['major'];
    $email = $_POST['email'];

    $data = readAlumniData($file);
    $data[] = [$name, $year, $major, $email];
    writeAlumniData($file, $data);

    echo "<div class='alert alert-success' role='alert'>Data alumni berhasil ditambahkan!</div>";
}

// Mengedit data alumni
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['edit'])) {
    $index = $_POST['index'];
    $name = $_POST['name'];
    $year = $_POST['year'];
    $major = $_POST['major'];
    $email = $_POST['email'];

    $data = readAlumniData($file);
    $data[$index] = [$name, $year, $major, $email];
    writeAlumniData($file, $data);

    echo "<div class='alert alert-success' role='alert'>Data alumni berhasil diperbarui!</div>";
}

// Menghapus data alumni
if (isset($_POST['delete'])) {
    $index = $_POST['index'];

    $data = readAlumniData($file);
    unset($data[$index]);
    $data = array_values($data); // Mengatur ulang indeks array
    writeAlumniData($file, $data);

    echo "<div class='alert alert-success' role='alert'>Data alumni berhasil dihapus!</div>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracer Alumni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Tracer Alumni</h1>

        <!-- Formulir Pendaftaran Alumni -->
        <div class="card mb-4">
            <div class="card-body">
                <h4>Tambah/Edit Data Alumni</h4>
                <form method="post" action="">
                    <div class="form-group mb-2">
                        <label for="name">Nama:</label>
                        <input type="text" class="form-control" id="name" name="name" required value="<?php echo isset($alumniToEdit) ? $alumniToEdit[0] : ''; ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="year">Tahun Kelulusan:</label>
                        <input type="number" class="form-control" id="year" name="year" required value="<?php echo isset($alumniToEdit) ? $alumniToEdit[1] : ''; ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="major">Jurusan:</label>
                        <input type="text" class="form-control" id="major" name="major" required value="<?php echo isset($alumniToEdit) ? $alumniToEdit[2] : ''; ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required value="<?php echo isset($alumniToEdit) ? $alumniToEdit[3] : ''; ?>">
                    </div>
                    <input type="hidden" name="index" id="editIndex" value="<?php echo isset($editIndex) ? $editIndex : ''; ?>">
                    <button type="submit" class="btn btn-primary" name="add">Tambah Data</button>
                    <button type="submit" class="btn btn-warning" name="edit">Perbarui Data</button>
                </form>
            </div>
        </div>

        <!-- Daftar Alumni -->
        <div class="card">
            <div class="card-body">
                <h4>Daftar Alumni</h4>
                <table class="table table-striped" id="alumniTable">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Tahun Kelulusan</th>
                            <th>Jurusan</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $data = readAlumniData($file);
                        foreach ($data as $index => $alumnus) {
                            echo "<tr>
                                    <td>{$alumnus[0]}</td>
                                    <td>{$alumnus[1]}</td>
                                    <td>{$alumnus[2]}</td>
                                    <td>{$alumnus[3]}</td>
                                    <td>
                                        <form method='post' action='' style='display:inline;'>
                                            <input type='hidden' name='index' value='{$index}'>
                                            <button type='submit' class='btn btn-warning btn-sm' name='editForm'>Edit</button>
                                        </form>
                                        <form method='post' action='' style='display:inline;'>
                                            <input type='hidden' name='index' value='{$index}'>
                                            <button type='submit' class='btn btn-danger btn-sm' name='delete'>Hapus</button>
                                        </form>
                                    </td>
                                  </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>