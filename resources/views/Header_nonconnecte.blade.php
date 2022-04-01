<div class="header-pc">
<header class="p-3 bg text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="image">
                <img class="logo" src="img/logo-CESI.webp" alt="Logo CESI">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 text-white surbrillance">Accueil</a></li>
                <li><a href="offres" class="nav-link px-2 text-white surbrillance">Offres de stage</a></li>
                <li><a href="entreprises" class="nav-link px-2 text-white surbrillance">Entreprises</a></li>
            </ul>

            <div class="text-end">
                <button type="button" class="btn btn-warning btn-color" data-bs-toggle="modal" data-bs-target="#seco">Se connecter</button>
            </div>
        </div>
    </div>
</header>
</div>
<!-- Modal de la connexion -->
<div class="modal fade" id="seco" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include ('seco')
</div>

