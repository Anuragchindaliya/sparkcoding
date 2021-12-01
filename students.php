<?php include_once "./db/conn.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .btn-primary {
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;
        }

        .btn {
            display: inline-block;
            margin-bottom: 0;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            border-radius: 4px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        a {
            text-decoration: none;
        }

        .mb-1 {
            margin-bottom: 1em;
        }

        .btngroup {
            display: flex;
            justify-content: space-around;
            max-width: 400px;
        }
    </style>
</head>

<body>
    <h2 clas>AI For Ranking</h2>
    <!-- <div class="mb-1 btngroup">
        <a class="btn btn-primary" href="home.php?filter=1">First</a>
        <a class="btn btn-primary" href="home.php?filter=2">Second</a>
        <a class="btn btn-primary" href="home.php?filter=3">Third</a>
        <a class="btn btn-primary" href="home.php?filter=4">Fourth</a>
    </div> -->
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Domains</th>
        </tr>
        <?php
        $filter = -1;
        if (isset($_GET["filter"])) {
            $filter = -$_GET["filter"];
        }
        // $sql = "SELECT cat.category as category_name ,SUM(prior.priority) as totalpr FROM `spark_priorities` AS prior JOIN spark_categories AS cat ON prior.cid = cat.id WHERE prior.priority = '$filter' GROUP BY cid ORDER BY totalpr";
        $sql = "SELECT stu.id, name,email, GROUP_CONCAT(category) as priority FROM `spark_students` AS stu JOIN spark_priorities AS prior ON stu.id = prior.sid JOIN spark_categories AS cat ON prior.cid = cat.id GROUP BY id ORDER BY id DESC";
        $res = mysqli_query($conn, $sql);
        $varId = 1;

        foreach ($res as $row) {
        ?>
            <tr>
                <td><?= $varId ?></td>
                <td><?= $row["name"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["priority"] ?></td>
            </tr>
        <?php $varId++;
        }
        ?>
    </table>
</body>

</html>