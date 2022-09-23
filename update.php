<?php
$id = $_GET['id'];
include 'db.php';

$q = "SELECT * FROM `note` where `id` = $id";
$res = mysqli_query($con, $q);
$row = mysqli_fetch_assoc($res);

if(@$_POST['Submit']) {
    $id = $_GET['id'];
    $title = @$_POST['title'];
    $description = @$_POST['description'];
    $qu = "UPDATE `note` set `id` = $id, `title`= '$title', `description` = '$description' where `id` = $id ";
    $result = mysqli_query($con, $qu);
  
}



?>
<!DOCTYPE html>
<html lang="en">

<!-- auth-register.html  Tue, 07 Jan 2020 03:39:47 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notes app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="layout-4">

    <div id="app">

        <div class="container mt-5 col-md-6">
            <form action="/iNotes/insert.php" method="Post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">title</label>
                    <input type="text" name="title" value="<?= $row['title'] ?>" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea name="description" value="<?= $row['description'] ?>" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">update</button>
                </div>
            </form>







        </div>

        <!-- General JS Scripts -->
        <script src="assets/bundles/lib.vendor.bundle.js"></script>
        <script src="js/CodiePie.js"></script>

        <!-- JS Libraies -->
        <script src="assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
        <script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

        <!-- Page Specific JS File -->
        <script src="js/page/auth-register.js"></script>

        <!-- Template JS File -->
        <script src="js/scripts.js"></script>
        <script src="js/custom.js"></script>
</body>

<!-- auth-register.html  Tue, 07 Jan 2020 03:39:48 GMT -->

</html>