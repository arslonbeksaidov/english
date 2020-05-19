<?php
include "../structura/sql.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'deletequestion': {

            $new_id = (int)$_GET['id'];

            $con->query("DELETE FROM savollar WHERE id = $new_id");
            header("Location: " . $_SERVER['HTTP_REFERER']);
            break;
        }

    }
}


?>
