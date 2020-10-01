<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Osoba;

class LicniPodaciController extends Controller
{

    public function podaciOsoba(){
       // $lista = Osoba::all();
       //$lista = Osoba::orderBy('ime')->get();
       //$lista = Osoba::where('godine', 22)->get();
       $lista = Osoba::latest()->get();

        return view('podaci.licniPodaci',['lista' => $lista]);
    }

   public function generalniPodaci(){
//slanje parametra(stringa) pogledu
    
    //$ime = 'samra';
    //$prezime = 'pusina';

    $podaci = [
        'ime' => 'Samra', 
        'prezime' => 'Pusina', 
        'godine' => 22
    ];

    $lista = [
        [
            'ime' => 'Samra', 
            'prezime' => 'Pusina', 
            'godine' => 22
        ],
        [
            'ime' => 'Amra', 
            'prezime' => 'Pusina', 
            'godine' => 22
        ],
        [
            'ime' => 'Adis', 
            'prezime' => 'Hadzovic', 
            'godine' => 22
        ]

        ];
        
    
    $parametarIme = request('ime');
    return view('podaci.licniPodaci', ['lista' => $lista, 'ime' => $parametarIme], $podaci);

    // vracanje jsona
   //return ['ime' => 'Samra', 'prezime' => 'Pusina'];
   }

   public function dajPodatke($id){
    // $id koristimo da bi ocitali neki zapis iz baze i poslali u neki pogled!!!

    $podaciOsobe = Osoba::findOrFail($id);
    return view('podaci.podaciOsobe', ['podaciOsobe' => $podaciOsobe]);
   }

   public function popuniFormu(){
    // $id koristimo da bi ocitali neki zapis iz baze i poslali u neki pogled!!!
    return view('podaci.forma');
   }

   public function spasiPodatke(){
    // $id koristimo da bi ocitali neki zapis iz baze i poslali u neki pogled!!!

    $osoba = new Osoba();
    $osoba->ime = request('ime');
    $osoba->prezime = request('prezime');
    $osoba->godine = request('godine');

    $osoba->save();

    return redirect('/licniPodaci/poruka')->with('mssg', 'Uspješno ste spasili podatke!');
   }

   public function poruka(){
    // $id koristimo da bi ocitali neki zapis iz baze i poslali u neki pogled!!!
    error_log('Greska');
    return view('podaci.poruka');
   }

   public function obrisiPodatke($id){
    // $id koristimo da bi ocitali neki zapis iz baze i poslali u neki pogled!!!
    $osoba = Osoba::findOrFail($id);
    $osoba->delete();
    return redirect('/licniPodaci');
   }
}
