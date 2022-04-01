<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Droit;
use Illuminate\Auth\Access\Response;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

                /* Accès role */
        Gate::define('access_admin', function(User $user){
            return $user->role == 1;
                    Response::allow();
                    Response::deny("Vous ne possèder pas un compte administrateur");
        });
        Gate::define('access_etudiant', function(User $user){
            return $user->role == 0;
                Response::allow();
                Response::deny("Vous ne possèder pas un compte etudiant");
        });
        Gate::define('access_pilote', function(User $user){
            return $user->role == 2;
            Response::allow();
            Response::deny("Vous ne possèder pas un compte pilote");
        });
        Gate::define('access_delegue', function(User $user){
            return $user->role == 3;
            Response::allow();
            Response::deny("Vous ne possèder pas un compte delegue");
        });

        //         /* Droit entreprise*/
        // Gate::define('rechercher_ent', function(User $user, Droit $droit){
        //     return $user->role == 2 and $droit->rechercherent == 1;
        // });
        // Gate::define('modif_ent', function(User $user, Droit $droit){
        //     return $user->role == 2 and $droit->rechercherent == 1;
        // });
        // Gate::define('creer_ent', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->creerent == 1;
        // });
        // Gate::define('eval_ent', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->evalent == 1;
        // });
        // Gate::define('sup_ent', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->supent == 1;
        // });
        // Gate::define('consul_ent', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->consulent == 1;
        // });

        //         /* Droit offre*/
        // Gate::define('rechercher_offre', function(User $user, Droit $droit){
        //     return $user->role == 2 && $droit->rechercheroffre == 1;
        // });
        // Gate::define('modif_offre', function(User $user, Droit $droit){
        //     $droit = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->role == 2 and $droit->modifoffre == 1;
        // });
        // Gate::define('creer_offre', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->creeroffre == 1;
        // });
        // Gate::define('sup_offre', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->suppoffre == 1;
        // });
        // Gate::define('consul_offre', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->consulstatoffre == 1;
        // });

        //         /* Droit pilote*/
        // Gate::define('rechercher_pilote', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->recherchepilot == 1;
        // });
        // Gate::define('modif_pilote', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->modifpilot == 1;
        // });
        // Gate::define('creer_pilote', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->creerpilot == 1;
        // });
        // Gate::define('sup_pilote', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->supppilot == 1;
        // });

        //         /* Droit delegue*/
        // Gate::define('rechercher_deleg', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->recherchedele == 1;
        // });
        // Gate::define('modif_deleg', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->modifdele == 1;
        // });
        // Gate::define('creer_deleg', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->creerdele == 1;
        // });
        // Gate::define('sup_deleg', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->suppdele == 1;
        // });

        //         /* Droit etudiant*/
        // Gate::define('rechercher_etud', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->recherhceretud == 1;
        // });
        // Gate::define('modif_etud', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->modifetud == 1;
        // });
        // Gate::define('creer_etud', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->creeretud == 1;
        // });
        // Gate::define('sup_etud', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->suppetud == 1;
        // });
        // Gate::define('consul_etud', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->consultstatetud == 1;
        // });

        //         /* Droit Candidature */
        // Gate::define('step3', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->step3 == 1;
        // });
        // Gate::define('step4', function(User $user){
        //     $user = User::join("droits", "users.droits_id", "=", "droits.id");
        //     return $user->step4 == 1;
        // });
    }
}
