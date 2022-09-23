<?php
include 'db.php';
 $q = "SELECT * from `note`;";
 $res = mysqli_query($con, $q);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notes app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5 ">
    <a href="index.php" class="btn btn-dark my-1">Add notes</a>
    <h2 class="my-4">Notes</h2>


    <div class="row">
    <?php while($row = mysqli_fetch_assoc($res)){?> 
  <div class="col-sm-4 ">
    <div class=" card my-2">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['title']?></h5>
        <p class="card-text"><?php echo  substr($row['description'],0,50)?></p>
        <a href="/iNotes/update.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>  <a href="/iNotes/delete.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
      </div>
    </div>
  </div>
  <?php
  }
  ?>

</div>

        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>