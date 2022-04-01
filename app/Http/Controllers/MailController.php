<?php

namespace App\Http\Controllers;

use App\Mail\InscriptionMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mail(User $user){

        // $users = ['name' => $user->name, 'prenom' => $user->prenom];
        // $test = ['nom' => 'Benoit'];
        Mail::to('bensavary62@gmail.com')->send(new InscriptionMail());

        return view('emails.inscriptionmail'); 
    }
}
