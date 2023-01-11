<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<?php
include('Header.php');
include_once('Import_External_Php.php');

if (isset($_POST["btn_submit"])) {
    $value01 = $_POST["txt_value_01"];
    $value02 = $_POST["txt_value_02"];
    $sum = $value01 + $value02;
    echo "<h1>The total value is: $sum</h1>";
}
?>
<div class="container border border-dark col-md-3 py-5">
    <div class="d-flex justify-content-center">
        <form action="" method="post">
            <label for="result">Result</label>
            <input type="text" value="<?php echo $sum; ?>" name="result" id="result"><br><br>

            <label for="txt_value_01">Value 01: </label>
            <input type="number" name="txt_value_01" id="txt_value_01"><br><br>

            <label for="txt_value_02">Value 02: </label>
            <input type="number" name="txt_value_02" id="txt_value_02"><br><br>

            <button type="submit" class="btn btn-primary" value="Submit" name="btn_submit">Submit</button>

        </form>
    </div>
</div>