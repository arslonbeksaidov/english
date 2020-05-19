<?php
session_start();
include "sql.php";
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $ism = mysqli_real_escape_string($con, $_POST['name']);
    $familiya = mysqli_real_escape_string($con, $_POST['surname']);
    $tel = mysqli_real_escape_string($con, $_POST['tel']);
    $mail = mysqli_real_escape_string($con, $_POST['mail']);
    $birthday = mysqli_real_escape_string($con, $_POST['birthday']);
    //$rasm = $_FILES['file']['name'];
   // $upload = __DIR__."../images/image_user/";
    //$upload = "../images/image_user/";
    //$upload = "";
    //move_uploaded_file($_FILES['file']['tmp_name'], $upload . basename($_FILES['file']['name']));
    $role="1";

    $pass = sha1(md5(mysqli_real_escape_string($con, $_POST['pass']) . "ashdauscx"));
    $okey = $con->query("insert INTO  users (login, `name`, surname, tel,mail,birthday,password,role) VALUES ('$username','$ism', '$familiya','$tel', '$mail', '$birthday','$pass','$role')");
    foreach ($okey as $item) {

        $_SESSION['surname'] = $item['name'];
        $_SESSION['role']= $item['role']; }
    if ($okey)
        $_SESSION['surname'] = $item['name'];
            header('location:../index.php');
            exit();


}// else header('location:error.com');
    ?>
