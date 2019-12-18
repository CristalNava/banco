<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity
        ="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color:#c3dff7;
                color: #000;
                font-family: 'arial black', sans-serif;
                font-weight: 300;
                height: 100vh;
                margin: 0;
            }
        
      
            
        </style>
    </head>
    <body>
        
        <div class="container">
            <div class="row justify-contents-center">
                <div class="col-md-5">
                    <h2><center>Generar Reporte</center></h2>
                    <form action="" method="POST">
                        {{ csrf_field() }}
                        <div class="form group">
                            <input type="text" name="numero de cliente" id="" class="form-control"placeholder="No. cliente"><br>
                        </div>
                        <p><center><font size=5>  ó </font></center></p>
                        <div class="form group">
                            <input type="RFC" name="RFC" id="" class="form-control"placeholder="Escribir RFC">
        
                        </div>
                        <p><center><font size=5>  ó </font></center></p>
                        <div class="form group">
                            <input type="text" name="nombre" id="" class="form-control"placeholder="Escribir Nombre Completo"><br>
                            <input type="date" name="trip-start" id="start" class="form-control" min="1970-01-01" max="2019-12-31"><br>
                        </div>

                        <div class="form group">
                           <center> <input type="submit" value="Generar" class="btn btn-primary"></center>
        
                        </div>

                </div>
            </div>
        </div>
    </body>
</html>

