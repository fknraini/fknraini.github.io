<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Siswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color:#fffff;
        }

        table {
            background-color: white;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Pendaftaran Siswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="p-5 container">
        <header>
            <h2>List Pendaftar</h2>
        </header>
        <nav>
            <a class="btn btn-info" href="form-daftar.php">Tambah Baru</a>
        </nav>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM calon_siswa"; // query to get all data 
                $query = mysqli_query($db, $sql);

                while ($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $siswa['id'] . "</td>";
                    echo "<td>" . $siswa['nama'] . "</td>";
                    echo "<td style='width: 20%'>" . $siswa['alamat'] . "</td>";
                    echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                    echo "<td>" . $siswa['agama'] . "</td>";
                    echo "<td>" . $siswa['sekolah_asal'] . "</td>";

                    echo "<td>";
                    echo "<a class='btn btn-info mx-1' href='form-edit.php?id=" . $siswa['id'] . "'>Edit</a>";
                    echo "<a class='btn btn-secondary' href='hapus.php?id=" . $siswa['id'] . "'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>

        <h5>Total: <?php echo mysqli_num_rows($query) ?></h5>
    </div>


</body>

</html>
