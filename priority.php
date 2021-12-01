<?php

session_start();
include_once "./db/conn.php";
if (!isset($_SESSION['login'])) {
    header("location:login.php");
}
$id = $_SESSION["id"];
$priorityCheck = "SELECT id FROM `spark_priorities` WHERE sid = $id";
$res = mysqli_query($conn, $priorityCheck);
if ($res->num_rows > 0) {
    header("location:welcome.php");
    die();
}


// if (isset($_COOKIE['userPassword']) && isset($_COOKIE['userId'])) {
//     $id = $_COOKIE['userId'];
//     $result = mysqli_query($conn, "SELECT * FROM spark_students WHERE  `id` ='$id'");
//     $data = mysqli_fetch_array($result);
//     if (password_verify($data['password'], $_COOKIE['userPassword'])) {
//         // echo "password is valid";
//         $_SESSION['login'] = true;
//         $_SESSION['id'] = $data['id'];
//         $_SESSION['email'] = $data['email'];
//         $_SESSION['password'] = $data['password'];
//         header("location: ./login.php");
//     } else {
//         echo "password is Invalid";
//     }
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Spark Coding Society Will Help you to Move Forward Towards Fields of Information Technology.">
    <meta property="og:image" content="https://spark.web2rise.com/image/spark.png">

    <link rel="icon" href="./image/icon.png" sizes="any" type="image/svg+xml">
    <title>Spark Coding Society</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- <link href="./compiled.min.css" rel="stylesheet" /> -->

    <!-- select -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* .form-outline {
        border-bottom: 1px solid #000 !important;
      } */
        .selectize-input {
            padding: 0.55rem 0.75rem;
        }

        a {
            text-decoration: none;
        }

        .form-label {
            margin-bottom: 0.1rem;
        }

        .input-group-text {
            padding: .375rem 0.50rem;
        }

        .icon {
            width: 75px;
        }

        label {
            font-weight: bolder;
        }

        .item {
            font-size: 14px;
        }

        .logout-icon {
            display: flex;
            justify-content: end;
            padding: 15px 15px 0 0;
        }
    </style>
</head>

<body style="background: #252525;color: #fff;">
    <div class="" style="background: linear-gradient(
180deg, #141414f5, transparent)">
        <a href="logout.php" class="text-warning"><i class="fas fa-sign-out-alt logout-icon"></i></a>
        <h2 class="text-center p-3 text-white">
            <img src="./image/icon.png" class="icon">
            <a class="text-white" style="font-weight: bolder;
    font-family: sans-serif" href="../index">
                Spark Coding Society</a>
        </h2>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php
                // is_null($var1) ? print_r("True\n") : print_r("False\n")
                $sql = "SELECT * FROM spark_categories ORDER BY category";
                $conn = mysqli_query($conn, $sql);
                $allCategories = mysqli_fetch_all($conn, MYSQLI_ASSOC);
                // echo "<pre>";
                // echo print_r($allCategories);
                // echo "</pre>";
                // die();
                ?>
                <form action="process" method="post" enctype="multipart/form-data">

                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-1">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="first">1st Domain<sup class="text-danger">*</sup></label>
                                <select name="first" id="first">
                                    <option value="" selected>Choose Domain</option>
                                    <?php foreach ($allCategories as $cat) {
                                    ?>
                                        <option value="<?= $cat['id'] ?>"><?= $cat['category'] ?></option>
                                    <?php
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="second">2nd Domain (Optional)</label>
                                <select name="second" id="second">
                                    <option value="" selected>Choose Domain</option>
                                    <?php foreach ($allCategories as $cat) {
                                    ?>
                                        <option value="<?= $cat['id'] ?>"><?= $cat['category'] ?></option>
                                    <?php
                                    } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="third">3rd Domain (Optional)</label>
                                <select name="third" id="third">
                                    <option value="" selected>Choose Domain</option>
                                    <?php foreach ($allCategories as $cat) {
                                    ?>
                                        <option value="<?= $cat['id'] ?>"><?= $cat['category'] ?></option>
                                    <?php
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="fourth">4th Domain (Optional)</label>
                                <select name="fourth" id="fourth">
                                    <option value="" selected>Choose Domain</option>
                                    <?php foreach ($allCategories as $cat) {
                                    ?>
                                        <option value="<?= $cat['id'] ?>"><?= $cat['category'] ?></option>
                                    <?php
                                    } ?>
                                </select>
                            </div>
                        </div>
                    </div>





                    <!-- Submit button -->
                    <button type="submit" name="addDomain" class="btn btn-warning btn-block mb-4 w-100" style="font-weight: bolder; font-variant: small-caps;">
                        Submit
                    </button>




                    <?php if (isset($_GET['msg'])) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Inserted</strong> <?= $_GET['msg'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                </form>

            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("select").selectize({
                sortField: "text",
            });
            setTimeout(() => {
                $(".alert").slideUp()
            }, 4000);
        });
    </script>
</body>

</html>