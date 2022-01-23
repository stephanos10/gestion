<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class TestController extends Controller
{
    public function index()
    {
        if(session()->has('user'))
        {
            return view('materiel/ajoutmateriel');

        }else{
            return view('login/login');
        }

    }
    public function index2()
    {
       
            return view('materiel/lstmateriel');

       

    }

    public function listemat()
    {

        if(session()->has('user'))
        {
            return view('materiel/listemateriel');

        }else{
            return view('login/login');
        }


    }


    public function index3()
    {

        $response = Http::get('http://127.0.0.1:8000/api/lastdemande');
        $dem = $response->json();
       
            $idtyp = 0;
            if(isset($dem))
            {
                $idtyp = $dem['type_id'];
                $responses = Http::get('http://127.0.0.1:8000/api/typedemande/'.$idtyp);
                $tp = $responses->json();
                $type = $tp['libelle'];
                $responsess = Http::get('http://127.0.0.1:8000/api/users/'.$dem['user_id']);
                $user = $responsess->json();
                $users = $user['name'];
                $email = $user['email'];
                $demande = $dem['libelle'];
                return view('acceuil/index', compact('demande','type','users','email'));
            }else{
                $type = " ";
                $users = " ";
                $email = " ";
                $demande = "Aucune demande ";
                return view('acceuil/index', compact('demande','type','users','email'));
            }
       
    }


    public function index4()
    {

        $responsess = Http::get('http://127.0.0.1:8000/api/approtampon');
        $appros = $responsess->json();
        return view('materiel/approvisionnement', compact('appros'));

    }

    public function index5()
    {

        $responses = Http::get('http://127.0.0.1:8000/api/services');
        $services = $responses->json();

        
        return view('admin/service', compact('services'));
        

    }

    public function index6()
    {

        $responses = Http::get('http://127.0.0.1:8000/api/campus');
        $campus = $responses->json();

        
        return view('admin/campus', compact('campus'));
        
    }

    public function index7()
    {

        $responses = Http::get('http://127.0.0.1:8000/api/campus');
        $campus = $responses->json();

        
        return view('admin/logistique', compact('campus'));
        
    }

    public function pdf($id)//appropdf
    {



        $responses = Http::get('http://127.0.0.1:8000/api/findbybon/'.$id);
        $matbon = $responses->json();
        $dates = "";
        foreach ($matbon as $key => $value) {
            $dates = $value['date'];
           // $i++;
           // echo "materiel = ".$value['id']."<br/>";
        }
        //var_dump($matbon);
        //echo $id;
        return view('bdcom/bdcompdf', compact('matbon','id','dates'));
        
    }

    public function appropdf($id)
    {



        $responses = Http::get('http://127.0.0.1:8000/api/findapprolign/'.$id);
        $matbon = $responses->json();
        $dates = "";
        foreach ($matbon as $key => $value) {
            $dates = $value['date'];
           // $i++;
           // echo "materiel = ".$value['id']."<br/>";
        }
        //var_dump($matbon);
        //echo $id;
        return view('appro/approlistpdf', compact('matbon','id','dates'));
        
    }

    public function index8()
    {

         $responses = Http::get('http://127.0.0.1:8000/api/approvisionnement');
        $appros = $responses->json(); 

        
        return view('appro/listeappro', compact('appros'));

        //return view('appro/listeappro');

        
    }

    public function repartition()
    {
        $responsescamp = Http::get('http://127.0.0.1:8000/api/campus');
         $campus = $responsescamp->json();

        $respons = Http::get('http://127.0.0.1:8000/api/reparti');
        $repartitions = $respons->json();
        
        $responses = Http::get('http://127.0.0.1:8000/api/materiel');
        $appros = $responses->json();

        $responsesc = Http::get('http://127.0.0.1:8000/api/services');
        $services = $responsesc->json();

        return view('materiel/repartition', compact('appros','repartitions','campus','services'));

    }

    

    public function repartitions(Request $request)//
    {

        $user_id = $request->input('id');
        $camp = $request->input('camp');

        $responsescamp = Http::get('http://127.0.0.1:8000/api/campus/'.$camp);
         $campuss = $responsescamp->json();

         $response = Http::post('http://127.0.0.1:8000/api/repartition', [
            'adresse' => $campuss['libelle'],
            'user_id' => $user_id
       
      ]);

      $repartition = $response->json();

      $responses = Http::post('http://127.0.0.1:8000/api/repartiup', [
        'adresse' => $campuss['libelle'],
        'user_id' => $user_id,
        'repartition_id' => $repartition['id']
   
  ]);
    
         $responsescam = Http::get('http://127.0.0.1:8000/api/campus');
         $campus = $responsescam->json();

        $respons = Http::get('http://127.0.0.1:8000/api/reparti');
        $repartitions = $respons->json();
        
        $responsess = Http::get('http://127.0.0.1:8000/api/materiel');
        $appros = $responsess->json();

        $responsesc = Http::get('http://127.0.0.1:8000/api/services');
        $services = $responsesc->json();
        return view('materiel/repartition', compact('appros','repartitions','campus','services'));
 
    }


    public function repartitionserv(Request $request)
    {

        $user_id = $request->input('id');
        $service = $request->input('service');

        $responsescamp = Http::get('http://127.0.0.1:8000/api/services/'.$service);
         $serv = $responsescamp->json();
         $campuss = "ISI Dakar";
         $response = Http::post('http://127.0.0.1:8000/api/repartition', [
            'adresse' => $campuss,
            'user_id' => $user_id
       
      ]);

      $repartition = $response->json();

      $responses = Http::post('http://127.0.0.1:8000/api/repartiupserv', [
        'libelle' => $serv['libelle'],
        'user_id' => $user_id,
        'repartition_id' => $repartition['id']
   
  ]);
    
         $responsescam = Http::get('http://127.0.0.1:8000/api/campus');
         $campus = $responsescam->json();

        $respons = Http::get('http://127.0.0.1:8000/api/reparti');
        $repartitions = $respons->json();
        
        $responsess = Http::get('http://127.0.0.1:8000/api/materiel');
        $appros = $responsess->json();

        $responsesc = Http::get('http://127.0.0.1:8000/api/services');
        $services = $responsesc->json();
        return view('materiel/repartition', compact('appros','repartitions','campus','services'));
 
    }

    public function repartitiondeleteline($id)
    {

     

        $response = Http::delete('http://127.0.0.1:8000/api/reparti/'.$id);

    
         $responsescam = Http::get('http://127.0.0.1:8000/api/campus');
         $campus = $responsescam->json();
         $responsesc = Http::get('http://127.0.0.1:8000/api/services');
         $services = $responsesc->json();

        $respons = Http::get('http://127.0.0.1:8000/api/reparti');
        $repartitions = $respons->json();
        
        $responsess = Http::get('http://127.0.0.1:8000/api/materiel');
        $appros = $responsess->json();
        return view('materiel/repartition', compact('appros','repartitions','campus','services'));
 
    }

    public function repartiti($id)
    {

        $respons = Http::get('http://127.0.0.1:8000/api/materiel/'.$id);
        $value = $respons->json();
        $repartition_id = 0;
        $user_id = session()->get('userID'); 
        if(!isset($user_id))
        {
            $user_id = 0;
        }
            $service = "no";
            $response = Http::post('http://127.0.0.1:8000/api/reparti', [
              'model' => $value['model'],
              'provenance'  => $value['provenance'],
              'etat' => $value['etat'],
              'repartition' => $value['repartition'],
              'adresse' => $value['adresse'],
              'type_id' => $value['type_id'],
              'date' => $value['date'],
              'materiel_imagepath' => $value['materiel_imagepath'],
              'materiel_imagename' => $value['materiel_imagename'],
              'marque' => $value['marque'],
              'prix' => $value['prix'],
              'garantie' => $value['garantie'],
              'code' => $value['code'],
              'numero' => $value['numero'],
              'designation' => $value['designation'],
              'repartition_id' => $repartition_id,
              'user_id' => $user_id,
              'libelle' => $service
         
        ]);
        $responsescamp = Http::get('http://127.0.0.1:8000/api/campus');
        $campus = $responsescamp->json();
    
        $respons = Http::get('http://127.0.0.1:8000/api/reparti');
        $repartitions = $respons->json();
        
        $responses = Http::get('http://127.0.0.1:8000/api/materiel');
        $appros = $responses->json();

        $responsesc = Http::get('http://127.0.0.1:8000/api/services');
        $services = $responsesc->json();

        return view('materiel/repartition', compact('appros','repartitions','campus','services'));

    }

}
