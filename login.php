<?php

session_start();
include_once "./db/conn.php";
// include "./cookieToS.php";
if (isset($_SESSION['login'])) {
    header("location:welcome.php");
}
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

        .item {
            font-size: 14px;
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
    <div class="container p-4">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="process.php" method="post" enctype="multipart/form-data">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-1">
                        <div class="form-outline mb-1">
                            <label class="form-label" for="email">Email </label>
                            <input placeholder="Enter Email" type="email" id="email" class="form-control" name="email" required />
                        </div>
                    </div>
                    <!-- Message input -->
                    <div class="row mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="password">Password</label>
                            <input placeholder="Enter password" type="password" id="password" class="form-control" name="password" required />
                        </div>
                    </div>


                    <!-- Submit button -->
                    <button type="submit" name="login" class="btn btn-warning btn-block mb-4 w-100" style="font-weight: bolder; font-variant: small-caps;">
                        Login
                    </button>




                    <?php if (isset($_GET['msg'])) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Inserted</strong> <?= $_GET['msg'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                    <div class="text-center">
                        Don't have an account? <a href="register" class="text-warning">Sign up</a>
                    </div>
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