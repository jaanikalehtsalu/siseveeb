<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?=BASE_URL?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="assets/ico/favicon.png">

	<!-- Bootstrap core CSS -->
	<link href="assets/components/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
    <!--<img src="http://www.accessmba.com/uploads/tx_templavoila/IE_Business_School.JPG"/>
    <style>
        img{
            align: center;
            min-height: 50px
        }
        -->
    </style>
	<style >
		body {
			min-height: 935px !important;
			padding-top: 100px;
			background: url(<?= ASSETS_URL ?>img/bg.jpg);

            background-color: #008800;
            background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#003500), to(#008800));
		}
	</style>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>

<body>

<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!--<a class="navbar-brand" href="#" class="btn btn-info" ><?=PROJECT_NAME?></a>
            <style>
                .navbar-brand{
                    color:#008800;

                }

            </style>
            -->
		</div>
		<div class="navbar-collapse collapse">

           <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="ops" >Õpetajad</a></li>
                    <li><a href="dire" ">Direktor</a></li>
                    <li><a href="khk">Ametlik veebileht</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="http://www.khk.ee/">Separated link</a></li>
                    <li><a href="http://www.khk.ee/">One more separated link</a></li>
                </ul>
            </li>
            -->

               <li class="nav navbar-nav navbar-left">
                    <div class="btn-group btn-breadcrumb">
                        <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
                        <a href="#" class="btn btn-info">Rühmad</a>
                        <a href="#" class="btn btn-success">Tunnid</a>
                        <a href="#" class="btn btn-warning">Õpetaja</a>
                        <a href="#" class="btn btn-danger">Õpilased</a>
                    </div>
                </li>
                <!--
				<li><a href="ruhmad">Rühmad</a></li>
				<li><a href="ained">Ained</a></li>
                <li><a href="klass_ruum">Klassiruumid</a></li>
                -->


			</ul>
            <div class="col-sm-3 col-md-3">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- <ul class="nav navbar-nav navbar-right">
                 <li><a href="../navbar/">Default</a></li>
                 <li><a href="../navbar-static-top/">Static top</a></li>
                 <li class="active"><a href="./">Fixed top</a></li> -->
            </ul>
        </div>
	</div>
</div>

<div class="container">

	<!-- Main component for a primary marketing message or call to action -->
	<? if( !file_exists("views/$controller/{$controller}_$action.php")) error_out('The view <i>views/'. $controller . '/' .  $controller . '_' . $action . '.php</i> does not exist. Create that file.');?>
    <?  @require "views/$controller/{$controller}_$action.php"; ?>

</div> <!-- /container -->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/components/jquery/1.10.2/jquery-1.10.2.min.js"></script>
<script src="assets/components/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>
