<!DOCTYPE html>
<html lang="es_MX">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Jorge Garcia">
    <title>Plantilla Basica de Bootstrap</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/2_tablas.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <table class="table">
        <tr>
          <th># ID</th>
          <th>NOMBRE</th>
          <th>USUARIO</th>
        </tr>
        <tr>
          <td>1</td>
          <td>NOMBRE 1</td>
          <td>USUARIO 1</td>
        </tr>
        <tr>
          <td>2</td>
          <td>NOMBRE 2</td>
          <td>USUARIO 2</td>
        </tr>
      </table>
      
      <table class="table table-striped">
        <tr>
          <th># ID</th>
          <th>NOMBRE</th>
          <th>USUARIO</th>
        </tr>
        <tr>
          <td>1</td>
          <td>NOMBRE 1</td>
          <td>USUARIO 1</td>
        </tr>
        <tr>
          <td>2</td>
          <td>NOMBRE 2</td>
          <td>USUARIO 2</td>
        </tr>
      </table>
      
      <table class="table table-bordered">
        <tr>
          <th># ID</th>
          <th>NOMBRE</th>
          <th>USUARIO</th>
        </tr>
        <tr>
          <td>1</td>
          <td>NOMBRE 1</td>
          <td>USUARIO 1</td>
        </tr>
        <tr>
          <td>2</td>
          <td>NOMBRE 2</td>
          <td>USUARIO 2</td>
        </tr>
      </table>
      
      <table class="table table-hover">
        <tr>
          <th># ID</th>
          <th>NOMBRE</th>
          <th>USUARIO</th>
        </tr>
        <tr>
          <td>1</td>
          <td>NOMBRE 1</td>
          <td>USUARIO 1</td>
        </tr>
        <tr>
          <td>2</td>
          <td>NOMBRE 2</td>
          <td>USUARIO 2</td>
        </tr>
      </table>
      
      <table class="table table-condensed">
        <tr>
          <th># ID</th>
          <th>NOMBRE</th>
          <th>USUARIO</th>
        </tr>
        <tr>
          <td>1</td>
          <td>NOMBRE 1</td>
          <td>USUARIO 1</td>
        </tr>
        <tr>
          <td>2</td>
          <td>NOMBRE 2</td>
          <td>USUARIO 2</td>
        </tr>
      </table>
      <div class="table-responsive">
        <table class="table table-responsive">
          <tr>
            <th># ID</th>
            <th>NOMBRE</th>
            <th>USUARIO</th>
          </tr>
          <tr>
            <td>1</td>
            <td>NOMBRE 1</td>
            <td>USUARIO 1</td>
          </tr>
          <tr>
            <td>2</td>
            <td>NOMBRE 2</td>
            <td>USUARIO 2</td>
          </tr>
        </table>
      </div>
      <section>
        <h4>ATRIBUTOS DE TD</h4>
        <p>Las clases para usar dentro de las tablas son las siguientes</p>
        <pre>
              <code>
                class    active
                class    success
                class    info
                class    warning
                class    danger
              </code>
            </pre>
      </section>
    </div>
    <script src="../jquery/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
