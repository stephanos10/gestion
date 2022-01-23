<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConnexionController extends Controller
{
    public function getAll()
    {
        $response = Http::get('http://127.0.0.1:8000/api/roles');
        return $response->json();
    }

    public function connexion(Request $request)
    {
       // $email = request('your_name');
       // $password = request('your_pass');
         $email = $request->input('your_name');
        $password = $request->input('your_pass');
       // dd($email);
     //  echo $email;
        $response = Http::post('http://127.0.0.1:8000/api/login', [
            'email' => $email,
            'password' => $password,
        ]);
        $ok = 0;
        $values = $response->json();
        foreach ($values as $user) {
            if(isset($user["email"]))
            {
                $ok = 1;
                $request->session()->put('user',$user['name']);
                $request->session()->put('userID',$user['id']);
                $request->session()->put('userTel',$user['telephone']);
                $request->session()->put('userEmail',$user['email']);
                $respons = Http::get('http://127.0.0.1:8000/api/roles/'.$user['role_ide']);
                $rol = $respons->json();
                $responss = Http::get('http://127.0.0.1:8000/api/campus/'.$user['campus_id']);
                $camp = $responss->json();
                $request->session()->put('campusLB',$camp['libelle']);
                $request->session()->put('rolelb',$rol['libelle']);

            }
        }

        if($ok == 0)
        {
            return view('login/login');


        }else{
            //Session::get('cart_session_test');
            if($request->session()->get('rolelb')=="UtilSimple")
            {


                $responses = Http::get('http://127.0.0.1:8000/api/materiel');
                $materiels = $responses->json();

                $responsess = Http::get('http://127.0.0.1:8000/api/allocation');
                $allocations = $responsess->json();

                return view('usersimple/usermateriel', compact('allocations','materiels'));

            }else{
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
        }
    }

    public function admin()
    {
        if(session()->has('user'))
        {
            $responses = Http::get('http://127.0.0.1:8000/api/roles');
            $roles = $responses->json();

            $responseUs = Http::get('http://127.0.0.1:8000/api/users');
            $users = $responseUs->json();
            $responsescamp = Http::get('http://127.0.0.1:8000/api/campus');
            $campus = $responsescamp->json();

            
            return view('acceuil/accueil', compact('roles','users','campus'));
        }else{
            return view('login/login');
        }

    }



    public function role(Request $request)//mdpmodif
    {
        $libelle = $request->input('inputSuccess2');
       // dd($email);

        $response = Http::post('http://127.0.0.1:8000/api/roles', [
            'libelle' => $libelle,
        ]);
        

        $responses = Http::get('http://127.0.0.1:8000/api/roles');
        $roles = $responses->json();

        $responseUs = Http::get('http://127.0.0.1:8000/api/users');
        $users = $responseUs->json();
        
        $responsescamp = Http::get('http://127.0.0.1:8000/api/campus');
            $campus = $responsescamp->json();
        return view('acceuil/accueil', compact('roles','users','campus'));
        
    }

    public function mdpmodif(Request $request)
    {
        $user_id = $request->input('user_id');
        $pass = $request->input('pass');

       // dd($email);

        $response = Http::post('http://127.0.0.1:8000/api/passupdate', [
            'user_id' => $user_id,
            'pass' => $pass
        ]);
        

        $responses = Http::get('http://127.0.0.1:8000/api/roles');
        $roles = $responses->json();

        $responseUs = Http::get('http://127.0.0.1:8000/api/users');
        $users = $responseUs->json();
        
        $responsescamp = Http::get('http://127.0.0.1:8000/api/campus');
            $campus = $responsescamp->json();
        return view('acceuil/accueil', compact('roles','users','campus'));
        
    }

    public function user(Request $request)
    {
        $nom = $request->input('inputSuccess2'); 
        $prenom = $request->input('inputSuccess3'); 
        $name = $nom." ".$prenom;
        $telephone = $request->input('inputSuccess5'); 

        $email = $request->input('inputSuccess4'); 
        $password = "passer";
        $campus_id = $request->input('camp'); 
        $password_confirmation = "passer";
        $role_ide = $request->input('heard'); 

     //   echo $role_id." ".$name." ".$telephone." ".$email." ".$prenom." ".$password;
        //dd($role_id);
        $response = Http::post('http://127.0.0.1:8000/api/register', [
            'name' => $name,
            'campus_id' => $campus_id,
            'telephone' => $telephone,
            'password' => $password,
            'password_confirmation' => $password_confirmation,
            'role_ide' => $role_ide,
            'email' => $email,
        ]);
     
        $responses = Http::get('http://127.0.0.1:8000/api/roles');
        $roles = $responses->json();

        $responseUs = Http::get('http://127.0.0.1:8000/api/users');
        $users = $responseUs->json();
        
        $responsescamp = Http::get('http://127.0.0.1:8000/api/campus');
            $campus = $responsescamp->json();
        return view('acceuil/accueil', compact('roles','users','campus'));
        
    }

    // SERVICE ADMINISTRATION
    public function service(Request $request)
    {
        $libelle = $request->input('inputSuccess2');

        $response = Http::post('http://127.0.0.1:8000/api/services', [
            'libelle' => $libelle,
        ]);
        

        $responses = Http::get('http://127.0.0.1:8000/api/services');
        $services = $responses->json();

        
        return view('admin/service', compact('services'));
        
    }

    public function deletservice($id)
    {
        if(session()->has('user'))
        {
            $responses = Http::delete('http://127.0.0.1:8000/api/services/'.$id);
            $responsess = Http::get('http://127.0.0.1:8000/api/services');
            $services = $responsess->json();

        
            return view('admin/service', compact('services'));
        }else{
            return view('login/login');
        }

    }

    public function adminserv()
    {
        if(session()->has('user'))
        {
            $responsess = Http::get('http://127.0.0.1:8000/api/services');
            $services = $responsess->json();

        
            return view('admin/service', compact('services'));
        }else{
            return view('login/login');
        }

    }

    // CAMPUS ADMINISTRATION
    public function campus(Request $request)
    {
        $libelle = $request->input('inputSuccess2');
        $adresse = $request->input('inputSuccess3');


        $response = Http::post('http://127.0.0.1:8000/api/campus', [
            'libelle' => $libelle,
            'adresse' => $adresse
        ]);
        

        $responses = Http::get('http://127.0.0.1:8000/api/campus');
        $campus = $responses->json();

        
        return view('admin/campus', compact('campus'));
        
    }

    public function deletcampus($id)
    {
        if(session()->has('user'))
        {
            $responses = Http::delete('http://127.0.0.1:8000/api/campus/'.$id);
            $responsess = Http::get('http://127.0.0.1:8000/api/campus');
            $campus = $responsess->json();

        
            return view('admin/campus', compact('campus'));
        }else{
            return view('login/login');
        }

    }

    public function admincamp()
    {
        if(session()->has('user'))
        {
            $responsess = Http::get('http://127.0.0.1:8000/api/campus');
            $campus = $responsess->json();

        
            return view('admin/campus', compact('campus'));
        }else{
            return view('login/login');
        }

    }


    public function deletutil($id)
    {
        if(session()->has('user'))
        {
            $response = Http::delete('http://127.0.0.1:8000/api/users/'.$id);
            $responses = Http::get('http://127.0.0.1:8000/api/roles');
            $roles = $responses->json();
    
            $responseUs = Http::get('http://127.0.0.1:8000/api/users');
            $users = $responseUs->json();
            
            $responsescamp = Http::get('http://127.0.0.1:8000/api/campus');
                $campus = $responsescamp->json();
            return view('acceuil/accueil', compact('roles','users','campus'));

            }else{
            return view('login/login');
        }

    }

}
