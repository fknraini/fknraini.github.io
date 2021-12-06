<!DOCTYPE html>
<html>

<head>
    <title>Formulir Pendaftaran Siswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .a {
            width: 100%;
        }

        body {
            background-color: #fffff;
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
    <div class="d-flex min-vh-100 flex-column aligns-items-center justify-content-center">
        <div class="container p-0 card shadow border-0 rounded" style="max-width: 50rem;">
            <div class="card-header bg text-center">
                <h3>Formulir Siswa Baru</h3>
            </div>
            <form action="proses-pendaftaran.php" method="POST">
                <div class="form-group mt-3 mx-2">
                    <p>
                        <label for="nama">Nama: </label>
                        <input required class="a" type="text" name="nama" placeholder="Nama Lengkap" />
                    </p>
                </div>
                <div class="form-group mt-3 mx-2">
                    <p>
                        <label for="alamat">Alamat: </label>
                        <textarea required class="a" name="alamat"></textarea>
                    </p>
                </div>
                <div class="form-group mt-3 mx-2">
                    <p>
                        <label for="jenis_kelamin">Jenis Kelamin: </label>
                        <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                    </p>
                </div>
                <div class="form-group mt-3 mx-2">
                    <p>
                        <label for="agama">Agama: </label>
                        <select name="agama">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Atheis</option>
                        </select>
                    </p>
                </div>

                <div class="form-group mt-3 mx-2 my-4">
                    <p>
                        <label for="sekolah_asal">Sekolah Asal: </label>
                        <input class="a" required type="text" name="sekolah_asal" placeholder="Nama Sekolah" />
                    </p>
                </div>

                <div class="form-group mt-3 mx-2 my-4">
                    <input class="a btn btn-info" type="submit" value="Daftar" name="daftar" />
                </div>

            </form>
        </div>
    </div>

</body>

</html>
