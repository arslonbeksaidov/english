<?php
include "../structura/sql.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'deletenews': {

            $new_id = (int)$_GET['id'];

            $con->query("DELETE FROM news WHERE id = $new_id");
            header("Location: " . $_SERVER['HTTP_REFERER']);
            break;
        }

    }
}


?>
