<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Offre;
use App\Models\Droit;
use App\Models\Address;
use App\Models\Avoir;
use App\Models\Candidature;
use App\Models\Centre;
use App\Models\Entreprise;
use App\Models\Promo;
use App\Models\Message;

use Illuminate\Http\Request;

class ApiControler extends Controller
{

    /* User */
    public function listApiUser(){
        return response()->json(User::all());
    }

    public function createApiUser(Request $request){
        $item = User::create($request->all());
        return response()->json($item);
    }

    public function deleteApiUser($id){
        $user = User::find($id);
        if($user){
            $user->delete();
            return response()->json(["status" => "success"]);
        }else{
            return response()->json(["status" => "error"]);
        }
    }

    /* Offre */
    public function listApiOffre(){
        return response()->json(Offre::all());
    }

    public function createApiOffre(Request $request){
        $item = Offre::create($request->all());
        return response()->json($item);
    }

    public function deleteApiOffre($id){
        $offre = Offre::find($id);
        if($offre){
            $offre->delete();
            return response()->json(["status" => "success"]);
        }else{
            return response()->json(["status" => "error"]);
        }
    }

        /* Droit */
    public function listApiDroit(){
        return response()->json(Droit::all());
    }

    public function createApiDroit(Request $request){
        $item = Droit::create($request->all());
        return response()->json($item);
    }

    public function deleteApiDroit($id){
        $droit = Droit::find($id);
        if($droit){
            $droit->delete();
            return response()->json(["status" => "success"]);
        }else{
            return response()->json(["status" => "error"]);
        }
    }

            /* Adresse */
    public function listApiAdresse(){
        return response()->json(Address::all());
    }

    public function createApiAdresse(Request $request){
        $item = Address::create($request->all());
        return response()->json($item);
    }

    public function deleteApiAdresse($id){
        $adresse = Address::find($id);
        if($adresse){
            $adresse->delete();
            return response()->json(["status" => "success"]);
        }else{
            return response()->json(["status" => "error"]);
        }
    }

            /* Candidature */
    public function listApiCandidature(){
        return response()->json(Candidature::all());
    }

    public function createApiCandidature(Request $request){
        $item = Candidature::create($request->all());
        return response()->json($item);
    }

    public function deleteApiCandidature($id){
        $candid = Candidature::find($id);
        if($candid){
            $candid->delete();
            return response()->json(["status" => "success"]);
        }else{
            return response()->json(["status" => "error"]);
        }
    }

            /* Centre */
    public function listApiCentre(){
        return response()->json(Centre::all());
    }

    public function createApiCentre(Request $request){
        $item = Centre::create($request->all());
        return response()->json($item);
    }

    public function deleteApiCentre($id){
        $centre = Centre::find($id);
        if($centre){
            $centre->delete();
            return response()->json(["status" => "success"]);
        }else{
            return response()->json(["status" => "error"]);
        }
    }

            /* Entreprise */
    public function listApiEntreprise(){
        return response()->json(Entreprise::all());
    }

    public function createApiEntreprise(Request $request){
        $item = Entreprise::create($request->all());
        return response()->json($item);
    }

    public function deleteApiEntreprise($id){
        $entreprise = Entreprise::find($id);
        if($entreprise){
            $entreprise->delete();
            return response()->json(["status" => "success"]);
        }else{
            return response()->json(["status" => "error"]);
        }
    }

            /* Promotion */
    public function listApiPromotion(){
        return response()->json(Promo::all());
    }

    public function createApiPromotion(Request $request){
        $item = Promo::create($request->all());
        return response()->json($item);
    }

    public function deleteApiPromotion($id){
        $promotion = Promo::find($id);
        if($promotion){
            $promotion->delete();
            return response()->json(["status" => "success"]);
        }else{
            return response()->json(["status" => "error"]);
        }
    }

                /* Message */
    public function listApiMessage(){
        return response()->json(Message::all());
    }

    public function createApiMessage(Request $request){
        $item = Message::create($request->all());
        return response()->json($item);
    }

    public function deleteApiMessage($id){
        $message = Message::find($id);
        if($message){
            $message->delete();
            return response()->json(["status" => "success"]);
        }else{
            return response()->json(["status" => "error"]);
        }
    }

            /* Offres/Entreprises */

            public function listApiOffreEntreprise(){
                return response()->json(Offre::join("entreprises", "offres.entreprises_id", "=", "entreprises.id")->get());
            }

            /* Message */
    public function listApiAvoir(){
        return response()->json(Avoir::all());
    }

    public function createApiAvoir(Request $request){
        $avoir = Avoir::create($request->all());
        return response()->json($avoir);
    }

    public function deleteApiAvoir($id){
        $avoir = Avoir::find($id);
        if($avoir){
            $avoir->delete();
            return response()->json(["status" => "success"]);
        }else{
            return response()->json(["status" => "error"]);
        }
    }
}
