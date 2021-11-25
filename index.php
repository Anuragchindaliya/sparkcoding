<?php

session_start();
include_once "./db/conn.php";
// include "./cookieToS.php";
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
        .item{
            font-size:14px;
        }
    </style>
</head>

<body style="background: #252525;color: #fff;">
    <div class="">
        <h2 class="text-center p-3 text-white" style="background: linear-gradient(
180deg, #141414f5, transparent)">
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
                            <!--Text input -->
                            <div class="form-outline mb-1">
                                <label class="form-label" for="name">Name<sup class="text-danger">*</sup> </label>
                                <input placeholder="Enter Name" type="text" id="name" class="form-control" placeholder="Enter Your name" name="name" required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline mb-1">
                                <label class="form-label" for="email">Email<sup class="text-danger">*</sup> </label>
                                <input placeholder="Enter Email" type="text" id="email" class="form-control" name="email" required />
                            </div>
                        </div>
                    </div>

                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-1">
                        <div class="col">
                            <label class="form-label" for="whatsapp">Whatsapp Number</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">+91</span>
                                </div>
                                <input type="tel" id="whatsapp" class="form-control" placeholder="Enter Number" name="whatsapp" minlength="10" maxlength="10" pattern="^[6789]\d{9}$" aria-label="whatsapp" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="roll_no">Rollno</label>
                                <input placeholder="Enter Roll No." type="number" id="roll_no" class="form-control" name="roll_no" />
                            </div>
                        </div>

                    </div>




                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-1">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="section">Section<sup class="text-danger">*</sup></label>
                                <select id="section" name="section" required>
                                    <option value="" selected>Section</option>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                    <option value="4">D</option>
                                    <option value="5">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="semester">Semester<sup class="text-danger">*</sup></label>
                                <select id="semester" name="semester">
                                    <option value="" selected>Semester</option>
                                    <option value="1">1st</option>
                                    <option value="2">2nd</option>
                                    <option value="3">3rd</option>
                                    <option value="4">4th</option>
                                    <option value="5">5th</option>
                                    <option value="6">6th</option>
                                </select>
                            </div>
                        </div>

                    </div>
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
                    <div class="row mb-1">
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




                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="remark">Suggestion</label>
                        <textarea class="form-control" id="remark" rows="2" name="remark">Suggestion</textarea>
                    </div>


                    <!-- Submit button -->
                    <button type="submit" name="register" class="btn btn-warning btn-block mb-4 w-100" style="font-weight: bolder; font-variant: small-caps;">
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