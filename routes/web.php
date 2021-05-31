<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home/index');
});


Route::get('/chat', function () {
    return view('chat/index');
});

Route::get('/login', function () {
    return view('login/index');
});
Route::get('/registro', function (){
    return view('registro/index');
});

Route::get('/consultas', function (){
    $usuarios = App\Consultas::all();

    /*foreach ($usuarios as $usuario) {
        echo $usuario->nombre." - ".$usuario->email."<br/>";
    }*/

    echo json_encode($usuarios);
});

Route::get('/consultas/store', function (Request $request){
    $consulta = new App\Consultas;
    $consulta->nombre = $request->input("nombre");
    $consulta->email = $request->input("email");
    $consulta->ubicacion = $request->input("ubicacion");
    $consulta->contrasena = Hash::make($request->input("pwd"));

    $consulta->save();
});

Route::get('/consultas/login', function (Request $request){
    $consulta = DB::table("usuarios")->where('email', $request->input("email"))->first();

    if ($consulta != null) {
        if (Hash::check($request->input("pwd"), $consulta->contrasena)) {
            echo $consulta->email;
        }
        else {
            echo "null";
        }
    }
    else {
        echo "null";
    }
});

Route::get('/email', function (Request $request){
    $consulta = new App\Consultas;
    $consulta = DB::table("usuarios")->where('email', $request->input("email"))->first();
    $code = $request->input("code");

    if ($consulta != null) {
        // Varios destinatarios
        $para  = $request->input("email");

        // título
        $título = 'Recuperación de contraseña';

        // mensaje
        $mensaje = '
        <html>
        <head>
        <title>Recuperación de contraseña</title>
        </head>
        <body>
        <p>
        Recupera tu acceso. Sigue este enlace para recuperar tu contraseña: ' . URL::to('/login/restore?code=') . $code . '
        </p>
        
        </body>
        </html>
        ';

        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

        // Enviarlo
        mail($para, $título, $mensaje, $cabeceras);

        echo "success";
    }
    else {
        echo "null";
    }
});