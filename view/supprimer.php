<?php
include '../controller/questionC.php';
$pc = new questionC();
$pc ->deletequestion($_GET["id"]);
header('Location:liste.php');
