<?php
    include "database.php";

    $obj = new Database();
    
    // $obj->insert("students", ["student_name"=>"Gull Khan", "age"=>"24", "city"=>"1"]);
    // echo "Insert Result is: " . $obj->getResult()[0];
    
    // $obj->update("students", ["student_name"=>"Khan"], "id='35' OR id='36'");
    // echo "Update Result is: " . $obj->getResult()[0];

    // $obj->delete("students", "id='35'");
    // echo "Delete Result is: " . $obj->getResult()[0];
    
    // $obj->sql("SELECT * FROM students");
    // echo "Selected Results are: " . $obj->getResult()[0];
    
    // $obj->select("students", "id, first_name", null, "id='40' OR id='41'", null, null);
    // echo "Selected Results are: " . $obj->getResult()[0];

    $colName ="students.id, students.student_name, students.age, city.cname";
    $join = "city ON students.city = city.cid";
    $limit = 3;

    $obj->select("students", $colName, $join, null, null, $limit);
    
    echo "<pre>";
    print_r($obj->getResult());
    echo "</pre>";

    echo $obj->pagination("students", $join, null, $limit);
?>