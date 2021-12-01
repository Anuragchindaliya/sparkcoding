<?php

session_start();
include_once "./db/conn.php";
if (!isset($_SESSION['login'])) {
    header("location:login.php");
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

        .left-border {
            border-radius: 15px 15px 0 15px;
        }

        .right-border {
            border-radius: 15px 15px 15px 0px;
        }

        .welcomeText {
            background: #eee;
            color: #000;
            padding: 15px;
        }

        .whatsapp-input {
            width: 100%;
            border-radius: 30px;
            padding: 10px 15px;
        }
    </style>
</head>

<body style="background: #252525;color: #fff;">
    <div class="" style="background: linear-gradient(
180deg, #141414f5, transparent)">
        <a href="logout.php" class="text-warning"><i class="fas fa-sign-out-alt logout-icon"></i></a>
        <h1 class="text-center p-3 text-white">
            <img src="./image/icon.png" class="icon">
            <a class="text-white" style="font-weight: bolder;
    font-family: sans-serif" href="../index">
                Spark Coding Society</a>
        </h1>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4 offset-md-2">
                <p class="welcomeText  left-border  ms-5">Hi spark community!</p>
                <p class="welcomeText right-border  me-5">Congratulations 🎉<br />
                    You have Successfully Registered With Us. Your Email ID is <?= $_SESSION['email'] ?>
                </p>
                <!-- Submit button -->
                <div class="mt-5">
                    <!-- <i class="fa fa-file"></i> -->
                    <input class="whatsapp-input" type="text" placeholder="Type a message">
                </div>
                <a href="#" name="addDomain" class="btn btn-warning btn-block mb-4 w-100 mt-2" style="font-weight: bolder; font-variant: small-caps;">
                    Join Group
                </a>
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