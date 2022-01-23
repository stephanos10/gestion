<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Gentelella Alela! | </title>
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<!-- Bootstrap -->
	<link href="{{asset('/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="{{asset('/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<!-- NProgress -->
	<link href="{{asset('/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
	<!-- iCheck -->
	<link href="{{asset('/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	<!-- bootstrap-wysiwyg -->
	<link href="{{asset('/vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">
	<!-- Select2 -->
	<link href="{{asset('/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
	<!-- Switchery -->
	<link href="{{asset('/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
	<!-- starrr -->
	<link href="{{asset('/vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="{{asset('/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
   
    <!-- Datatables -->
    
    <link href="{{asset('/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

   
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>GROUPE ISI !</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="{{asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>BIENVENUE</span>
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
								<li><a><i class="fa fa-home"></i> Accueil <span class="fa fa-chevron-down"></span></a>
								
								</li>
                         
								</li>
								<li><a><i class="fa fa-edit"></i> Gestion Matériel <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
										<li><a href="/umateriel">Liste Matériel</a></li>
									</ul>
								</li>
								
								<li><a><i class="fa fa-table"></i> Demandes <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
										<li><a href="/demandeuser">Ajouter une demande</a></li>
										<li><a href="/listedemandeus">Liste des demandes</a></li>
									</ul>
								</li>
								
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
						<a data-toggle="tooltip" data-placement="top" title="Logout" href="/logout">
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
									<img src="{{asset('images/img.jpg')}}" alt="">{{session('user')}}
								</a>
								<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="javascript:;"> Profile</a>
									<a class="dropdown-item" href="javascript:;">
										<span class="badge bg-red pull-right">50%</span>
										<span>Settings</span>
									</a>
									<a class="dropdown-item" href="javascript:;">Aide</a>
									<a class="dropdown-item" href="/logout"><i class="fa fa-sign-out pull-right"></i> Déconnexion</a>
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
											<span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
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
											<span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
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
											<span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
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
											<span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
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
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Demande</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					

					<div class="row">
						<div class="col-md-6 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>DEMANDE<small>Formulaire d'ajout de demande</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a class="dropdown-item" href="#">Ne touche pas 1</a>
												<a class="dropdown-item" href="#">Ne touche pas 2</a>
											</div>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form method="POST" action="/adddemande" class="form-label-left input_mask">
                                        @csrf

                                        <div class="form-group row">
											
											<div class="col-md-9 col-sm-9 ">
												
                                                <label for="message">Demande (20 chars min, 100 max) :</label>
												<textarea id="message" required="required" class="form-control" name="libelle" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>

											</div>
										</div>
										


                                        <div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Type demande <span class="required"></span>
											</label>
											<div class="col-md-9 col-sm-9 ">
													
												<select name="type_id" id="heard" class="form-control" required>
													<option value="">Choisir..</option>
													@if(isset($typedemandes))

                                                    @foreach($typedemandes as $typedemande)
                                                                <option value="{{$typedemande['id']}}">{{$typedemande['libelle']}}</option>
                                                     @endforeach 
													 @endif
												</select>
											</div>
										</div>

										<div class="ln_solid"></div>
										<div class="form-group row">
											<div class="col-md-9 col-sm-9  offset-md-3">
												<button type="button" class="btn btn-primary">Quitter</button>
												<button type="submit" class="btn btn-success">Ajouter</button>
											</div>
										</div>

									</form>
								</div>
							</div>


						</div>

						<div class="col-md-6 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Type  <small>Ajouter un type de demande</small></h2>
							
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
								
									<form method="POST" action="/role" class="form-label-left input_mask">
                                    @csrf 
										<div class="col-md-6 col-sm-6  form-group has-feedback">
											<input type="text" class="form-control has-feedback-left" name="inputSuccess2" id="inputSuccess2" placeholder="Libelle" disabled>
											<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
										</div>

										<div class="form-group row">
											<div class="col-md-9 col-sm-9  offset-md-3">
												<button type="submit" class="btn btn-success" disabled>Ajouter</button>
											</div>
										</div>

									</form>
								</div>

                                <div class="x_content">
									
								</div>
                                <div class="x_content">	
								
								</div>
                                <div class="x_content">
																
								</div>
                                <div class="x_content">
															
								</div>
                                <div class="x_content">
											
								</div>

                                <div class="x_content">
								
                                <form class="form-label-left input_mask">

                                <div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Tous les Type <span class="required"></span>
											</label>
											<div class="col-md-9 col-sm-9 ">
													
												<select id="heard" class="form-control" required>
													<option value="">Type de demande</option>
													@if(isset($typedemandes))

                                                     @foreach($typedemandes as $typedemande)
                                                                <option value="press">{{$typedemande['libelle']}}</option>
                                                     @endforeach   
													 @endif      
                                                   
												
												</select>
											</div>
										</div>

                                </form>
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
	<!-- bootstrap-progressbar -->
	<script src="{{asset('/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
	<!-- iCheck -->
	<script src="{{asset('/vendors/iCheck/icheck.min.js')}}"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="{{asset('/vendors/moment/min/moment.min.js')}}"></script>
	<script src="{{asset('/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
	<!-- bootstrap-wysiwyg -->
	<script src="{{asset('/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
	<script src="{{asset('/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
	<script src="{{asset('/vendors/google-code-prettify/src/prettify.js')}}"></script>
	<!-- jQuery Tags Input -->
	<script src="{{asset('/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
	<!-- Switchery -->
	<script src="{{asset('/vendors/switchery/dist/switchery.min.js')}}"></script>
	<!-- Select2 -->
	<script src="{{asset('/vendors/select2/dist/js/select2.full.min.js')}}"></script>
	<!-- Parsley -->
	<script src="{{asset('/vendors/parsleyjs/dist/parsley.min.js')}}"></script>
	<!-- Autosize -->
	<script src="{{asset('/vendors/autosize/dist/autosize.min.js')}}"></script>
	<!-- jQuery autocomplete -->
	<script src="{{asset('/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
	<!-- starrr -->
	<script src="{{asset('/vendors/starrr/dist/starrr.js')}}"></script>
	<!-- Custom Theme Scripts -->


    <!-- Datatables -->
    <script src=".{{asset('/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src=".{{asset('/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src=".{{asset('/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src=".{{asset('/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src=".{{asset('/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src=".{{asset('/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src=".{{asset('/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src=".{{asset('/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src=".{{asset('/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src=".{{asset('/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src=".{{asset('/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src=".{{asset('/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src=".{{asset('/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src=".{{asset('/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src=".{{asset('/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

    
	<script src="{{asset('/build/js/custom.min.js')}}"></script>

</body></html>
