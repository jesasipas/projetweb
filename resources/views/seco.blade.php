<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="top-modal">
            <button type="button" class="btn-close btn-close-white fermeture" data-bs-dismiss="modal" aria-label="Close"></button>
            <h5 class="txt-jaune" id="exampleModalLabel">Se connecter</h5>
            <h6 class="txt-blanc" id="exampleModalLabel">Veuillez saisir votre identifiant et votre mot de passe !</h6>
        </div>
        <div  class="bot-modal">
        <form method="POST" action="{{ route('login') }}">
                    @csrf
            <div class="espace">
                    <div class="espace">
                        <x-input id="email" class="box" type="text" name="email" :value="old('email')" placeholder="Adresse mail" size="30" required autofocus />
                        <br>
                        <x-input id="password" class="box"
                                type="password"
                                name="password"
                                placeholder="Mot de passe"
                                size="30"
                                required minlength="8"
                                required autocomplete="current-password" />
                    </div>
                <select id="role" name="role" class="role-select" :value="old('role')">
                    <option value="1">Administrateur</option>
                    <option value="0">Étudiant</option>
                    <option value="2">Délégué</option>
                    <option value="3">Tuteur</option>
                </select>
            </div>
            <h6 class="txt-blanc"><a href="mdpoublie" class="jaune">Mot de passe oublié ?</a></h6>
            <div class="espace2">
                <x-button class="btn btn-warning btn-seco">
                    {{__('Se connecter') }}
                </x-button>
            </div>
        </form>
        </div>
    </div>
</div>