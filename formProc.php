<?php 
session_start();
$_SESSIEN['is_upload'] = false;

$user_name="";
$email = "";
$file = false;

$errors=[];
$errors["userName"] = "";
$errors["email"] = "";
$errors["file"] = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    if($_POST["userName"]==""){
        $errors["userName"]="Please enter a username";
    }else{
        $user_name = htmlspecialchars($_POST["userName"]);
    }

    if($_POST["email"]==""){
        $errors["email"]="Please enter a email";
    }else{
        $email=htmlspecialchars($_POST["email"]);
    }

    if($_FILES["file"]['name']==""){
        $errors["file"]="Please upload a file";
    }else{
        $file_exc = strtolower(pathinfo($_FILES["file"]['name'],PATHINFO_EXTENSION)); 
        if($file_exc == "jpg" || $file_exc == "jpeg"){

             if($_FILES["file"]['size']<1000000){
                 $file = true;
             }else{
                 $errors["file"]="the file is over then 1MB";
                 $file = false;
             }

        }else{
             $errors["file"]="invalid file to upload";

        }
    }

}

if($user_name && $email && $file){

    $destination_path = getcwd().DIRECTORY_SEPARATOR;
    $target_path = $destination_path ."uploads/" . basename( $_FILES["file"]["name"]);

    $temp_name = $_FILES['file']['tmp_name'];

    $file_upload_seccses = move_uploaded_file($temp_name ,$target_path); 

    if($file_upload_seccses){
        $_SESSIEN['is_upload'] = true;
    }


}

?>