<?php
    include "database.php";
    $obj = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
    <form action="save-data.php" method="POST" target="blank">
        <label for="sname">Student Name</label><br>
        <input type="text" name="sname"><br><br>

        <label for="sage">Student Age</label><br>
        <input type="number" name="sage" min="1" max="200"><br><br>

        <label for="scity">Student City</label>
        <select name="scity" id="scity">
        <?php
            $obj->select("city");
            $result = $obj->getResult();
            foreach ($result as list("cid"=>$cid, "cname"=>$cname)) {
                echo "<option value='$cid'>$cname</option>";
            }
        ?>
        </select><br><br>

        <input type="submit" value="Save" name="save">
    </form>
</body>
</html>