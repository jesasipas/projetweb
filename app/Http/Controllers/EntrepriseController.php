<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Avoir;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class EntrepriseController extends Controller
{
    public function show()
    {
        $entreprises = Entreprise::all();
        return$entreprises;
    }
    public function store(Request $request)
    {
        $entreprise = new Entreprise();
        $entreprise->nomEntreprise= $request->nomEntreprise;
        $entreprise->siteWeb= $request->siteWeb;
        $entreprise->nbStageCesi='0';
        $entreprise->evaluationStage='0';
        $entreprise->confiancePilot='0';
        $entreprise->masqueEntreprise='0';
        $entreprise->logo= $request->logo;
        $entreprise->banniere= $request->banniere;
        $entreprise->detailent=$request->detailent;
        $entreprise->save();


        $adresse= new Address();
        $adresse->ville = $request->ville;
        $adresse->codePostal = $request->codePostal;
        $adresse->adresse =$request->adresse;
        $adresse->save();

        $avoir=new Avoir();
        $avoir->entreprises_id=$entreprise->id;
        $avoir->addresses_id=$adresse->id;
        $avoir->save();
        dd('L\'entreprise a bien été ajouter');
        // return($)
    }
    public function update(Request $request)
    {
        $request->find='8';
        if(empty($request->nomEntreprise)){
            $request->nomEntreprise = (Entreprise::find($request->find)->nomEntreprise);
        }
        if(empty($request->siteWeb)){
            $request->siteWeb = (Entreprise::find($request->find)->siteWeb);
        }
        if(empty($request->nbStageCesi)){
            $request->nbStageCesi = (Entreprise::find($request->find)->nbStageCesi);
        }
        if(empty($request->evaluationStage)){
            $request->evaluationStage = (Entreprise::find($request->find)->evaluationStage);
        }
        if(empty($request->confiancePilot)){
            $request->confiancePilot = (Entreprise::find($request->find)->confiancePilot);
        }
        if(empty($request->logo)){
            $request->logo = (Entreprise::find($request->find)->logo);
        }
        if(empty($request->banniere)){
            $request->banniere = (Entreprise::find($request->find)->banniere);
        }
        if(empty($request->detailent)){
            $request->detailent = (Entreprise::find($request->find)->detailent);
        }

       Entreprise::find($request->find)->update([
        'nomEntreprise'=> $request->nomEntreprise,
        'siteWeb'=> $request->siteWeb,
        'nbStageCesi'=>$request->nbStageCesi,
        'evaluationStage'=>$request->evaluationStage,
        'confiancePilot'=>$request->confiancePilot,
        'masqueEntreprise'=>'0',
        'logo'=> $request->logo,
        'banniere'=> $request->banniere,
        'detailent'=>$request->detailent,
        ]);
        //dd($request->find);
        $date=Avoir::join("addresses","avoir.addresses_id","=","addresses.id")->get();
        if(empty($request->ville)){
            $request->ville = $date->ville;
        }
        if(empty($request->codePostal)){
            $request->codePostal = Address::find($date)->codePostal;
        }
        if(empty($request->adresse)){
            $request->adresse = Address::find($date)->adresse;
        }
        $join= DB::table('avoir')
        ->join('entreprises','avoir.entreprises_id','=','entreprises.id')->where('avoir.entreprises_id',$request->find)
        ->join("addresses","avoir.addresses_id","=","addresses.id")
        ->update([
            'ville' => $request->ville,
            'codePostal' => $request->codePostal,
            'adresse' =>$request->adresse
        ]);
        dd('L\'entreprise a bien été mise à jour');
    }
    public function delete(Request $request)
    {
        $request->find='8';
        Entreprise::find($request->find)->update([
            'masqueEntreprise'=>'1',
        ]);
        dd('L\'entreprise a bien été supprimer');
    }
}
