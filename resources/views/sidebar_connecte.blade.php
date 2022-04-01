<div class="sidebar-mobile">
<header class="bandeau">
    <a href="/">
        <img class="logo-centrer" src="img/logo-CESI.webp" alt="Logo CESI">
    </a>
</header>
<div class="sidebar close">
    <i class='bx bx-menu' ></i>
    <div class="logo-details">
        <a href="/">
            <img class="logo-sidebar" src="img/logo-CESI.webp" alt="Logo CESI">
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
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-bell'></i>
                    <span class="link_name">Annonces</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Annonces</a></li>
                <li><a href="#">Fiche à signer.</a></li>
                <li><a href="#">Fiche à signer.</a></li>
                <li><a href="#">Fiche à signer.</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="profil">
                    <i class='bx bx-user'></i>
                    <span class="link_name">Mon profil</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="profil">Mon profil</a></li>
                @if(Gate::allows('access_etudiant') or Gate::allows('access_admin'))
                <li><a href="wishlist">Ma wishlist</a></li>
                @endif
                @if(!Gate::allows('access_etudiant'))
                <li><a href="gestionutilisateur">Gestion des utilisateurs</a></li>
                @endif
                @if(Gate::allows('access_etudiant') or Gate::allows('access_admin'))
                <li><a href="mesoffres">Mes offres</a></li>
                @endif
                @if(!Gate::allows('access_etudiant'))
                <li><a href="offresetudiants">Offres des étudiants</a></li>
                @endif
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                        {{('Déconnexion') }}
                    </x-responsive-nav-link>
                </form>
            </ul>
        </li>
    </ul>
</div>
</div>