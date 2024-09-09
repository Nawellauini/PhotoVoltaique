<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gines Group catégories</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Include custom CSS -->
    <link rel="stylesheet" href="styles.css">
    <style>
        body.ginesGroup-theme {
            background-color: #f8f9fa;
        }

        #sidebar {
            border-right: 3px solid green;
        }

        .nav-link {
            color: #343a40;
        }

        .nav-link:hover {
            color: green;
            background-color: #c3e6cb;
        }

        .sidebar-sticky {
            padding-top: 20px;
        }

        .sidebar-sticky img {
            max-width: 110%;
        }

        h1 {
            color: green;
            font-family: "Roboto", sans-serif;
        }

        /* Style pour le bouton en bleu */
        .btn-custom-blue {
            background-color: blue; /* Couleur du bouton en bleu */
            border: none;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .btn-custom-blue:hover {
            background-color: darkblue; /* Couleur du bouton au survol */
        }

        /* Style pour l'en-tête de la modal en bleu */
        .modal-header-blue {
            background-color: blue; /* Couleur de fond de l'en-tête de la modal */
            color: white; /* Couleur du texte dans l'en-tête de la modal */
        }

        .modal-header-blue .close {
            color: white; /* Couleur de l'icône de fermeture */
        }

        .modal-header-blue .close:hover {
            color: darkblue; /* Couleur de l'icône de fermeture au survol */
        }

        /* Style pour la table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .blue-icon {
            color: blue;
        }

        .red-icon {
            color: red;
        }

        .icon-space {
            margin-right: 10px;
        }
    </style>
</head>
<body class="ginesGroup-theme">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-white sidebar">
                <div class="sidebar-sticky">
                    <!-- Logo -->
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="{{route('home')}}" class="navbar-brand ms-lg-5 custom-logo">
                            <h1 class="m-0 display-4 text-primary">
                                <img src="img/logo_Gines_Group.jpg" alt="Logo Gines Group" style="width: 500px; height: auto;">
                            </h1><br><br>
                        </a>
                    </div>

                    <!-- Dashboard Link -->
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <span class="nav-link text-muted small">Administration</span>
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i> Tableau de bord
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('category')}}">
                                <i class="fas fa-list"></i> Catégories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('allProduct')}}">
                                <i class="fas fa-box"></i> Produits
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('client')}}">
                                <i class="fas fa-users"></i> Clients
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('commande')}}">
                                <i class="fas fa-shopping-cart"></i> Commandes
                            </a>
                        </li>

                        <br>
                        <span class="nav-link text-muted small">Authentification</span>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/profileAdmin') }}">
                                <i class="fas fa-user"></i> Profil
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logout')}}">
                                <i class="fas fa-sign-out-alt"></i> Déconnexion
                            </a>
                        </li>
                        <br><br><br><br>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2" style="color: blue;">Liste des catégories</h1>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-custom-blue" data-toggle="modal" data-target="#exampleModal">Ajouter une catégorie</button>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($category) > 0)
                            @foreach ($category as $cat)
                                <tr>
                                    <td>{{$cat->id}}</td>
                                    <td>{{$cat->name}}</td>
                                    <td>{{$cat->description}}</td>
                                    <td>
                                        <a href="/edit/{{$cat->id}}" class="fas fa-pencil-alt green-icon fa-lg" title="Modifier la catégorie"></a>
                                        <span class="icon-space"></span>
                                        <a href="/delete/{{$cat->id}}" class="fas fa-trash-alt red-icon fa-lg" title="Supprimer la catégorie"></a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr><td colspan="4">Pas de données</td></tr>
                        @endif
                    </tbody>
                </table>

                <form action="{{route('addcategory')}}" method="post">
                    @csrf

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header modal-header-blue">
                                    <h5 class="modal-title" id="exampleModalLabel">Nouvelle catégorie</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="categoryName" class="font-weight-bold">Nom :</label>
                                        <input type="text" class="form-control" id="categoryName" name="name" placeholder="Entrez le nom de la catégorie">
                                    </div>
                                    <div class="form-group">
                                        <label for="categoryDescription" class="font-weight-bold">Description :</label>
                                        <textarea class="form-control" id="categoryDescription" name="description" placeholder="Entrez la description de la catégorie"></textarea>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-custom-blue">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>

    <!-- Bootstrap and jQuery scripts (for modal functionality) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
