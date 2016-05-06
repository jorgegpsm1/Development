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
    <link rel="stylesheet" href="../assets/css/1_grid_basic.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>GRID CLASES</h1>
          <hr>
          <section>
            <h3>BOOTSTRAP SISTEMA DE REJILLAS</h3>
            <div class="table-responsive">
              <table class="table grid">
                <tr>
                  <td>span 1</td>
                  <td>span 1</td>		
                  <td>span 1</td>
                  <td>span 1</td>
                  <td>span 1</td>		
                  <td>span 1</td>
                  <td>span 1</td>
                  <td>span 1</td>		
                  <td>span 1</td>
                  <td>span 1</td>
                  <td>span 1</td>		
                  <td>span 1</td>
                </tr>
                <tr>
                  <td colspan="4">&nbsp;span 4</td>
                  <td colspan="4">&nbsp;span 4</td>		
                  <td colspan="4">&nbsp;span 4</td>
                </tr>
                <tr>
                  <td colspan="4">span 4</td>
                  <td colspan="8">span 8</td>		
                </tr>
                <tr>
                  <td colspan="6">span 6</td>
                  <td colspan="6">span 6</td>		
                </tr>
                <tr>
                  <td colspan="12">span 12</td>
                </tr>
              </table>
            </div>
          </section>
          <section>
            <h3>BOOTSTRAP DISEÑO RESPONSIVO</h3>
            <p>xs (Para telefonos)</p>
            <p>sm (Para tablets)</p>
            <p>md (Para escritorios)</p>
            <p>lg (Para escritorios o pantallas)</p>
            <br>
            <h4>EJEMPLO DE REJILLA BOOTSTRAP</h4>
            <pre>
              <code>
                div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"
                
                div class="row"
                  div class="col-*-*">div
                div
                div class="row"
                  div class="col-*-*">/div
                  div class="col-*-*">/div
                  div class="col-*-*">/div
                div
              </code>
            </pre>
            <p>Primero crear una clase <code>div class="row"</code> luego agregar la distribucion de columnas segun el diseño. Cada fila puede tener 12 rejillas distribuidas de cualquier manera posible.</p>
            <h4>EJEMPLO DE DISTRIBUCION DE REJILLA BOOTSTRAP</h4>
            <pre>
              <code>
                div class="row"
                  div class="col-xs-3 col-sm-4 col-xs-5">/div
                  div class="col-xs-4 col-sm-4 col-xs-5">/div
                  div class="col-xs-5 col-sm-4 col-xs-2">/div
                div
              </code>
            </pre>
          </section>
        </div>
      </div>
    </div>
    <script src="../jquery/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
