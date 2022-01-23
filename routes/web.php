<?php
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\MaterielController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\AllocationController;
use App\Http\Controllers\SignalerController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Authentification

Route::get('/conn', [ConnexionController::class, 'getAll'])->name('conn.getall');
Route::post('/connexion', [ConnexionController::class, 'connexion']);
Route::post('/modifpass', [ConnexionController::class, 'mdpmodif']);
Route::get('/connexion', [ConnexionController::class, 'admin']);


// Allocation
Route::get('/allocation', [AllocationController::class, 'index']);
Route::post('/allocation', [AllocationController::class, 'store']);//


Route::post('/role', [ConnexionController::class, 'role']);
Route::post('/user', [ConnexionController::class, 'user']);
Route::get('/users/{id}', [ConnexionController::class, 'deletutil']);


//Teste
Route::get('/test', [TestController::class, 'index']);
Route::get('/test2', [TestController::class, 'index2']);
Route::get('/accueil', [TestController::class, 'index3']);
Route::get('/repartition', [TestController::class, 'repartition']);//repartition
Route::get('/repartition/{id}', [TestController::class, 'repartiti']);//repartition 
Route::get('/repartitions/{id}', [TestController::class, 'repartitiondeleteline']);//repartition 
Route::post('/repartition', [TestController::class, 'repartitions']);
Route::post('/repartitionserv', [TestController::class, 'repartitionserv']);


// Matériel

Route::get('/test/listemat', [TestController::class, 'listemat']);
Route::post('/materiel', [MaterielController::class, 'add']);
Route::get('/umateriel', [MaterielController::class, 'usermateriel']);//usermateriel
Route::get('/materiel/show', [MaterielController::class, 'show']);
Route::get('/materiel', [MaterielController::class, 'vumateriel']);//vumateriel
Route::get('/bondecommande', [MaterielController::class, 'bdcom']);
Route::post('/bondecom', [MaterielController::class, 'addbondecom']);//bondecom
Route::get('/bdcomde/{id}', [MaterielController::class, 'deletbondecom']);
Route::get('/bdsaveall/{id}', [MaterielController::class, 'savebondecom']);
Route::get('/bdc/{id}', [MaterielController::class, 'affbdc']);
Route::get('/listebon', [MaterielController::class, 'lbdc']);


//Approvisionnement

Route::get('/approvisionnement', [TestController::class, 'index4']);
Route::post('/approvisionnement', [MaterielController::class, 'approv']);//approvisionnement
Route::get('/approvisionnement/{id}', [MaterielController::class, 'approvdelete']);//approvisionnement
Route::get('/approsaveall', [MaterielController::class, 'approsave']);//approvisionnement
Route::get('/approliste', [TestController::class, 'index8']);// For the appro liste

//approsaveall


//signaler
Route::post('/signaler', [SignalerController::class, 'addus']);
Route::get('/signal', [SignalerController::class, 'signaler']);
Route::post('/signale', [SignalerController::class, 'signalermat']);//signale
Route::get('/signal/{id}', [SignalerController::class, 'signal']);

//SERVICE
Route::post('/service', [ConnexionController::class, 'service']);
Route::get('/services/{id}', [ConnexionController::class, 'deletservice']);
Route::get('/services', [ConnexionController::class, 'adminserv']);


//CAMPUS
Route::post('/campu', [ConnexionController::class, 'campus']);
Route::get('/campus/{id}', [ConnexionController::class, 'deletcampus']);
Route::get('/campus', [ConnexionController::class, 'admincamp']);



//mail
Route::get('/send-mail', [MailController::class, 'sendEmail']);
/* Route::get('/sendbasicemail', [MailController::class, 'basic_email']);
Route::get('/sendhtmlemail', [MailController::class, 'html_email']);
Route::get('/sendattachmentemail', [MailController::class, 'attachment_email']); */


//Demande

Route::post('/demande', [DemandeController::class, 'add']);
Route::post('/adddemande', [DemandeController::class, 'adddemande']);//adddemande
Route::get('/demande', [DemandeController::class, 'index']);
Route::get('/listedemandeus', [DemandeController::class, 'demandeuselist']);//listedemandeus
Route::get('/listedemandeusg', [DemandeController::class, 'demandeuselistg']);//listedemandeusg
Route::get('/demandeuser', [DemandeController::class, 'demandeuser']);//demandeuser
Route::get('/demandes/{id}', [DemandeController::class, 'update']); //demandeModif
Route::post('/demandeModif', [DemandeController::class, 'edit']); //demandeModif for call BD and update
Route::get('/logout', function(){
    if(session()->has('user'))
    {
        session()->pull('user');
        session()->pull('userID');

        return view('login/login');

    }
});


Route::get('/test/pdf', [TestController::class, 'pdf']);
Route::get('/bdcomvue/{id}', [TestController::class, 'pdf']);//bdcomvue

Route::get('/approvisionnementvue/{id}', [TestController::class, 'appropdf']);

Route::get('/test/index5', [TestController::class, 'index5']);
Route::post('/etat', [MaterielController::class, 'etatsimple']);
Route::post('/etatanddetail', [MaterielController::class, 'etatdetails']);//etatanddetail

Route::post('/matdetail', [MaterielController::class, 'etatmateriel']);//matdetail

Route::get('/test/index6', [TestController::class, 'index6']);
Route::get('/test/index7', [TestController::class, 'index7']);
Route::get('/test/index8', [TestController::class, 'index8']);// For the appro liste
Route::get('/suividustock', [TestController::class, 'index7']);//suividustock




Route::get('/', function () {
    return view('welcome');
});
