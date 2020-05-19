<?php
    session_start();
    $cnt = 0;
for ($i=0; $i<5; $i++){
    $k=$i+1;
    if (isset($_POST["$k"]) and isset($_SESSION['ans'][$i])) {
        if ($_POST["$k"] == $_SESSION['ans'][$i]) $cnt++;
    }
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Result</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <h1 class="text-info text-center">
      Total tests:5 &nbsp;&nbsp;&nbsp; Correct answers: <?php print($cnt); $percent = $cnt/5*100; echo" &nbsp;&nbsp;&nbsp; Percentage: $percent";?>
    </h1>
    <h2 class="text-danger text-center">
        Incorrect answers: <?php  $ans = 5-$cnt; print($ans); ?>
    </h2>
</body>
</html>
