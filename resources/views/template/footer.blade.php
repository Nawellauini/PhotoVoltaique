<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .blue-footer {
            color: blue; /* Couleur du texte */
        }

        .blue-footer .text-white {
            color: blue !important; /* Remplace les styles text-white par bleu */
        }

        .blue-footer .btn-secondary {
            background-color: blue; /* Couleur des boutons */
            border-color: blue; /* Couleur de la bordure des boutons */
        }

        .blue-footer .btn-secondary:hover {
            background-color: darkblue; /* Couleur des boutons au survol */
            border-color: darkblue; /* Couleur de la bordure des boutons au survol */
        }

        .blue-footer a {
            color: blue; /* Couleur des liens */
        }

        .blue-footer a:hover {
            color: darkblue; /* Couleur des liens au survol */
        }

        .blue-footer i {
            color: white; /* Couleur des icônes */
        }
    </style>
</head>
<body>
    <!-- Footer Start -->
    <div class="container-fluid bg-footer bg-primary text-white mt-5 blue-footer">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-7 col-md-12 pt-4 mb-4">
                            <h4 class="text-white mb-3">Contactez-nous</h4>
                            <div class="d-flex mb-3">
                                <i class="bi bi-geo-alt text-white me-2"></i>
                                <p class="text-white mb-0">Immeuble Tanit 3ième Etage Bureau n°7, Menzel Temime, Tunisia</p>
                            </div>
                            <div class="d-flex mb-3">
                                <i class="bi bi-envelope-open text-white me-2"></i>
                                <p class="text-white mb-0">contactgines@gmail.com</p>
                            </div>
                            <div class="d-flex mb-3">
                                <i class="bi bi-telephone text-white me-2"></i>
                                <p class="text-white mb-0">+216 29 244 310</p>
                            </div>
                            <div class="d-flex mt-3">
                                <a class="btn btn-secondary rounded-circle me-2" href="https://www.facebook.com/ginesgroup1?locale=fr_FR"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary rounded-circle" href="https://www.instagram.com/ginesgroup1/?igsh=Z2p4M29ldTdkbXd6"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white py-4 blue-footer">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="fw-bold" href="{{('home')}}">Gines Group</a>. Tous droits réservés. Conçu par <a class="fw-bold" href="https://htmlcodex.com">HTML Codex</a></p>
        </div>
    </div>
    <!-- Footer End -->
</body>
</html>
