<?php 
  session_start();
  require '../function/functions.php';
  $namalengkap = $_GET["email"];
  $email = $_GET["email"];
  $data = query("SELECT * FROM users WHERE email='$email'");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- Bootsrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <title>Edit Profil</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top mb-5">
        <div class="container">
            <a class="navbar-brand" href="#">AfrizalProject</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../auth/logout.php"
                            onclick="return confirm('yakin ingin logout?')">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <h1 class="text-center mt-5">Profil</h1>

    <div class="container mb-5 table-responsive">
        <div class="mb-2">
            <a class="btn btn-outline-primary" href="../index.php" role="button">Back</a>
        </div>
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">No telepon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Password</th>
                    <th scope="col">Button</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
                <?php foreach($data as $value) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $value["namaLengkap"]; ?></td>
                    <td><?= $value["username"]; ?></td>
                    <td><?= $value["email"]; ?></td>
                    <td><?= $value["notelp"]; ?></td>
                    <td><?= $value["alamat"]; ?></td>
                    <td><?= $value["password"]; ?></td>
                    <td>
                        <a class="btn btn-warning" href="edit.php?id=<?= $value["id"]; ?>" role="button">Edit</a> |
                        <a class="btn btn-danger"
                            onclick="return confirm('apakah anda yakin ingin menghapus akun anda?')"
                            href="hapus.php?id=<?= $value["id"]; ?>" role="button">Hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>

</html>