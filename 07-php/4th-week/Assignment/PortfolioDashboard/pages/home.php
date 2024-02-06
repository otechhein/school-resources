<?php

require_once("./classes/Home.php");

$homeClass = new Home($db->conn);
$home = $homeClass->getHome()->fetch(PDO::FETCH_OBJ);

if($homeClass->getHome()->rowCount() > 0)
{
 echo "<div class='container'>";
 echo "<h1>$home->Headline</h1>";
 echo "<pre>";
 echo $home->Content;
 echo "</pre>";
 echo "</div>";
}else header("Location: pages/404.php");

?>