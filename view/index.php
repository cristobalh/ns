<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard - Norte Sur</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="../assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="../assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="../assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="../assets/js/html5shiv.min.js"></script>
		<script src="../assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<?php include('navbar.php');?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<?php
			include('sidebar.php');
			?>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">New Inspection</li>
						</ul><!-- /.breadcrumb -->

					<!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										
									</div>
								</div><!-- /.pull-left -->

							
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								New Inspection
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									create &amp; edit inspections
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									Bienvenido 
									<strong class="green">
										Norte & Sur Web App.
										<small>(v1.0)</small>
									</strong>
								
								</div>
								<div class="hr hr32 hr-dotted"></div>
								<div class="row">
									<div class="col-sm-4">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-user orange"></i>
													Datos del cliente y lote.
												</h4>

												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up"></i>
													</a>
												</div>
											</div>
											
											<div class="widget-body">
											<div class="widget-main no-padding">
											<div class="col-xs-6">
											<p>Cliente <input class="form-control"></input></p>
											</div>
											
											<div class="col-xs-6">
											<p>Cliente <input class="form-control"></input></p>
											</div>
													
													
											</div>
									
										
										</div>
										
										</div>
										
									</div><!-- /.col -->

									<div class="col-sm-8">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-list orange"></i>
													Tabla de inspección
												</h4>

												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up"></i>
													</a>
												</div>
											</div>
											
											<div class="widget-body">
											<div class="widget-main no-padding">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
														<tr><tH colspan="7"><button class="btn btn-info"><i class="fa fa-plus"></i> Add new row</button></tH></tr>
															<tr>
																<th>
																	<i class="ace-icon fa fa-caret-right blue"></i># Pallet
																</th>
																	<th class="hidden-480">
																	<i class="ace-icon fa fa-caret-right blue"></i># Grower
																</th>

																<th>
																	<i class="ace-icon fa fa-caret-right blue"></i>Sample Weight (grs)
																</th>
																	<th class="hidden-480">
																	<i class="ace-icon fa fa-caret-right blue"></i>Variety
																</th>

																<th class="hidden-480">
																	<i class="ace-icon fa fa-caret-right blue"></i>Label
																</th>
																
																
																<th class="hidden-480">
																	<i class="ace-icon fa fa-caret-right blue"></i><i class="fa fa-wrench"></i> Actions
																</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td><input class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="text"></td>
																<td><div class="btn-group btn-corner">
																		<button class="btn btn-xs btn-success " title="add defects"><i clasS="fa fa-plus"></i></button>
																		<button class="btn btn-xs btn-danger " title="delete this row"><i clasS="fa fa-trash"></i></button>
																	 </div>

																</td>
															</tr>
															<tr>
																<td><input class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="text"></td>
																<td><div class="btn-group btn-corner">
																		<button class="btn btn-xs btn-success " title="add defects"><i clasS="fa fa-plus"></i></button>
																		<button class="btn btn-xs btn-danger " title="delete this row"><i clasS="fa fa-trash"></i></button>
																	 </div>

																</td>
															</tr>
															<tr>
																<td><input class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="text"></td>
																<td><div class="btn-group btn-corner">
																		<button class="btn btn-xs btn-success " title="add defects"><i clasS="fa fa-plus"></i></button>
																		<button class="btn btn-xs btn-danger " title="delete this row"><i clasS="fa fa-trash"></i></button>
																	 </div>

																</td>
															</tr>
															<tr>
																<td><input class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="text"></td>
																<td><div class="btn-group btn-corner">
																		<button class="btn btn-xs btn-success " title="add defects"><i clasS="fa fa-plus"></i></button>
																		<button class="btn btn-xs btn-danger " title="delete this row"><i clasS="fa fa-trash"></i></button>
																	 </div>

																</td>
															</tr>
															<tr>
																<td><input class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="text"></td>
																<td><div class="btn-group btn-corner">
																		<button class="btn btn-xs btn-success " title="add defects"><i clasS="fa fa-plus"></i></button>
																		<button class="btn btn-xs btn-danger " title="delete this row"><i clasS="fa fa-trash"></i></button>
																	 </div>

																</td>
															</tr>
															<tr>
																<td><input class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="text"></td>
																<td><div class="btn-group btn-corner">
																		<button class="btn btn-xs btn-success " title="add defects"><i clasS="fa fa-plus"></i></button>
																		<button class="btn btn-xs btn-danger " title="delete this row"><i clasS="fa fa-trash"></i></button>
																	 </div>

																</td>
															</tr>
															<tr>
																<td><input class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="text"></td>
																<td><div class="btn-group btn-corner">
																		<button class="btn btn-xs btn-success " title="add defects"><i clasS="fa fa-plus"></i></button>
																		<button class="btn btn-xs btn-danger " title="delete this row"><i clasS="fa fa-trash"></i></button>
																	 </div>

																</td>
															</tr>
															<tr>
																<td><input class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="text"></td>
																<td><div class="btn-group btn-corner">
																		<button class="btn btn-xs btn-success " title="add defects"><i clasS="fa fa-plus"></i></button>
																		<button class="btn btn-xs btn-danger " title="delete this row"><i clasS="fa fa-trash"></i></button>
																	 </div>

																</td>
															</tr>
															<tr>
																<td><input class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="text"></td>
																<td><div class="btn-group btn-corner">
																		<button class="btn btn-xs btn-success " title="add defects"><i clasS="fa fa-plus"></i></button>
																		<button class="btn btn-xs btn-danger " title="delete this row"><i clasS="fa fa-trash"></i></button>
																	 </div>

																</td>
															</tr>
															<tr>
																<td><input class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="number"></td>
																<td><input  class="form-control" type="text"></td>
																<td><input  class="form-control" type="text"></td>
																<td><div class="btn-group btn-corner">
																		<button class="btn btn-xs btn-success " title="add defects"><i clasS="fa fa-plus"></i></button>
																		<button class="btn btn-xs btn-danger " title="delete this row"><i clasS="fa fa-trash"></i></button>
																	 </div>

																</td>
															</tr>
															
														</tbody>
														
														<tfoot class="thin-border-bottom">
														
															<tr>
																<th>
																	<i class="ace-icon fa fa-caret-right blue"></i># Pallet
																</th>
																	<th class="hidden-480">
																	<i class="ace-icon fa fa-caret-right blue"></i># Grower
																</th>

																<th>
																	<i class="ace-icon fa fa-caret-right blue"></i>Sample Weight (grs)
																</th>
																	<th class="hidden-480">
																	<i class="ace-icon fa fa-caret-right blue"></i>Variety
																</th>

																<th class="hidden-480">
																	<i class="ace-icon fa fa-caret-right blue"></i>Label
																</th>
																
																
																<th class="hidden-480">
																<button class="btn btn-info "> <i class="fa fa-plus"></i> Add new row</button>

																</th>
															</tr>
															
														</tfoot>
													</table>	

											</div>
									
										
										</div>
										
										</div>
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="hr hr32 hr-dotted"></div>

								<div class="row">
									<div class="col-sm-6">
	
									</div><!-- /.col -->

									<div class="col-sm-6">
										
									</div><!-- /.col -->
								</div><!-- /.row -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

		<?php include('footer.php')?>
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="../assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="../assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="../assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="../assets/js/jquery-ui.custom.min.js"></script>
		<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="../assets/js/jquery.easypiechart.min.js"></script>
		<script src="../assets/js/jquery.sparkline.index.min.js"></script>
		<script src="../assets/js/jquery.flot.min.js"></script>
		<script src="../assets/js/jquery.flot.pie.min.js"></script>
		<script src="../assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		
	</body>
</html>
