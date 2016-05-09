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
    <div class="container-fluid">
      <h1>ng-model</h1>
      <p>
        Input: {{Nombre}}
        <input type="text" class="form-control" placeholder="Nombre" ng-model="Nombre">
      </p>
      <p>
        Select: {{Pais}}
        <select ng-model="Pais" id="" class="form-control">
          <option value="1">Argentina</option>
          <option value="2">España</option>
          <option value="3">Mexico</option>
        </select>
      </p>
      <p>
        CheckBox: {{Check_1}} {{Check_2}}
        <input type="checkbox" ng-model="Check_1"> Opcion 1
        <input type="checkbox" ng-model="Check_2"> Opcion 2
      </p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.3.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
	</body>
</html>