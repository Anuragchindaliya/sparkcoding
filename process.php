<?php
session_start();
include "./db/conn.php";
// if (isset($_POST['register'])) {
//     extract($_POST);
//     $sql = "INSERT INTO spark_students (name,email,whatsapp,semester,section,roll_no,remark) VALUES('$name','$email','$whatsapp','$semester','$section','$roll_no','$remark')";
//     if ($conn->query($sql) === TRUE) {
//         $lastId = $conn->insert_id;
//         $firstSql = "INSERT INTO spark_priorities (sid,priority,cid) VALUES('$lastId','4','$first')";
//         if ($conn->query($firstSql) === TRUE && $second !== "") {
//             $secondSql = "INSERT INTO spark_priorities (sid,priority,cid) VALUES('$lastId','3','$second')";
//             if ($conn->query($secondSql) === TRUE && $third !== "") {
//                 $thirdSql = "INSERT INTO spark_priorities (sid,priority,cid) VALUES('$lastId','2','$third')";
//                 if ($conn->query($thirdSql) === TRUE && $fourth !== "") {
//                     $fourthSql = "INSERT INTO spark_priorities (sid,priority,cid) VALUES('$lastId','1','$fourth')";
//                     $conn->query($fourthSql);
//                 }
//             }
//         }
//         header("location:index");
//         // echo "<pre>";
//         // echo $sql;
//         // echo "</pre>";
//         // echo $firstSql;
//         // echo $secondSql;
//         // echo $thirdSql;
//         // echo $fourthSql;
//         die();
//     }
// }

if (isset($_POST['register'])) {
    extract($_POST);
    $sql = "INSERT INTO spark_students (name,email,password,whatsapp,semester,section,roll_no,remark) VALUES('$name','$email','$password','$whatsapp','$semester','$section','$roll_no','$remark')";
    print_r($sql);

    $result = mysqli_query($conn, $sql);
    header("location:login.php");
    exit();
    die();
}

if (isset($_POST['login'])) {
    extract($_POST);
    $sql = "SELECT * FROM spark_students WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if ($data = mysqli_fetch_assoc($result)) {
        $_SESSION['login'] = true;
        $_SESSION['id'] = $data['id'];
        $_SESSION['email'] = $data['email'];
        // echo print_r($_SESSION);
        // die();
        // $_SESSION['password'] = $data['password'];
        // setcookie('userId', $data['id'], strtotime('+30 days'), "/");
        // setcookie('userPassword', password_hash($data['password'], PASSWORD_BCRYPT), strtotime('+30 days'), "/");
        header("location:priority.php");
    } else {
        header("location:login.php?msg=wrong credentials");
    }
}

if (isset($_POST['addDomain'])) {
    extract($_POST);
    $lastId = $_SESSION['id'];
    $firstSql = "INSERT INTO spark_priorities (sid,priority,cid) VALUES('$lastId','4','$first')";
    if ($conn->query($firstSql) === TRUE && $second !== "") {
        $secondSql = "INSERT INTO spark_priorities (sid,priority,cid) VALUES('$lastId','3','$second')";
        if ($conn->query($secondSql) === TRUE && $third !== "") {
            $thirdSql = "INSERT INTO spark_priorities (sid,priority,cid) VALUES('$lastId','2','$third')";
            if ($conn->query($thirdSql) === TRUE && $fourth !== "") {
                $fourthSql = "INSERT INTO spark_priorities (sid,priority,cid) VALUES('$lastId','1','$fourth')";
                $conn->query($fourthSql);
            }
        }
    }
    header("location:welcome.php");
    // echo "<pre>";
    // echo $sql;
    // echo "</pre>";
    // echo $firstSql;
    // echo $secondSql;
    // echo $thirdSql;
    // echo $fourthSql;
    die();
}
