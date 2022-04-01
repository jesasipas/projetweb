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

                <div id="dropdown_notif">
                <i id="cloche" class="fa-solid fa-bell fa-xl"></i>
                <i class="fa-solid fa-caret-down profil"></i>
                <div id="dropdown_content_notif" class="dropdown-content">
                  <a href="#"><font size="3">Fiche de Thomas BLONDEL à signer.</font></a>
                  <a href="#"><font size="3">Fiche de Thomas BLONDEL à signer.</font></a>
                  <a href="#"><font size="3">Fiche de Thomas BLONDEL à signer.</font></a>
                </div>
                </div>

                <div id="separate"></div>

                <div id="dropdown_profil" class="dropdown">
                <i class="fa-solid fa-user-large fa-xl profil"></i>
                <i class="fa-solid fa-caret-down profil"></i>
                <div id="dropdown_content_profil" class="dropdown-content">
                  <a id="dropdown_monprofil" href="profil"><font size="3">Mon profil</font></a>
                  @if(Gate::allows('access_etudiant') or Gate::allows('access_admin'))
                  <a id="dropdown_wishlist" href="wishlist"><font size="3">Ma wishlist</font></a>
                  @endif
                  @if(!Gate::allows('access_etudiant'))
                  <a id="dropdown_utilisateurs" href="gestionutilisateurs"><font size="3">Gestion des utilisateurs</font></a>
                  @endif
                  @if(Gate::allows('access_etudiant') or Gate::allows('access_admin'))
                  <a id="dropdown_mesoffres" href="mesoffres"><font size="3">Mes offres</font></a>
                  @endif
                  @if(!Gate::allows('access_etudiant'))
                  <a id="dropdown_offresetudiants" href="offresetudiants"><font size="3">Offres des étudiants</font></a>
                  @endif
                  <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                        {{('Déconnexion') }}
                    </x-responsive-nav-link>
                </form>
      
            </div>
                </div>
                </div>
            </div>
        </div>
</header>
</div>