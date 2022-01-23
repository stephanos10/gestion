<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{asset('/images/favicon.ico')}}" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{asset('/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('/build/css/custom.min.css')}}" rel="stylesheet">

    <script>
      $(document).ready(function(){
        $('#MybtnModal').click(function(){
          $('#Mymodal').modal('show')
        });
      });
    </script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>BIENVENUE,</span>
                <h2>{{session('user')}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
							<li><a href="/accueil"><i class="fa fa-home"></i> Accueil <span class="fa fa-chevron-down"></span></a>
								
              @if(session('rolelb') == "Gestionnaire" || session('rolelb') == "Admin")
                <li><a><i class="fa fa-user"></i> Administration <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
                    <li><a href="/connexion">Utilisateur</a></li>
										<li><a href="/campus">Campus</a></li>
										<li><a href="/services">Service</a></li>

										
									</ul>
								</li>
              
								<li><a><i class="fa fa-edit"></i> Gestion Matériel <span class="fa fa-chevron-down"></span></a>
                     <ul class="nav child_menu">
										<li><a href="/materiel">Ajout Matériel</a></li>
										<li><a href="/materiel/show">Liste Matériel</a></li>
                      <li><a href="/signal">Matériels Signalés</a></li>
                       <li><a href="/repartition">Repartition Matériels</a></li>
                       <li><a href="/suividustock">Suivi Stock</a></li>
                       <li><a href="/bondecommande">Etablir un bon de commande</a></li>
                       <li><a href="/listebon">Liste bon de commande</a></li>

									</ul>
								</li>
                @endif
								<li><a><i class="fa fa-desktop"></i> Gestion allocation <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
                                    <li><a href="/allocation">Allocation</a></li>
										<li><a href="#">Ré-allocation</a></li>
										
									</ul>
								</li>

                @if(session('rolelb') == "Gestionnaire" || session('rolelb') == "Admin")
                                <li><a><i class="fa fa-edit"></i> Approvisionnement <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
										<li><a href="/approvisionnement">Approvisionnement</a></li>
										<li><a href="/approliste">Liste</a></li>
									</ul>
								</li>
                                @endif
                                
								<li><a><i class="fa fa-table"></i> Demandes <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
										<li><a href="/demande">Ajouter une demande</a></li>
										<li><a href="/listedemandeusg">Liste des demandes</a></li>
									</ul>
								</li>
								
								
							</ul>
						</div>
						

					</div>
                    <!-- /sidebar menu -->

            
                    <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">{{session('user')}}
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="/logout"><i class="fa fa-sign-out pull-right"></i> Déconnexion</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="{{asset('/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="{{asset('/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="{{asset('/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="{{asset('/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Utilisateur</span>
              <div class="count">250</div>
              <span class="count_bottom"><i class="green">4% </i> Tout le site</span>
            </div>
      
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Demande Toute nouvelle</span>
              <div class="count green">100</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> Nouvelle</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Ancienne Demande</span>
              <div class="count">200</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> Demande</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Materiels signalés</span>
              <div class="count">15</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> Signalés</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total nouvelle</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> nouvelle</span>
            </div>
          </div>
        </div>
          <!-- /top tiles -->
          <br />

          

          <div class="row">
            <div class="col-md-4 col-sm-4 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Dernière Demande <small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Settings 1</a>
                          <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">

                    <ul class="list-unstyled timeline widget">
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                              <a>Type de demande  ->  &nbsp;{{$type}}</a>
                                          </h2>
                            <div class="byline">
                              <span>13 hours ago</span> by <a>Jane Smith</a>
                            </div>
                            <br/>
                            <p class="excerpt">{{$demande}} <a>Read&nbsp;More</a>
                            </p>
                            <br/>
                            <p class="excerpt">Par : <a>{{$users}}&nbsp;  {{$email}}</a>
                            </p>
                          </div>
                        </div>
                      </li>
                  
                     
                    </ul>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-8 col-sm-8 ">



              <div class="row">

                <div class="col-md-12 col-sm-12 ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Visiteur en tourisme au Sénégal <small>geo-presentation</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Settings 1</a>
                              <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="dashboard-widget-content">
                        <div class="col-md-4 hidden-small">
                          <h2 class="line_30">1 millions de touristes</h2>

                          <table class="countries_list">
                            <tbody>
                              <tr>
                                <td>Etats Unis</td>
                                <td class="fs15 fw700 text-right">33%</td>
                              </tr>
                              <tr>
                                <td>France</td>
                                <td class="fs15 fw700 text-right">27%</td>
                              </tr>
                              <tr>
                                <td>Allemagne</td>
                                <td class="fs15 fw700 text-right">16%</td>
                              </tr>
                              <tr>
                                <td>Spagne</td>
                                <td class="fs15 fw700 text-right">11%</td>
                              </tr>
                              <tr>
                                <td>Grand bretaigne</td>
                                <td class="fs15 fw700 text-right">10%</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div id="world-map-gdp" class="col-md-8 col-sm-12 " style="height:230px;"></div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="row">

              
                <!-- end of weather widget -->
              </div>
            </div>
          </div>


          <div class="row">


          <div class="clearfix"></div>

<div class="">
         <div class="col-md-6 col-sm-6  ">
            <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-bars"></i> Vu sur <small>Info du compte</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Settings 1</a>
                        <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sécurité</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="modal-footer">
                <a href="#" class="btn btn-info btn-xs" data-target="#MySecondmodal" data-toggle="modal"><i class="fa fa-pencil"></i> Modifier mot de passe </a>

                <div class="modal fade" id="MySecondmodal">
																			<div class="modal-dialog">
																				<div class="modal-content">
																					<div class="modal-header">
																						<button type="button" class="close" data-dismiss="modal">×</button> 
																						<h4 class="modal-title">Mot de passe</h4>                                                             
																					</div> 
																							<div class="modal-body">
                                                                                            <form method="POST" action="/modifpass" enctype="multipart/form-data" class="form-label-left input_mask">
                                                                                        @csrf
                                                                                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                                                                                            <input type="text" class="form-control has-feedback-left" name="pass" id="inputSuccess2" placeholder="Mot de passe">
                                                                                            <input type="hidden" class="form-control has-feedback-left" name="user_id" value="{{session('userID')}}" >

                                                                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                                                                        </div>

                                                                                       
                                                                      

                                                                                   

                                                                                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                                                                                            <input type="text" class="form-control has-feedback-left" name="provenance" id="inputSuccess2" placeholder="reconfirmez">
                                                                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                                                                        </div>

                                                                                           
                                                                                        <div class="ln_solid"></div>
                                                                                        <div class="form-group row">
                                                                                            <div class="col-md-9 col-sm-9  offset-md-3">
                                                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Quitter</button>
                                                                                                <button type="submit" class="btn btn-success">Valider</button>
                                                                                            </div>
                                                                                        </div>

                                                                                    </form>

																					</div>   
																					<div class="modal-footer">
																						<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>                               
																					</div>

                                                                                    
																				</div>                                                                       
																			</div> 
                                                                            
                                                                            
																		</div>
                </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                        booth letterpress, commodo enim craft beer mlkshk aliquip
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                   Téléphone : {{session('userTel')}}
                   <br/>
                   Adresse mail:  {{session('userEmail')}}
                </div>
                
                </div>
            </div>
            </div>
         </div>


         <div class="col-md-6 col-sm-6  ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Utilisateur actif du jours <small>Sessions</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Settings 1</a>
                          <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
                      <h1>Bonjour, {{session('user')}}</h1>
                      <p>Bienvenue sur l'application de la gestion des matériels d'ISI, merci de modifier votre mot de passe depuis la liste des action en haut à gauche pour la sécurité de votre compte aiinsi que de l'entreprise.</p>
                    </div>
                  </div>

                </div>
              </div>
            </div>


         

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js')}} -->
    <script src="{{asset('/vendors/Chart.js')}}/dist/Chart.min.js')}}"></script>
    <!-- gauge.js')}} -->
    <script src="{{asset('/vendors/gauge.js')}}/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('/build/js/custom.min.js')}}"></script>
	
  </body>
</html>
