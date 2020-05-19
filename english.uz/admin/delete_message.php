<?php
include "../structura/sql.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'deletemessage': {

            $new_id = (int)$_GET['id'];

            $con->query("DELETE FROM contact WHERE id = $new_id");
            header("Location: " . $_SERVER['HTTP_REFERER']);
            break;
        }

    }
}


?>
