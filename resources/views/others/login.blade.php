<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css"> <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity
        ="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       
       <style>

{
    margin: 0 auto;
    align-content: center;
    border-radius: 10px;
    border: 1px solid #666666;
    width: 500px;
}
    </style>
        <title>Login</title>
    </head>
    <body>
        <div class="container"></div>
            <div class="row center">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-defaul">
                        <div class="panel-heading">
                            <h1 class="panel-title"> Acceso a la aplicacion </h1>
                        </div>
                        <div class="panel-body">
                            <form method="POST"
                                {!! csrf_field()!!}>
    


                                <div class="form group">
                                    <label for="email">Email</label>
                                    <input class="form-control"
                                        type="email" name="email" placeholder="Ingresa tu Email">
                                    {!!$errors->first('email',<span class="help-block">:mensaje</span>)!!}
                                <div class="form group">
                                    <label for="password"> Contraseña </label>
                                    <input class="form-control"
                                        type="password" name="password" placeholder="Ingresa tu Password"><br>
                                </div>
                            </form>    
                            <buttom class="btn btn-primary btn-block">Acceder</button>
                        </div>

                    </div>
                </div>
            </div>              
        </div>

    </body>
</html>
