<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../vendor/autoload.php';
require 'conexion.php';

//instanciando el objeto slim
$app = new \Slim\App;


$app->get('/listaUsuarios', function (Request $request, Response $response, array $args) {
    //conectar la base de datos
    $db = conectarUsuarios();
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql = "SELECT * from tablausuarios";
    $res = $db->getAll($sql);
    $response->getBody()->write(json_encode($res));

    return $response;
});

$app->get('/listaUsuariosi/{id}', function (Request $request, Response $response, array $args) {
    $db = conectarUsuarios();
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql = "SELECT * from tablausuarios where id = $args[id]";
    $res = $db->getRow($sql);
    $response->getBody()->write(json_encode($res));

    return $response;
});

//Insertar un nuevo usuario
$app->post('/insertarUsuario', function (Request $request, Response $response, array $args) {
    $db = conectarUsuarios();
    //$request->getQueryParams();
    $res=$db->autoExecute("tablausuarios", $request->getQueryParams(), "INSERT");
    $mensaje = "";
    if ($res==1){
        $mensaje = "Insertado";
    }else{
        $mensaje = "Error";
    }
    $response->getBody()->write($mensaje);

    return $response;
});

//Modificar una pelicula
$app->put('/modificarUsuario', function (Request $request, Response $response, array $args) {
    $db = conectarUsuarios();
    $rec = $request->getQueryParams();
    $res = $db->autoExecute("tablausuarios", $rec, "UPDATE", "id = $rec[id]");
    $mensaje = "";
    if($res == 1){
        $mensaje = "Modificado";
    }else{
        $mensaje = "Error";
    }
    $response->getBody()->write($mensaje);
    
    return $response;
});

//Eliminar una pelicula por id
$app->delete('/eliminarUsuario/{id}', function (Request $request, Response $response, array $args) {
    $db = conectarUsuarios();
    $id = $args["id"];
    $sql = "DELETE from tablausuarios where id = $id";
    $res = $db->execute($sql);
    $mensaje = "";
    if($res == 1){
        $mensaje = "Eliminado";
    }else{
        $mensaje = "Error";
    }
    $response->getBody()->write($mensaje);

    return $response;
});


//Tabla de propiedades

$app->get('/listaPropiedades', function (Request $request, Response $response, array $args) {
    //conectar la base de datos
    $db = conectarUsuarios();
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql = "SELECT * from tablapropiedades";
    $res = $db->getAll($sql);
    $response->getBody()->write(json_encode($res));

    return $response;
});

$app->get('/listaPropiedadesi/{id}', function (Request $request, Response $response, array $args) {
    $db = conectarUsuarios();
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql = "SELECT * from tablapropiedades where id = $args[id]";
    $res = $db->getRow($sql);
    $response->getBody()->write(json_encode($res));

    return $response;
});

//Insertar un nuevo usuario
$app->post('/insertarPropiedad', function (Request $request, Response $response, array $args) {
    $db = conectarUsuarios();
    //$request->getQueryParams();
    $res=$db->autoExecute("tablapropiedades", $request->getQueryParams(), "INSERT", );
    $mensaje = "";
    if ($res==1){
        $mensaje = "Insertado";
    }else{
        $mensaje = "Error";
    }
    $response->getBody()->write($mensaje);

    return $response;
});

//Modificar una pelicula
$app->put('/modificarPropiedad', function (Request $request, Response $response, array $args) {
    $db = conectarUsuarios();
    $rec = $request->getQueryParams();
    $res = $db->autoExecute("tablapropiedades", $rec, "UPDATE", "id = $rec[id]");
    $mensaje = "";
    if($res == 1){
        $mensaje = "Modificado";
    }else{
        $mensaje = "Error";
    }
    $response->getBody()->write($mensaje);
    
    return $response;
});

//Eliminar una pelicula por id
$app->delete('/eliminarPropiedad/{id}', function (Request $request, Response $response, array $args) {
    $db = conectarUsuarios();
    $id = $args["id"];
    $sql = "DELETE from tablapropiedades where id = $id";
    $res = $db->execute($sql);
    $mensaje = "";
    if($res == 1){
        $mensaje = "Eliminado";
    }else{
        $mensaje = "Error";
    }
    $response->getBody()->write($mensaje);

    return $response;
});
//ejecutamos la aplicación
$app->run();


