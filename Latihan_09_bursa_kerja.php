<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Alumni - Daftar Lowongan Kerja</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .header-title {
            font-size: 36px;
            font-weight: bold;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .btn-primary {
            background-color: #007bff;
            border-color:rgb(190, 221, 255);
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        footer {
            background-color: #f8f9fa;
            color: #6c757d;
        }

        .footer-text {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <header >
        <h1 class="header-title">Daftar Lowongan Kerja</h1>
        <p>Temukan Peluang Karir terbaik untuk Anda</p>
    </header>

    <div class="container">
        <!-- Form Input Lowongan Kerja -->
        <div class="row mb-4">
            <div class="col-md-12">
                <h3>Tambahkan Lowongan Kerja</h3>
                <form id="formLowongan">
                    <div class="form-group">
                        <label for="perusahaan">Nama Perusahaan</label>
                        <input type="text" class="form-control" id="perusahaan" placeholder="Nama Perusahaan" required>
                    </div>
                    <div class="form-group">
                        <label for="posisi">Posisi</label>
                        <input type="text" class="form-control" id="posisi" placeholder="Posisi" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Pekerjaan</label>
                        <textarea class="form-control" id="deskripsi" rows="3" placeholder="Deskripsi Pekerjaan" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kualifikasi">Kualifikasi</label>
                        <textarea class="form-control" id="kualifikasi" rows="3" placeholder="Kualifikasi" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" class="form-control" id="lokasi" placeholder="Lokasi" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Batas Lamaran</label>
                        <input type="date" class="form-control" id="tanggal" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Lowongan</button>
                </form>
            </div>
        </div>

        <!-- Daftar Lowongan Kerja -->
        <div class="row" id="lowongan-list">
            <!-- Lowongan Kerja 1 -->
            <div class="col-md-4 mb-4" id="lowongan-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">PT. Makmur</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Posisi: Software Engineer</h6>
                        <p class="card-text"><b>Deskripsi Pekerjaan:</b> Mengembangkan aplikasi web dan mobile.</p>
                        <p class="card-text"><b>Kualifikasi:</b>
                            <ul>
                                <li>Minimal S1 Teknik Informatika</li>
                                <li>Pengalaman minimal 2 tahun di bidang yang sama</li>
                                <li>Memahami bahasa pemrograman JavaScript dan PHP</li>
                            </ul>
                        </p>
                        <p class="card-text"><b>Lokasi:</b> Jakarta</p>
                        <p class="card-text"><b>Tanggal Batas Lamaran:</b> 12 Desember 2024</p>
                        <a href="#" class="btn btn-primary">Lamar Sekarang</a>
                        <button class="btn btn-danger mt-3" onclick="hapusLowongan('lowongan-1')">Hapus Lowongan</button>
                    </div>
                </div>
            </div>
            <!-- Lowongan Kerja 2 -->
            <div class="col-md-4 mb-4" id="lowongan-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">PT. Jaya Sukses</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Posisi: Data Analyst</h6>
                        <p class="card-text"><b>Deskripsi Pekerjaan:</b> Analisis data untuk mendukung keputusan bisnis.</p>
                        <p class="card-text"><b>Kualifikasi:</b>
                            <ul>
                                <li>Minimal S1 Sistem Informasi</li>
                                <li>Pengalaman kerja sebagai data analyst dan business analyst minimal 2 tahun</li>
                                <li>Keahlian dalam menggunakan alat seperti Excel, SQL, dan perangkat lunak statistik</li>
                            </ul>
                        </p>
                        <p class="card-text"><b>Lokasi:</b> Bandung</p>
                        <p class="card-text"><b>Tanggal Batas Lamaran:</b> 20 Desember 2024</p>
                        <a href="#" class="btn btn-primary">Lamar Sekarang</a>
                        <button class="btn btn-danger mt-3" onclick="hapusLowongan('lowongan-2')">Hapus Lowongan</button>
                    </div>
                </div>
            </div>
            <!-- Lowongan Kerja 3 -->
            <div class="col-md-4 mb-4" id="lowongan-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">PT. Gelora Api</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Posisi: Application Engineer</h6>
                        <p class="card-text"><b>Deskripsi Pekerjaan:</b> Perancangan & pengembangan aplikasi untuk sistem perusahaan.</p>
                        <p class="card-text"><b>Kualifikasi:</b>
                            <ul>
                                <li>Minimal S1 Teknik Informatika, Sistem Informasi</li>
                                <li>Kemampuan dalam menggunakan Integrated Development Environment (IDE)</li>
                                <li>Memahami bahasa pemrograman JavaScript, Python, C++, dan Database</li>
                            </ul>
                        </p>
                        <p class="card-text"><b>Lokasi:</b> Yogyakarta</p>
                        <p class="card-text"><b>Tanggal Batas Lamaran:</b> 1 Januari 2025</p>
                        <a href="#" class="btn btn-primary">Lamar Sekarang</a>
                        <button class="btn btn-danger mt-3" onclick="hapusLowongan('lowongan-3')">Hapus Lowongan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center py-3 mt-4">
        <p class="footer-text">&copy; 2024 Program Studi Sistem Informasi, Universitas Kuningan. Hak cipta dilindungi.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Function to handle form submission and add new job listing
        document.getElementById('formLowongan').addEventListener('submit', function(event) {
            event.preventDefault();

            // Get the values from the form fields
            const perusahaan = document.getElementById('perusahaan').value;
            const posisi = document.getElementById('posisi').value;
            const deskripsi = document.getElementById('deskripsi').value;
            const kualifikasi = document.getElementById('kualifikasi').value;
            const lokasi = document.getElementById('lokasi').value;
            const tanggal = document.getElementById('tanggal').value;

            // Generate a new unique ID for the lowongan
            const lowonganId = 'lowongan-' + new Date().getTime();

            // Create a new card for the new job listing
            const newCard = `
                <div class="col-md-4 mb-4" id="${lowonganId}">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">${perusahaan}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Posisi: ${posisi}</h6>
                            <p class="card-text"><b>Deskripsi Pekerjaan:</b> ${deskripsi}</p>
                            <p class="card-text"><b>Kualifikasi:</b><ul><li>${kualifikasi}</li></ul></p>
                            <p class="card-text"><b>Lokasi:</b> ${lokasi}</p>
                            <p class="card-text"><b>Tanggal Batas Lamaran:</b> ${tanggal}</p>
                            <a href="#" class="btn btn-primary">Lamar Sekarang</a>
                            <button class="btn btn-danger mt-3" onclick="hapusLowongan('${lowonganId}')">Hapus Lowongan</button>
                        </div>
                    </div>
                </div>
            `;

            // Append the new job listing to the list of job postings
            document.getElementById('lowongan-list').innerHTML += newCard;

            // Clear the form
            document.getElementById('formLowongan').reset();
        });

        // Function to handle lowongan deletion
        function hapusLowongan(id) {
            const lowongan = document.getElementById(id);
            lowongan.remove();
        }
    </script>
</body>
</html>