<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structure</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php
    //Control Statement
    //1.Conditional Statement
    $a = 98;
    if ($a > 100) :
        echo "$a greater 100";
    else :
        echo "$a less than 100" . "<br>";
    endif;
    // Control Structure
    // 1. Conditional Statement
    $a = 98;
    if ($a > 100) {
        echo "$a greater 100";
    } else {
        echo "$a less than 100" . "<br>";
    }
    // Control Structure
    // 1. Conditional Statement
    $a = 98;
    if ($a > 100)
        echo "$a greater 100";
    else
        echo "$a less than 100" . "<br>";
    ?>

    <form action="" method="post">
        <div class="mb-3 row">
            <label for="score">Score</label>
            <div class="col-sm-5">
                <input type="number" name="InputScore" id="InputScore">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" value="Submit" name="btn_submit">Submit</button>
    </form>
    <?php

    if (isset($_POST["btn_submit"])) {
        $score = $_POST["InputScore"];
        if (is_numeric($score)) {
            if ($score >= 90) {
                echo "Excellence";
            } elseif ($score >= 80) {
                echo "Very good";
            } elseif ($score >= 70) {
                echo "Good";
            } elseif ($score >= 60) {
                echo "Fair";
            } elseif ($score >= 50) {
                echo "Passed";
            } elseif ($score >= 0) {
                echo "Failed";
            } else {
                echo "Invalid";
            }
        } else {
            echo "Please input number";
        }
    }
    ?>
</body>

</html>