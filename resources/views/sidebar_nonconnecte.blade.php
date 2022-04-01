<div class="sidebar-mobile">
    <header class="bandeau">
        <a href="/">
            <img class="logo-centrer" src="img/logo-CESI.png" alt="Logo CESI">
        </a>
    </header>
    <div class="sidebar close">
        <i class='bx bx-menu' ></i>
        <div class="logo-details">
            <a href="/">
                <img class="logo-sidebar" src="img/logo-CESI.png" alt="Logo CESI">
            </a>
        </div>
        <ul class="nav-links">
            <li>
                <a href="/">
                    <i class='bx bx-home' ></i>
                    <span class="link_name">Accueil</span>
                </a>
            </li>
            <li>
                <a href="offres">
                    <i class='bx bxs-offer' ></i>
                    <span class="link_name">Offres de stage</span>
                </a>
            </li>
            <li>
                <a href="entreprises">
                    <i class='bx bx-building-house' ></i>
                    <span class="link_name">Entreprises</span>
                </a>
            </li>
            <button type="button" class="btn btn-warning btn-color btn-seco-sidebar" data-bs-toggle="modal" data-bs-target="#seco">Se connecter</button>
        </ul>
    </div>
</div>
    <!-- Modal de la connexion -->
    <div class="modal fade" id="seco" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        @include ('seco')
    </div>

    <script type="text/javascript" src="js\sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

