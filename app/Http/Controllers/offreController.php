<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class offreController extends Controller
{
    public function store(Request $request)
    {
        // $request->entreprises_id='2';
        // $data = Offre::join("entreprises", "offres.entreprises_id", "=", "entreprises.id")->where("entreprises.id",$request->entreprises_id)->select('nomEntreprise')->get();
// dd($data);
// $request->entreprises_id=Entreprise::where('nomEntreprise',$request->nomEntreprise);
// dd($request) ;
$entreprise = new Offre();
        $entreprise->nomOffre= $request->nomOffre;
        $entreprise->competance= $request->competance;
        $entreprise->typePromo= $request->typePromo;
        $entreprise->lieuStage=$request->lieuStage;
        $entreprise->emailEntreprise=$request->emailEntreprise;
        $entreprise->dureeJour= $request->dureeJour;
        $entreprise->dateDebut= $request->dateDebut;
        $entreprise->nbPlace= $request->nbPlace;
        $entreprise->baseRemunerationEuro= $request->baseRemunerationEuro;
        $entreprise->masqueOffre='0';
        $entreprise->detailOffre=$request->detailOffre;
        $entreprise->entreprises_id=$request->nomEntreprise;

        $entreprise->save();
   
        dd('offre créer');


        // return($)
    }
    public function update(Request $request)
    {
        $request->find='3';
        if(empty($request->nomOffre)){
            $request->nomOffre = (Offre::find($request->find)->nomOffre);
        }
        if(empty($request->competance)){
            $request->competance = (Offre::find($request->find)->competance);
        }
        if(empty($request->typePromo)){
            $request->typePromo = (Offre::find($request->find)->typePromo);
        }
        if(empty($request->lieuStage)){
            $request->lieuStage = (Offre::find($request->find)->lieuStage);
        }
        if(empty($request->emailEntreprise)){
            $request->emailEntreprise = (Offre::find($request->find)->emailEntreprise);
        }
        if(empty($request->dureeJour)){
            $request->dureeJour = (Offre::find($request->find)->dureeJour);
        }
        if(empty($request->dateDebut)){
            $request->dateDebut = (Offre::find($request->find)->dateDebut);
        }
        if(empty($request->nbPlace)){
            $request->nbPlace = (Offre::find($request->find)->nbPlace);
        }
        if(empty($request->baseRemunerationEuro)){
            $request->baseRemunerationEuro = (Offre::find($request->find)->baseRemunerationEuro);
        }
        if(empty($request->masqueOffre)){
            $request->masqueOffre = (Offre::find($request->find)->masqueOffre);
        }
        if(empty($request->detailOffre)){
            $request->detailOffre = (Offre::find($request->find)->detailOffre);
        }
        if(empty($request->nomEntreprise)){
            $request->nomEntreprise = (Offre::find($request->find)->entreprises_id);
        }
        //dd($request);
        Offre::find($request->find)->update([
        'nomOffre'=> $request->nomOffre,
        'competance'=> $request->competance,
        'typePromo'=>$request->typePromo,
        'lieuStage'=>$request->lieuStage,
        'emailEntreprise'=>$request->emailEntreprise,
        'dureeJour'=> $request->dureeJour,
        'dateDebut'=> $request->dateDebut,
        'nbPlace'=> $request->nbPlace,
        'baseRemunerationEuro'=>$request->baseRemunerationEuro,
        'masqueOffre'=>$request->masqueOffre,
        'detailOffre'=>$request->detailOffre,
        'entreprises_id'=>$request->nomEntreprise,
        ]);

        dd('L\'entreprise a bien été mise à jour');
    }
    public function delete(Request $request)
    {
        $request->find='3';
        Offre::find($request->find)->update(['masqaueOffre'=>'1']);
        dd('L\'entreprise a bien été supprimer');
    }
  
}
