<?php
session_start();

if(isset($_POST['submit'])){

$errors = [];

$requst = $_POST;
$title = $requst['title'];
$detail = $requst['detail'];
$author = $requst['author'];

// print_r($requst);
// exit();

if(empty($title)){
   $msg = "title koi ?";
   $errors ['title'] = $msg;

  }elseif (strlen($title)>10){
    $msg = "ar koto ?";
    $errors ['title'] = $msg;
  }
  if(empty($detail)){
    $msg = "detail koi ?";
    $errors ['detail'] = $msg;
  }

if(count($errors)>0){
    //** HEADER REDIRECTION;
    $_SESSION['errors'] = $errors;
    $_SESSION['old_data'] = $requst;


    header("location: ../index.php");
}else{
    echo "No erros found!";
}
 }else{
    echo "submit botton click korin";
 }
