<?php

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\offreController;
use App\Http\Controllers\EntrepriseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Accueil');
});

Route::get('/offres', function () {
    return view('offres');
});

Route::get('/entreprises', function () {
    return view('entreprises');
});

Route::get('/wishlist', function () {
if (Gate::allows('access_pilote') or Gate::allows('access_delegue')){
    abort('403', 'Accès interdit');
}
else{ return view('wishlist');}
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/mdpoublie', function () {
    return view('mdpoublie');
});

Route::get('/gestionutilisateurs', function () {
    if (Gate::allows('access_etudiant')){
        abort('403', 'Accès interdit');
    }
    else { return view('Utilisateurs');}
    });

Route::get('/mesoffres', function () {
    if (Gate::allows('access_pilote') or Gate::allows('access_delegue')){
        abort('403', 'Accès interdit');
    }
    else{ return view('Mesoffres');}
    });

Route::get('/offresetudiants', function () {
    if (Gate::allows('access_etudiant')){
        abort('403', 'Accès interdit');
    }
    else{return view('Offres_Etudiants');}
    });

Route::get('/formulaireEntreprise', function () {
    if (Gate::allows('access_etudiant')){
        abort('403', 'Accès interdit');
    }
    else{return view('formEn');}
    });

    Route::get('/formulaireEntrepriseupdate', function () {
        if (Gate::allows('access_etudiant')){
            abort('403', 'Accès interdit');
        }
        else{return view('formEnup');}
        });

Route::get('/formulaireOffre', function () {
    if (Gate::allows('access_etudiant')){
        abort('403', 'Accès interdit');
    }
    else{return view('formOffre');}
    });
    Route::get('/formulaireOffreupdate', function () {
        if (Gate::allows('access_etudiant')){
            abort('403', 'Accès interdit');
        }
        
        else{return view('formOffreup');}
        });

Route::get('/formulaireUtilisateur', function () {
    if (Gate::allows('access_etudiant')){
        abort('403', 'Accès interdit');
    }
    else{return view('formUser');}
    });

    Route::get('/fiche_entreprise', function () {
        return view('fiche_entreprise');
    });


Route::get('/inscription','\App\Http\Controllers\MailController@mail',);

Route::get('/entreprise',[EntrepriseController::class,'show'])->name('entreprise.show');
Route::POST('/entreprise',[EntrepriseController::class,'store'])->name('entreprise.store');
Route::POST('/entrepriseupdate',[EntrepriseController::class,'update'])->name('entreprise.update');
Route::GET('/entreprisesup',[EntrepriseController::class,'supp'])->name('entreprise.supp');

Route::POST('/offrecreate',[offreController::class,'store'])->name('offre.store');
Route::POST('/offreupdate',[offreController::class,'update'])->name('offre.update');


require __DIR__.'/auth.php';
require __DIR__.'/api.php';
