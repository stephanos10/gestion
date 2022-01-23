<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class MaterielController extends Controller
{

    public function vumateriel()
    {
        if(session()->has('user'))
        {
            return view('materiel/ajoutmateriel');

        }else{
            return view('login/login');
        }

    }

    public function add(Request $request)
    {
        if(session()->has('user'))
        {
        $model = $request->input('model');
        $marque = $request->input('marque');
        $designation = $request->input('designation');
        $prix = $request->input('prix');
        $garantie = $request->input('garantie');
        $adresse = "no"; 
        $provenance = $request->input('provenance');
        $etat = "nickel";
        $repartition = "no";


        $numero = $request->input('numero');
        $type_id = $request->input('type_id');
        $date = $request->input('date');

      //  $file = $request->file('materiel_image');

        $name = $request->file('image')->getClientOriginalName();
 
        $path = $request->file('image')->store('public/images');
        $request->file('image')->move('public/images', $name);


        $response = Http::post('http://127.0.0.1:8000/api/materiel', [
            'model' => $model,
            'adresse' => $adresse,
            'type_id' => $type_id,
            'date' => $date,
            'materiel_imagepath' => $path,
            'materiel_imagename' => $name,
            'marque' => $marque,
            'prix' => $prix,
            'garantie' => $garantie,
            'code' => $numero."".$prix,
            'numero' => $numero,
            'designation' => $designation,
            'provenance' => $provenance,
            'etat' => $etat,
            'repartition' => $repartition
        ]);

        $statut = ['status' => 'Image Has been uploaded'];
        return view('materiel/ajoutmateriel', compact('statut'));

    }else{
        return view('login/login');
    }
        //var_dump($file)
        // Get the contents of the file
       // $contents = $file->openFile()->fread($file->getSize());
       // echo "Size : ".$contents;
   /*      if(request()->hashFile('materiel_image'))
        {
            $file = $request->file('materiel_image');
            $extension = $file->getClientOrignalExtension();
            $filename = time().''.$extension;
            $file->move('uploads/materiels/',$filename);
            echo  "chemin ".$filename;
        } */
    }


    public function approv(Request $request)
    {
        if(session()->has('user'))
        {
        $nomf = $request->input('nomf');
        $contactf = $request->input('contactf');
        $adressef = $request->input('adressef');
        $model = $request->input('model');
        $provenance = $request->input('provenance');
        $marque = $request->input('marque');
        $designation = $request->input('designation');
        $prix = $request->input('prix');
        $garantie = $request->input('garantie');
        $adresse = $request->session()->get('campusLB');
        
        $user_id = $request->session()->get('userID'); 

        $numero = $request->input('numero');
        $type_id = $request->input('type_id');
        $date = $request->input('date');
        $etat = "nickel";
           
      //  $file = $request->file('materiel_image');

        $name = $request->file('image')->getClientOriginalName();
 
        $path = $request->file('image')->store('public/images');
        $request->file('image')->move('public/images', $name);
        $idf = 0;
       // echo "Nom Fournisseur : ".$nomf."  Contact : ".$contactf."  adresse: ".$adressef;
        $respons = Http::get('http://127.0.0.1:8000/api/fournisseur/search/'.$contactf);
        $tampons = $respons->json();
        if($tampons==NULL)
        {
            $response = Http::post('http://127.0.0.1:8000/api/fournisseur', [
                'nom' => $nomf,
                'contact'  => $contactf,
                'adresse'  => $adressef
            ]);
            $tamponss = $response->json();
            $idf = $tamponss['id'];
        //   var_dump($tamponss);
       // echo  " id : ".$tamponss['id'];
         //   echo " last id : ".$tamponss;

        }else{
            $idf = $tampons[0]['id'];
          //  echo "  date find succes ID ".$idf;
        }
        /* 
        echo $user_id." ".$provenance. " ".$etat. "<br/>";
        echo $type_id. " ".$numero." ".$date. "<br/>";
        echo $model." ".$adresse." ".$marque. "<br/>";
        echo $path." ".$name. "<br/>";
        echo $garantie." ".$prix. " ".$designation. "<br/>";  */

          $response = Http::post('http://127.0.0.1:8000/api/approtampon', [
            'model' => $model,
            'provenance'  => $provenance,
            'etat' => $etat,
            'user_id' => $user_id,
            'adresse' => $adresse,
            'type_id' => $type_id,
            'date' => $date,
            'materiel_imagepath' => $path,
            'materiel_imagename' => $name,
            'marque' => $marque,
            'prix' => $prix,
            'garantie' => $garantie,
            'code' => $numero."".$prix,
            'numero' => $numero,
            'fournisseur_id' => $idf,
            'designation' => $designation
        ]);
        $statut = ['status' => 'succes added'];

        $responsess = Http::get('http://127.0.0.1:8000/api/approtampon');
        $appros = $responsess->json();
        return view('materiel/approvisionnement', compact('statut','appros')); 

       }else{
        return view('login/login');
      }
      
    }


    public function approvdelete($id)
    {

        $responses = Http::delete('http://127.0.0.1:8000/api/approtampon/'.$id);


        $responsess = Http::get('http://127.0.0.1:8000/api/approtampon');
        $appros = $responsess->json();
        $statut = ['status' => 'succes added'];

        return view('materiel/approvisionnement', compact('statut','appros'));

    }//approsave

    public function bdcom()
    {
        if(session()->has('user'))
        {
            $responsess = Http::get('http://127.0.0.1:8000/api/matbon');
            $mats = $responsess->json();

            return view('materiel/bondecommande', compact('mats'));
        }else{
            return view('login/login');
        }

    }//savebondecom

    public function savebondecom($id)
    {
        if(session()->has('user'))
        {
            $responsess = Http::get('http://127.0.0.1:8000/api/findbyus/'.$id);
            $tampons = $responsess->json();
            $dte = "";
            $i = 0;
            foreach ($tampons as $key => $value) {
                if($value['bon_id'] == 0 )
                {
                    $dte = $value['date'];

                }
                $i++;
            }


            $response = Http::post('http://127.0.0.1:8000/api/bdcomm', [
                'date' => $dte
              
            ]);
            $bdc =  $response->json();
           // $bdc['id']
           foreach ($tampons as $key => $value) {
                if($value['bon_id'] == 0 )
                {
                    $responses = Http::post('http://127.0.0.1:8000/api/matbonupdate', [
                        'id' => $value['id'] ,
                        'bon_id' => $bdc['id']
                    ]);
                }
           
           }

           $responsesse = Http::get('http://127.0.0.1:8000/api/matbon');
           $mats = $responsesse->json();

           return view('materiel/bondecommande', compact('mats'));

           // return view('materiel/bondecommande', compact('mats'));
        }else{
            return view('login/login');
        }

    }

    public function affbdc($id)
    {
        $responsess = Http::get('http://127.0.0.1:8000/api/findbybon/'.$id);
         $mats = $responsess->json();
        return view('materiel/bon', compact('mats'));

    }

    public function lbdc()
    {
        $responsesse = Http::get('http://127.0.0.1:8000/api/bdcomm');
           $mats = $responsesse->json();
        return view('materiel/listebon', compact('mats'));

    }


    public function deletbondecom($id)
    {
        if(session()->has('user'))
        {
            $responses = Http::delete('http://127.0.0.1:8000/api/matbon/'.$id);
            $responsess = Http::get('http://127.0.0.1:8000/api/matbon');
            $mats = $responsess->json();

            return view('materiel/bondecommande', compact('mats'));
        }else{
            return view('login/login');
        }

    }

  

    public function addbondecom(Request $request)
    {
        if(session()->has('user'))
        {
            $designation = $request->input('designation');
            $nombre = $request->input('nombre');
            $prix = $request->input('prix');
            $user_id = $request->input('user_id');
            $nfournisseur = $request->input('nfour');
            $numerof = $request->input('numfour');
            $date = $request->input('date'); 
            $bon_id = 0;

            $response = Http::post('http://127.0.0.1:8000/api/matbon', [
                'designation' => $designation,
                'nombre'  => $nombre,
                'prix' => $prix,
                'nfournisseur' => $nfournisseur,
                'numerof' => $numerof,
                'user_id' => $user_id,
                'date' => $date,
                'bon_id' => $bon_id
            ]);

            $responsess = Http::get('http://127.0.0.1:8000/api/matbon');
            $mats = $responsess->json();

            return view('materiel/bondecommande', compact('mats'));
        }else{
            return view('login/login');
        }
    }

    public function approsave()
    {
        $user_id = session()->get('userID'); 

         $respons = Http::get('http://127.0.0.1:8000/api/approtampons/'.$user_id);
        $tampons = $respons->json();
        $i=0;
        $dte = "";
        foreach ($tampons as $key => $value) {
            $dte = $value['date'];
           // $i++;
            //echo "Marque".$i." ".$value['date']."<br/>";
        }

        $response = Http::post('http://127.0.0.1:8000/api/approvisionnement', [
            'date' => $dte
          
        ]);
        $appr =  $response->json();

      //  echo $appr['id'];

      $v = array();

      foreach ($tampons as $key => $value) {
      $response = Http::post('http://127.0.0.1:8000/api/ligneapprov', [
        'model' => $value['model'],
        'provenance'  => $value['provenance'],
        'etat' => $value['etat'],
        'appro_id' => $appr['id'],
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
        'fournisseur_id' => $value['fournisseur_id'],
        'designation' => $value['designation']
        ]);
        $v = $response->json();

    }


    $repartition = "no";
    foreach ($tampons as $key => $value) {
        $ch = "";
        $ch =  substr($value['date'], 8, 2)."".substr($value['date'], 5, 2)."".substr($value['date'], 2, 2)."ISI";
        if(substr($value['adresse'], 4, 2) == "Da")
        {
            $ch = $ch."DKR".$value['id']."". strtoupper(substr($value['marque'], 0, 3));
        }
        if(substr($value['adresse'], 4, 2) == "Di")
        {
            $ch = $ch."DRB".$value['id']."". strtoupper(substr($value['marque'], 0, 3));
        }
        if(substr($value['adresse'], 4, 2) == "Ke")
        {
            $ch = $ch."KMS".$value['id']."". strtoupper(substr($value['marque'], 0, 3));
        }
        if(substr($value['adresse'], 4, 2) == "Ka")
        {
            $ch = $ch."KFR".$value['id']."". strtoupper(substr($value['marque'], 0, 3));
        }

        $response = Http::post('http://127.0.0.1:8000/api/materiel', [
          'model' => $value['model'],
          'provenance'  => $value['provenance'],
          'etat' => $value['etat'],
          'repartition' => $repartition,
          'adresse' => $value['adresse'],
          'type_id' => $value['type_id'],
          'date' => $value['date'],
          'materiel_imagepath' => $value['materiel_imagepath'],
          'materiel_imagename' => $value['materiel_imagename'],
          'marque' => $value['marque'],
          'prix' => $value['prix'],
          'garantie' => $value['garantie'],
          'code' => $value['code'],
          'fournisseur_id' => $value['fournisseur_id'],
          'numero' => $value['numero'],
          'designation' => $value['designation'],
          'ident' => $ch
     
    ]);

    }
 


    foreach ($tampons as $key => $value) {
    
      $responses = Http::delete('http://127.0.0.1:8000/api/approtampon/'.$value['id']);

    }



        // $responses = Http::delete('http://127.0.0.1:8000/api/approtampon/'.$user_id);


       
        $statut = ['status' => 'succes added'];

        return view('materiel/approvisionnement', compact('statut'));

    }

    
    public function index()
    {
        if(session()->has('user'))
        { 
        $model = request('model');
        $marque = request('marque');
        $designation = request('designation');;
        $prix = request('prix');
        $garantie = request('garantie');
        $adresse = "no";  
        $numero = request('numero');
        $type_id = request('type_id');
        $date = request('date');
        $materiel_image = request('materiel_image');

        $value = 0;
        $response = Http::post('http://127.0.0.1:8000/api/materiel', [
            'model' => $model,
            'adresse' => $adresse,
            'type_id' => $type_id,
            'date' => $date,
            'materiel_image' => $materiel_image,
            'marque' => $marque,
            'prix' => $prix,
            'garantie' => $garantie,
            'fournisseur_id' => $value,
            'numero' => $numero,
            'designation' => $designation,
        ]);
        //$file = request->file('materiel_image');
        $file = request('materiel_image');


        // Get the contents of the file
        $contents = $file->openFile()->fread($file->getSize());
        echo $model." ".$type_id." ".$date." ".$marque." ".$prix." ".$designation." ".$numero." ".$garantie." ".$contents;
    }else{
        return view('login/login');
    }
        
    }


    public function show()
    {
        if(session()->has('user'))
        {
        $responses = Http::get('http://127.0.0.1:8000/api/materiel');
        $materiels = $responses->json();

       // $v = "public/images/".$materiels['materiel_imagename'];
       // {{asset('{{$v}}')}}
      //  $v2 = "{{asset('".$v."')}}";
        return view('materiel/listemateriel', compact('materiels'));
        
         
        }else{
            return view('login/login');
        }
    }

    public function etatsimple()//etatmateriel
    {

        if(session()->has('user'))
        {
            $code = request('code');
        $responses = Http::get('http://127.0.0.1:8000/api/materielbycode/'.$code);
        $etat1 = $responses->json();

       // $v = "public/images/".$materiels['materiel_imagename'];
       // {{asset('{{$v}}')}}
      //  $v2 = "{{asset('".$v."')}}";
        return view('admin/logistique', compact('etat1'));
        
         
        }else{
            return view('login/login');
        }

    }

    public function etatmateriel()//etatdetails
    {

        if(session()->has('user'))
        {
            $code = request('code');
        $responses = Http::get('http://127.0.0.1:8000/api/materielbycode/'.$code);
        $materiel = $responses->json();

      
       // $v = "public/images/".$materiels['materiel_imagename'];
       // {{asset('{{$v}}')}}
      //  $v2 = "{{asset('".$v."')}}";
        return view('admin/logistique', compact('materiel'));
        
         
        }else{
            return view('login/login');
        }

    }

    public function etatdetails()
    {

        if(session()->has('user'))
        {
            $code = request('code');
        $responses = Http::get('http://127.0.0.1:8000/api/materielbycode/'.$code);
        $materiels = $responses->json();
        $i = 0 ;
        foreach ($materiels as $key => $value) {
            $i = $value['id'];
           // $i++;
           // echo "materiel = ".$value['id']."<br/>";
        }

        $response = Http::get('http://127.0.0.1:8000/api/allocations/'.$i);
        $allocations = $response->json();
        $i1 = 0;
        foreach ($allocations as $key => $value) {
            $i1 = $value['user_id'];
        }

        $response2 = Http::get('http://127.0.0.1:8000/api/users/'.$i1);
        $users = $response2->json();
      
      //  var_dump($users);
       // $v = "public/images/".$materiels['materiel_imagename'];
       // {{asset('{{$v}}')}}
      //  $v2 = "{{asset('".$v."')}}";
       return view('admin/logistique', compact('materiels','users'));
        
         
        }else{
            return view('login/login');
        }

    }

    public function usermateriel()
    {

        if(session()->has('user'))
        {
        $responses = Http::get('http://127.0.0.1:8000/api/materiel');
        $materiels = $responses->json();

        $responsess = Http::get('http://127.0.0.1:8000/api/allocation');
        $allocations = $responsess->json();

        return view('usersimple/usermateriel', compact('allocations','materiels'));
        }else{
            return view('login/login');
        }
    }
}
