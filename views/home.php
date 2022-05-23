<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>MYSPACE-Accueil</title>
</head>
<body class="bg-light">
    <header class="mb-3">
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container">
                <a href="" class="navbar-brand fw-bold">MySpace</a>
                <button class="navbar-toggler" data-bs-target="#listLink" data-bs-toggle="collapse" aria-controls="listLink" aria-expanded="false" aria-label="Toggle Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="listLink">
                    <ul class="navbar-nav d-flex justify-content-md-center">
                        <li class="nav-item">
                            <a href="" class="nav-link">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Profil</a>
                        </li>
                    </ul>
                </div>
                <form action="" class="d-flex">
                    <input type="search" class="form-control me-2" aria-label="search">
                    <button class="btn btn-outline-primary" type="submit">Rechercher</button>
                </form>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="col mb-3 bg-white">
                    <p class="h4">Vendredi, 22 avril 2022</p>
                    <p class="h3">Bienvenue <?php echo "Excellence KAWEJ"; ?> sur MySpace</p>
                </div>
                <?php
                for ($i = 0; $i < 10; $i++) {
                    ?>
                        <div class="col bg-white mb-2">
                            <div class="row">
                                <div class="col-1 ">
                                    <img src="" alt="photo de profil" class="">
                                </div>
                                <div class="col">
                                    <p class="h3"><?php echo "Excellence KAWEJ"?></p>
                                </div>
                            </div>
                            <div class="col offset-1">
                                <p class="h5"><?php echo "Data Scientist"?></p>
                                <p>Je suis devenue analyste de données ce qui me permet de pouvoir traiter, analyser ou autrement de faire parler les données</p>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col d-flex justify-content-end">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="col">
                                            <p class="text-start">Likez</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col d-flex justify-content-end">
                                            <i class="fa-solid fa-comment"></i>
                                        </div>
                                        <div class="col">
                                            <p class="text-start">Commentez</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                }
                ?>
            </div>
            <div class="col bg-secondary">

            </div>
        </div>
    </div>
</body>
</html>