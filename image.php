<?php 
require_once 'operations.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1 class="text-center my-3">Resigratoins form</h1>
    <div class="container d-flex justify-content-center" >
        <form action="display.php" method="post" class="w-50" enctype="multipart/form-data">
        <?php inputfiled('text','username','name','')?>
        <?php inputfiled('text','mobile','mobile','')?>
        <?php inputfiled('file','file','image','')?>
        <button class="btn btn-danger" type="submit" name="submit">submit</button>

        </form>
    </div>
</body>
</html>