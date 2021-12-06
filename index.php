<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Siswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            /* background-image: linear-gradient(120deg,  #6495ED 0%, #999999 100%); */
            background-color : #fffff;
        }
    </style>
</head>

<body class="d-flex min-vh-100 flex-column aligns-items-center justify-content-center text-center">
        <h1>Pendaftaran Siswa Baru</h1>
        <h1  class="mb-5">SMAN 3 Sukoharjo</h1>
            
        <div class="px-3 py-4 text-center">    
            <a href="form-daftar.php" class="btn btn-info">Daftar Baru</a>
            <a href="list-siswa.php" class="btn btn-info">List Pendaftar</a>
        </div>
        
        <?php if (isset($_GET['status'])) : ?>
            <p>
                <?php
                if ($_GET['status'] == 'sukses') {
                    echo "Pendaftaran siswa baru berhasil!";
                } else {
                    echo "Pendaftaran gagal!";
                }
                ?>
            </p>
        <?php endif; ?>

</body>

</html>
