<?php
    include "database.php";

    $obj = new Database();

    $sname = $_POST["sname"];
    $sage = $_POST["sage"];
    $scity = $_POST["scity"];

    $value = ["student_name"=>$sname, "age"=>$sage, "city"=>$scity];

    if ($obj->insert("students", $value)){
        echo "Data Inserted Successfully.";
    } else {
        echo "Data Is Not Inserted Successfully.";
    }
    
    header("Location: http://localhost/opp-crud/show-data.php");
?>