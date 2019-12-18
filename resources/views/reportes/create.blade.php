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
<h1>Generar Reportes</h1>    

<form action="{{route('reportes.store')}}" method="post">
{{csrf_field()}}

<label for="nombre">Nombres:</label>
<input type="text" name="nombre" id="nombre" value="">
</br>

<label for="ApeidoPaterno">Apeido paterno:</label>
<input type="text" name="ApeidoPaterno" id="ApeidoPaterno" value="">
</br>

<label for="ApeidoMaterno">Apeido Materno:</label>
<input type="text" name="ApeidoMaterno" id="ApeidoMaterno" value="">
</br>

<label for="no_tarjeta">No Tarjeta:</label>
<input type="text" name="no_tarjeta" id="no_tarjeta" value="">
</br>


<input type="submit" value="Generar">
</form>