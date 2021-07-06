<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>VOTE A DISTANCE</title>
    <link rel="icon" href="favicon.ico" />
    <link rel="icon" type="image/png" href="logo.png" />

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/checkout/">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">
<?php include 'header.php'; ?>
 <?php include 'Menu.php'; ?>
 <img src="img3.jpg" class="d-block w-100" height="400">
    <div class="container p-5">
        <div class="row">
            <div class="col-md-4 order-md-4 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Les régionales</span>
                </h4>

                <form class="">

                    <iframe width="560" height="506" src="https://www.youtube.com/embed/Mwndui9yzWQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                      </iframe>

                </form>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Mes informations</h4>
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Nom</label>
                            <input type="text" class="form-control" id="nom" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Nom obligatoire.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Prénom</label>
                            <input type="text" class="form-control" id="prénom" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Prénom obligatoire.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Saisir une adresse mail valide.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="numero">Téléphone</label>
                        <input type="numero" class="form-control" id="email" placeholder="* ** ** ** **">
                        <div class="invalid-feedback">
                            Saisir un numéro valide.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="date_naissance">Date de naissance</label>
                        <input type="date" class="form-control" id="date_naissance" placeholder="you@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="piece">Pièce d'identité</label>
                        <select class="custom-select d-block w-100" id="piece" required>
                            <option value="">Quelle pièce d'identité utiliser vous?</option>
                            <option value="piece">CNI</option>
                            <option value="piece">Passeport</option>
                            <option value="piece">Titre de séjour</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="numero_piece">Numéro de pièce d'identité</label>
                        <input type="numero_piece" class="form-control" id="numero_piece" placeholder="">
                        <div class="invalid-feedback">
                            Numéro de pièce non valide.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="numero_piece">Document correspondant</label>
                        <input type="file" name="document" class="form-control">
                        <div class="invalid-feedback">
                            Numéro de pièce non valide.
                        </div>
                    </div>

                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Validé</button>
                </form>
            </div>
        </div>


    </div>
    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


    <script src="form-validation.js"></script>
</body>

</html>