<?php
$dsn = "mysql:host=localhost;dbname=guruh";
$ulanish = new PDO($dsn,'root','');
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        case 'addTalaba':{
            var_dump($_POST);
            $fam = $_POST['familiya'];
            $ism = $_POST['ism'];
            $sharif = $_POST['sharif'];
            $tug_yili = $_POST['tug_yili'];
            $result = $ulanish->prepare("INSERT INTO talaba(familiya,ism,sharif,tug_yili) VALUES(?,?,?,?)")->execute(array(
                $fam,$ism,$sharif,$tug_yili
            ));
//                var_dump($result); exit;
            header("Location: ".$_SERVER['HTTP_REFERER']);
            break;
        }

        case 'updateTalaba':{
            $id = $_GET['id'];
            $fam = $_POST['familiya'];
            $ism = $_POST['ism'];
            $sharif = $_POST['sharif'];
            $tug_yili = $_POST['tug_yili'];
            $result = $ulanish->prepare("UPDATE talaba SET familiya=?,ism=?,sharif=?,tug_yili=? WHERE id = $id")->execute(array(
                $fam,$ism,$sharif,$tug_yili
            ));
//                var_dump($result); exit;
            header("Location: ".$_SERVER['HTTP_REFERER']);
            break;
        }
        case 'deleteTalaba':{
            $id = (int) $_GET['id'];
            $ulanish-> prepare("DELETE FROM talaba WHERE id = ?")->execute(array($id));
            header("Location: ".$_SERVER['HTTP_REFERER']);
            break;
        }

    }
}


?>