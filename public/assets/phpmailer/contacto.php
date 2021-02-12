<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, Origin, X-Requested-With, Accept");
  $errors = '';

 //  $result = array(
 //    'status'=>'success',
 //    'code'=>'200',
 //    'Parametro'=> $nombre,
 //  );
 //
 // echo json_encode($result);

  $postdata = file_get_contents("php://input");
 	$request = json_decode($postdata);

  $nombre = $request->nombre;

if (isset ($nombre)) {

  $nombre = $request->nombre;
  $email = $request->email;
  $telefono = $request->telefono;
  $mensaje = $request->mensaje;

  $result = array(
    'status'=>'success',
    'code'=>'200',
  );
}else {
  $result = array(
    'status'=>'Bad request',
    'code'=>'400',
  );
}

echo json_encode($result);
 ?>
