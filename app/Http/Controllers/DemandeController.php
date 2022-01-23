<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;


class DemandeController extends Controller
{
    
    public function index()
    {
        if(session()->has('user'))
        {
        $responses = Http::get('http://127.0.0.1:8000/api/typedemande');
        $typedemandes = $responses->json();

        $responses = Http::get('http://127.0.0.1:8000/api/demande');
        $demandes = $responses->json();
            
            return view('demande/ajoutdemande', compact('typedemandes','demandes'));
        }else{
            return view('login/login');
        }
            
    }

    public function demandeuselist()
    {
        if(session()->has('user'))
        {
        $responsess = Http::get('http://127.0.0.1:8000/api/typedemande');
        $typedemandes = $responsess->json();

        $responseUs = Http::get('http://127.0.0.1:8000/api/users');
        $users = $responseUs->json();

        $responses = Http::get('http://127.0.0.1:8000/api/demande');
        $demandes = $responses->json();
            
            return view('usersimple/listedemande', compact('typedemandes','demandes','users'));
        }else{
            return view('login/login');
        }
            
    }

    public function demandeuselistg()
    {
        if(session()->has('user'))
        {
        $responsess = Http::get('http://127.0.0.1:8000/api/typedemande');
        $typedemandes = $responsess->json();

        $responseUs = Http::get('http://127.0.0.1:8000/api/users');
        $users = $responseUs->json();

        $responses = Http::get('http://127.0.0.1:8000/api/demande');
        $demandes = $responses->json();
            
            return view('materiel/listedemande', compact('typedemandes','demandes','users'));
        }else{
            return view('login/login');
        }
            
    }


    public function demandeuser()
    {
        if(session()->has('user'))
        {
        $responses = Http::get('http://127.0.0.1:8000/api/typedemande');
        $typedemandes = $responses->json();

        $responses = Http::get('http://127.0.0.1:8000/api/demande');
        $demandes = $responses->json();
            
            return view('usersimple/ajoutdemande', compact('typedemandes','demandes'));
        }else{
            return view('login/login');
        }
    }

    
    public function update($id)
    {
        if(session()->has('user'))
        {
      //  echo "update succes  ID : ".$id;
        $responses = Http::get('http://127.0.0.1:8000/api/demande/'.$id);
        $demandess = $responses->json();
         //   return $responses->json();;
         $demand = $demandess['libelle'];
         $id = $demandess['id'];
         $valid = $demandess['valid'];
         $user_id = $demandess['user_id'];
         $update = "Oui";
         $archive = 0;
         $type = $demandess['type_id'];
         $response = Http::get('http://127.0.0.1:8000/api/typedemande/'.$type);
         $types = $response->json();
         $typedemand = $types['libelle'];

         $responses = Http::get('http://127.0.0.1:8000/api/typedemande');
         $typedemandes = $responses->json();

         $responses = Http::get('http://127.0.0.1:8000/api/demande');
         $demandes = $responses->json();

           return view('demande/editdemande', compact('valid','id','archive','user_id','update','typedemandes','demandes','typedemand','demand'));
        }else{
            return view('login/login');
        }
    }
    public function add(Request $request)
    {
        if(session()->has('user'))
        {
        $libelle = $request->input('libelle');
        $user_id = 1;
        $type_id = $request->input('type_id');
        $reponse = "new";
        $valid = "new";
        
        $update = "new";
        $archive = 0;

        $title = " Demande venant de ". session()->get('user'); 


        $details = [
            'title' => $title,
            'body' => $libelle
        ];
        Mail::to("stephzoux@gmail.com")->send(new TestMail($details));


        $response = Http::post('http://127.0.0.1:8000/api/demande', [
            'libelle' => $libelle,
            'user_id' => $user_id,
            'type_id' => $type_id,
            'reponse' => $reponse,
            'valid' => $valid,
            'update' => $update,
            'archive' => $archive,
            
        ]);

        $response = Http::get('http://127.0.0.1:8000/api/typedemande');
        $typedemandes = $response->json();
        $responses = Http::get('http://127.0.0.1:8000/api/demande');
        $demandes = $responses->json();
            
            return view('demande/ajoutdemande', compact('typedemandes','demandes'));

        }else{
            return view('login/login');
        }
   
    }


    public function adddemande(Request $request)
    {
        if(session()->has('user'))
        {
        $libelle = $request->input('libelle');
        $user_id = $request->session()->get('userID');
        $type_id = $request->input('type_id');
        $reponse = "new";
        $valid = "new";
        
        $update = "new";
        $archive = 0;


        $response = Http::post('http://127.0.0.1:8000/api/demande', [
            'libelle' => $libelle,
            'user_id' => $user_id,
            'type_id' => $type_id,
            'reponse' => $reponse,
            'valid' => $valid,
            'update' => $update,
            'archive' => $archive,
            
        ]);

        $responses = Http::get('http://127.0.0.1:8000/api/typedemande');
        $typedemandes = $responses->json();

        $responsess = Http::get('http://127.0.0.1:8000/api/demande');
        $demandes = $responsess->json();
            
            return view('usersimple/ajoutdemande', compact('typedemandes','demandes'));
 

        }else{
            return view('login/login');
        }
   
    }



    public function edit(Request $request)
    {

        
        if(session()->has('user'))
        {

      
        $id = $request->input('id');
        $libelle = $request->input('libelle');
        $user_id = (int)$request->input('libelle');
        $type_id = (int)$request->input('user_id');
        $reponse = $request->input('reponse');
        $valid = $request->input('valid');
        
        $update = $request->input('update');
        $archive = (int)$request->input('archive');
        $ch = "http://127.0.0.1:8000/api/demande/".$id;
         $response = Http::put($ch, [
            'id' => $id,
            'libelle' => $libelle,
            'user_id' => $user_id,
            'type_id' => $type_id,
            'reponse' => $reponse,
            'valid' => $valid,
            'update' => $update,
            'archive' => $archive,
            
        ]);

        $response = Http::get('http://127.0.0.1:8000/api/typedemande');
        $typedemandes = $response->json();
        $responses = Http::get('http://127.0.0.1:8000/api/demande');
        $demandes = $responses->json();
            
            return view('demande/ajoutdemande', compact('typedemandes','demandes'));
 
        }else{
            return view('login/login');
        }
   
    }
    

}
