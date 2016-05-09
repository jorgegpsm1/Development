<!DOCTYPE html>
<html lang="es_MX">
	<head>
		<meta charset="utf-8">
		<title>Angular Tutoriales</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<style>
		.padding-right-10{
			padding-right: 10px; 
		}
		</style>
	</head>
	<body>
		<nav role="navigation" class="navbar navbar-inverse navbar-static-top marginBottom-0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav_panel">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" target="_blank">SAMBA</a>
      </div>
      <div id="nav_panel" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right padding-right-10">
          <li class="dropdown">
            <a href="nav_accesos" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Accesos<b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="usuarios">Usuarios</a></li>
              <li><a href="grupos">Grupos</a></li>
              <li><a href="permisos">Permisos</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="nav_archivos" class="dropdown-toggle"data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Archivos<b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="carpetas">Carpetas</a></li>
              <li><a href="respaldos">Respaldos</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">
      <div id="contenido">
      	<table class="table table-striped">
	      	<thead>
	      		<th>ID</th>
	      		<th>Curso</th>
	      		<th>URL Tutorial</th>
	      		<th>URL Videos</th>
	      	</thead>
	      	<tbody>
	      		<tr>
	      			<td>1</td>
	      			<td>CodigoFacilito</td>
	      			<td><a href="#">LINK</a></td>
	      			<td><a href="https://www.youtube.com/playlist?list=PLpOqH6AE0tNhdnOl1mOBthj4C7OHdwQB2">LINK</a></td>
	      		</tr>
	      		<tr>
	      			<td>2</td>
	      			<td>Udemy 1</td>
	      			<td><a href="Tutorial_2">LINK</a></td>
	      			<td><a href="https://www.udemy.com/angularjs-en-espanol/learn/v4/content">LINK</a></td>
	      		</tr>
	      		<tr>
	      			<td>3</td>
	      			<td>Video2Brain 1</td>
	      			<td><a href="#">LINK</a></td>
	      			<td><a href="">LINK</a></td>
	      		</tr>
	      	</tbody>
				</table>
      </div>
    </div>
		<script src="https://code.jquery.com/jquery-1.12.3.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
	</body>
</html>