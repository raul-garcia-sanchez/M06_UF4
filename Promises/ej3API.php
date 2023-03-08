<?php

function sayHello(){
  $message = "Estoy haciendo una peticion a una API INTERNA creada por Raúl García Sánchez. Si lees esto, todo ha ido bien";
  return json_encode($message);
}


echo sayHello();

?>