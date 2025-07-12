<?php

namespace App\Http\Controllers;

use App\Models\parcel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class parcelcontroller extends Controller
{
    public function home_index(){
        $parcels=parcel::all();
        $nbParcels=count($parcels);
        return view('welcome', ['nbParcels'=>$nbParcels]);
    }
        public function tracking_index(){
            return view('tracking');
        }
        public function tracking_search(Request $request)
{
    $strackingNumber = $request->tracking_number;
    $parcel = parcel::where('tracking_number', $strackingNumber)->first();

    if (!$parcel) {
        return redirect()->back()->with('message', 'Colis introuvable');
    }

    // Renvoie l'objet $parcel à la vue avec succès
    return view('tracking', ['parcel' => $parcel]);
}

    public function register_index(){
        return view('register');
    }
    public function register_new_parcel(request $request){
        $strackingNumber= rand (1000000000,9999999999);
            $message="colis enregistrer ! numero du suivi" .$strackingNumber;
            // VALIDER LES CHAMPS FORMULAIRES
            $validator=Validator::make($request->all(),[
            'address_dep'=>'required|string|max:255',
            'address_arr'=>'required|string|max:255',
            'weigh'=>'required|numeric|min:1'
            
            ]);
             if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
             }
            //INSERTION BASE DE DONNEES
            $parcel = parcel::create([
                'address_dep'=>$request->address_dep,
                'address_arr'=>$request->address_arr,
                'weigh'=>$request->weigh,
                'tracking_number'=>$strackingNumber,
            ]);
            return view('/register',compact('message'));
        
    }
}
