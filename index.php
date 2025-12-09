<html>
<head>
    <title>Sistem Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container">
            <a class="navbar-brand" href="#">Sistem Akademik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=mahasiswa">Data Mahasiswa</a>
                    </li>
                    <li class="nav-item d-none">
                        <a class="nav-link" href="index.php?page=pengguna">Data Pengguna</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
       <?php
       $page = isset($_GET['page']) ? $_GET['page'] : 'home';

       if($page == 'home') include 'home.php';
       if($page == 'mahasiswa') include 'list.php'; // Mengarah ke list mahasiswa
       if($page == 'create') include 'create.php';
       if($page == 'edit') include 'edit.php';
       ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>