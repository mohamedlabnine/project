<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\demande  ;

class Demandes extends Controller
{
    private $id = 4 ;
    public function index()
    {
        return view('index');
    }
    public function contact($lang)
    {
        app()->setlocale($lang) ;
        return view('contact');
    }
    public function suivi($lang)
    {
        app()->setlocale($lang) ;
        return view('suivi');
    }
    public function create($lang)
    {
        app()->setlocale($lang) ;
        return view('depose') ;
    }
    public function save(Request $req)
    {
        $demande = new demande ;
        $demande->nom = $req->nom ;
        $demande->prenom = $req->prenom ;
        $demande->cin = $req->cin ;
        $demande->tele = $req->tele ;
        $demande->img1 = $req->file('img1')->getClientOriginalName();
        $demande->img2 = $req->file('img2')->getClientOriginalName();
        $req->file('img1')->move(public_path('public/Image'), $req->file('img1')->getClientOriginalName());
        $req->file('img2')->move(public_path('public/Image'), $req->file('img2')->getClientOriginalName());
        $demande->etat_demande = "pas encore" ;
        $demande->save() ;
        return view('pdf' , ['demande' => $demande ]);

    }
    public function espase_Admin($lang){
        app()->setlocale($lang) ;
        return view('espase_Admin') ;
    }
    public function admin_test(Request $req , $lang)
    {
        if ($req->nom == 'labnine' && $req->code == "1999") {
            $demandes = demande::all() ;
            app()->setlocale($lang) ;
            return view('Admin', [ 'demandes' => $demandes ] );
        }
        else{
            app()->setlocale($lang) ;
            return view("espase_Admin") ;
        }
    }
    public function view(Request $req){
        $demande = demande::find($req->id) ;
        return view('view' , [ 'demande' => $demande]) ;
    }
    public function accepte(Request $req)
    {
        #accepte la demande
        $demande = demande::find($req->id);
        $demande->etat_demande = 'accepte';
        $demande->save();

        #affiche tous les demande non accpte ou pas encore 
        $demandes = demande::all() ;
        return view('Admin', ['demandes' => $demandes ] );
    }
    public function refuse(Request $req){
        #accepte la demande
        $demande = demande::find($req->id);
        $demande->etat_demande = 'refuse';
        $demande->save();

        #affiche tous les demande non accpte ou pas encore 
        $demandes = demande::all() ;
        return view('Admin', ['demandes' => $demandes ] );
    }
    public function suivi_demande(Request $req)
    {
        $demande_id = null ;
        $demande_code = null ;
        $demande_id = demande::find($req->id) ;
        $demande_code = demande::find($req->code) ;
        if ($demande_id != null && $demande_code!= null) {
            if ($demande_id->id == $demande_code->id) {
                return view('suivi_demande' , ['demande' => $demande_id ]);
            }
            else{
                return view('suivi') ;
            }
        }
        else{
            return view('suivi');
        }
    }
    public function admin($lang){
        $demandes = demande::all() ;
        app()->setlocale($lang) ;
        return view('Admin', [ 'demandes' => $demandes ] );
    }
    public function admina($lang){
        $demandes = demande::all() ;
        app()->setlocale($lang) ;
        return view('Admina', [ 'demandes' => $demandes ] );
    }
    public function adminr($lang){
        $demandes = demande::all() ;
        app()->setlocale($lang) ;
        return view('Adminr', [ 'demandes' => $demandes ] );
    }
    public function admint($lang){
        $demandes = demande::all() ;
        app()->setlocale($lang) ;
        return view('Admint', [ 'demandes' => $demandes ] );
    }

}
