<!DOCTYPE html>
<html lang="sp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  </head>
  <body>
  	<div class="container">

	    <div class="page-header">
	  		<h1>Example page header <small>Subtext for header</small></h1>
		</div>

		<ul class="nav nav-pills nav-justified">
			<li class="active">
				<a href="#">Home</a>
			</li>
			<li>
				<a href="#">Profile</a>
			</li>
			<li>
				<a href="#">Contact</a>
			</li>
		</ul>
	
	</div>	

	<div class="container">
	    <div class="row">
	        <div class="col-md-4"><p>Box 1</p></div>
	        <div class="col-md-4">
		        <div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Iniciar Sesi&oacute;n</h3>
				  </div>
				  <div class="panel-body">
				    <form>
					    <div class="form-group">
					        <label for="inputEmail">Correo electr&oacute;nico</label>
					        <input type="email" class="form-control" id="inputEmail" placeholder="Correo electr&oacute;nico">
					    </div>
					    <div class="form-group">
					        <label for="inputPassword">Contraseña</label>
					        <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
					    </div>
					    <div class="checkbox">
					        <label><input type="checkbox"> Recordarme</label>
					    </div>
					    <button type="submit" class="btn btn-primary">Iniciar sesi&oacute;n</button>
					</form>
				  </div>
				</div>

	        </div>
	        <div class="col-md-4"><p>Box 3</p></div>
	    </div>
	</div>


  </body>
</html>