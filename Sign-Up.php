<?php
// define variables and set to empty values
$nameErr = $emailErr = $websiteErr = $passwordErr = $confirmErr = "";
$name = $password = $email = $confirm = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Username"])) {
        $nameErr = "Please provide name";
    } else {
        $name = test_input($_POST["Username"]);
    }
    if (empty($_POST["password"])) {
        $passwordErr = "Your Password Must Contain At Least 4 Characters!";
    } else {
        $password = test_input($_POST["password"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "Invalid E-mail address";
    } else {
        $email = test_input($_POST["email"]);
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
            $emailErr = "You Entered An Invalid Email Format";
        }
    }
    if (empty($_POST["website"])) {
        $websiteErr = "Invalid Website";
    } else {
        $website = test_input($_POST["website"]);
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-lg-12 py-5">
            <h2 class="text-uppercase text-center mb-5">Form Register</h2>
            <form method="post" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                Name: <input type="text" class="form-control" name="Username">
                <span class="error">* <?php echo $nameErr; ?></span>
                <br>
                Password: <input type="password" class="form-control" name="password">
                <span class="error">* <?php echo $passwordErr; ?></span>
                <br>
                Confirm: <input type="password" class="form-control" name="confirm">
                <span class="error">* <?php echo $confirmErr; ?></span>
                <br>
                E-mail: <input type="text" class="form-control" name="email">
                <span class="error">* <?php echo $emailErr; ?></span>
                <br>
                Website: <input type="text" class="form-control" name="website">
                <span class="error">* <?php echo $websiteErr; ?></span>
                <br>
                <div class="form-group">
                    <div class="align-items-center">
                        <button type="submit" name="login" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
            </form>
        </div>
        <?php
        echo "<h2> Your Input:</h2>";
        echo $name;
        echo "<br>";
        echo $password;
        echo "<br>";
        echo $confirm;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        ?>
    </div>
</body>

</html>