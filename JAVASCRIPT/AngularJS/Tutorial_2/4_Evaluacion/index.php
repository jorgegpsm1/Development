<!DOCTYPE html>
<html lang="es_MX" ng-app>
	<head>
		<meta charset="utf-8">
		<title>Angular Tutoriales</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		</style>
	</head>
	<body>
    <div class="container">
      <h1>Evaluacion</h1>
      <hr>
      <label for="Nombre">Nombre completo</label>
      <input type="text" placeholder="Name" ng-model="Nombre" id="Nombre">
      <label for="Lugar">Lugar de trabajo</label>
      <input type="text" placeholder="Place" ng-model="Lugar" id="Lugar">
      <label for="Salario">Salario en dolares</label>
      <input type="number" placeholder="Salary" ng-model="Salario" id="Salario">
      <br>
      <label for="Nombre">{{Nombre}}</label>
      <label for="Lugar">{{Lugar}}</label>
      <label for="Salario">{{Salario | currency }}</label>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.3.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
	</body>
</html>