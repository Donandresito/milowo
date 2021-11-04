<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/miloowo/dir.php');
include(ENTITIES_PATH."Rol.php");
$rol = new Rol();
$rol->SetRol("carepiñitiauwu");
$rol->SetRolId(1);
echo $rol->getrol();
var_dump($rol);






