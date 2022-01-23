<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class SignalerController extends Controller
{

    public function signaler()
    {

        if(session()->has('user'))
        {


        $response = Http::get('http://127.0.0.1:8000/api/signaler');
        $signalers = $response->json();

        $responses = Http::get('http://127.0.0.1:8000/api/materiel');
        $materiels = $responses->json();

        

        return view('materiel/matsignaler', compact('signalers','materiels'));
      
        }else{
            return view('login/login');
        }


    }

    public function signal($id)
    {

        if(session()->has('user'))
        {


        $respons = Http::delete('http://127.0.0.1:8000/api/signaler/'.$id);
      
        $response = Http::get('http://127.0.0.1:8000/api/signaler');
        $signalers = $response->json();

        $responses = Http::get('http://127.0.0.1:8000/api/materiel');
        $materiels = $responses->json();

        

        return view('materiel/matsignaler', compact('signalers','materiels'));
      
        }else{
            return view('login/login');
        }


    }

    public function addus(Request $request)
    {
        if(session()->has('user'))
        {
        $message = $request->input('message');
        $user_id = $request->session()->get('userID');
        $materiel_id = $request->input('idmat');
        $etat = 0;


        $response = Http::post('http://127.0.0.1:8000/api/signaler', [
            'message' => $message,
            'user_id' => $user_id,
            'materiel_id' => $materiel_id,
            'etat' => $etat
            
        ]);

        $responses = Http::get('http://127.0.0.1:8000/api/materiel');
        $materiels = $responses->json();

        $responsess = Http::get('http://127.0.0.1:8000/api/allocation');
        $allocations = $responsess->json();

        return view('usersimple/usermateriel', compact('allocations','materiels'));
      
        }else{
            return view('login/login');
        }

        
    }

    public function signalermat(Request $request)
    {
        if(session()->has('user'))
        {
        $etat = $request->input('etat');
        $user_id = $request->session()->get('userID');
        $materiel_id = $request->input('idmat');
       
        $response = Http::post('http://127.0.0.1:8000/api/materielup', [
            'materiel_id' => $materiel_id,
            'etat' => $etat
            
        ]);

        $respons = Http::get('http://127.0.0.1:8000/api/signaler');
        $signalers = $respons->json();

        $responses = Http::get('http://127.0.0.1:8000/api/materiel');
        $materiels = $responses->json();

        

        return view('materiel/matsignaler', compact('signalers','materiels'));
      
      
        }else{
            return view('login/login');
        }

        
    }
}
