<?php 
include ('C:\xampp\htdocs\forum\controller\questionC.php');
include ('C:\xampp\htdocs\forum\model\question.php');
$ques = new questionC();
$q=new question($_POST['titre'],$_POST['descriptionn'],$_POST['contenu']);
$ques->addquestion($q);
header('Location:liste.php');