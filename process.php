<?php
include "./db/conn.php";
if (isset($_POST['register'])) {
    extract($_POST);
    $sql = "INSERT INTO spark_students (name,email,whatsapp,semester,section,roll_no,remark) VALUES('$name','$email','$whatsapp','$semester','$section','$roll_no','$remark')";
    if ($conn->query($sql) === TRUE) {
        $lastId = $conn->insert_id;
        $firstSql = "INSERT INTO spark_priorities (sid,priority,cid) VALUES('$lastId','4','$first')";
        if ($conn->query($firstSql) === TRUE && $second !== "") {
            $secondSql = "INSERT INTO spark_priorities (sid,priority,cid) VALUES('$lastId','3','$second')";
            if ($conn->query($secondSql) === TRUE && $third !== "") {
                $thirdSql = "INSERT INTO spark_priorities (sid,priority,cid) VALUES('$lastId','2','$third')";
                if ($conn->query($thirdSql) === TRUE && $fourth !== "") {
                    $fourthSql = "INSERT INTO spark_priorities (sid,priority,cid) VALUES('$lastId','1','$fourth')";
                }
            }
        }
        header("location:index");
        // echo "<pre>";
        // echo $sql;
        // echo "</pre>";
        // echo $firstSql;
        // echo $secondSql;
        // echo $thirdSql;
        // echo $fourthSql;
        die();
    }
}
