<?php
include('C:\xampp\htdocs\forum\controller\questionC.php') ;
$pc = new questionC();
$pc ->deletequestion($_GET["id"]);
header('Location:table.php');
