<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AllocationController extends Controller
{
    //

    public function index()
    {
        $responses = Http::get('http://127.0.0.1:8000/api/materiel');
        $materiels = $responses->json();

        $responsess = Http::get('http://127.0.0.1:8000/api/allocation');
        $allocations = $responsess->json();


        $responseUs = Http::get('http://127.0.0.1:8000/api/users');
        $users = $responseUs->json();
        
        return view('allocation/allocation', compact('materiels','users','allocations'));
    }

    public function store(Request $request)
    {
        
        $adresse = $request->input('adresse');
        $user_id = $request->input('user_id');
        $materiel_id = $request->input('materiel_id');
        $date = $request->input('date');
        $succes = "pas";


        $response = Http::post('http://127.0.0.1:8000/api/allocation', [
            'adresse' => $adresse,
            'user_id' => $user_id,
            'materiel_id' => $materiel_id,
            'succes' => $succes,
            'date' => $date,
            
        ]);

        $responses = Http::get('http://127.0.0.1:8000/api/materiel');
        $materiels = $responses->json();

        $responsess = Http::get('http://127.0.0.1:8000/api/allocation');
        $allocations = $responsess->json();


        $responseUs = Http::get('http://127.0.0.1:8000/api/users');
        $users = $responseUs->json();
        
        return view('allocation/allocation', compact('materiels','users','allocations'));

    }
}
