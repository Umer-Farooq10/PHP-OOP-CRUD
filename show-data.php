<?php
    include "database.php";

    $obj = new Database();

    $colName ="students.id, students.student_name, students.age, city.cname";
    $join = "city ON students.city = city.cid";
    $limit = 3;

    $obj->select("students", $colName, $join, null, null, $limit);

    $result = $obj->getResult();
    
    echo "<table border='1' cellpadding='5' cellspacing='0'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>STUDENT_NAME</th>
                    <th>AGE</th>
                    <th>CNAME</th>
                </tr>
            </thead>
            <tbody>";

    foreach ($result as list("id"=>$id, "student_name"=>$student_name, "age"=>$age, "cname"=>$cname)) {
        echo "<tr><td>$id</td> <td>$student_name</td> <td>$age</td> <td>$cname</td></tr>";
    }

    echo "</tbody>";

    echo $obj->pagination("students", $join, null, $limit);
?>