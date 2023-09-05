<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.css">
    <script src="<?= BASE_URL; ?>/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Roboto&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #EFB495">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Febri <span class="">Web</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-4" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" aria-current="page" href="<?= BASE_URL; ?>/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="<?= BASE_URL; ?>/dataguru">Data Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="<?= BASE_URL; ?>/datasiswa">Data Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="<?= BASE_URL; ?>/user/profile">About Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>