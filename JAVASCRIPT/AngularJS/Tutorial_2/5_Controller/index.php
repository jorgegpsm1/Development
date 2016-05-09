<!DOCTYPE html>
<html lang="es_MX" ng-app="Universidad">
	<head>
		<meta charset="utf-8">
		<title>Angular Tutoriales</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.3.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
		<style>
      img{
        width: 200px;
        height: 150px;
      }
    </style>
	</head>
	<body>
    <div class="container" ng-controller="Maestros as Docente">
      <h1>Profesor</h1>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <section class="panel">
            <div class="panel-body" aling="center">
              <img class="img-circle" ng-src={{Docente.Profesor.Foto}} alt="Foto Perfil">
              <figcaption>{{Docente.Profesor.Nombre}}</figcaption> 
            </div>
          </section>
        </div>
        <div class="class-md-8">
          <section class="panel">
            <div class="panel-body" aling="center">
              <h4>Datos del profesor</h4>
              Carrera: {{Docente.Profesor.Carrera}}
              <br>
              Edad: {{Docente.Profesor.Edad}}
            </div>
          </section>
        </div>
      </div>
    </div>
    <script>
      var profesorData = {
        Nombre: "Jorge Eduardo Garcia Padilla",
        Carrera: "Ingenieria en desarrollo de software",
        Edad: 24,
        Foto: "https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97150&w=400&h=200"
      }
      var app = angular.module('Universidad',[ ]);
      app.controller('Maestros',function(){
        this.Profesor = profesorData;
      });
    </script>
	</body>
</html>