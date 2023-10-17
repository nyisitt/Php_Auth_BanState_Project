<?php

use Helpers\Auth;

include('vendor/autoload.php');
$auth = Auth::check();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 offset-4">
                <h1><?= $auth->name?><span>(<?= $auth->role?>)</span></h1>

                <?php if(isset($_GET['error'])) :?>  
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Cannot upload file
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif?>
                    <?php if($auth->photo):?>
                        <img src="action/photos/<?= $auth->photo?>" class="img-thumbnail mb-3" width="200px">
<?php endif?>

        <form action="action/upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="photo" class="form-control">
 <div class="float-end mt-1 ">
 <button class="btn btn-secondary rounded">Upload</button>
 </div>

                        </form>
                    <ul class="list-group mt-5">
                        <li class="list-group-item">
                            <b>Email :</b><?= $auth->email?>
                        </li>
                        <li class="list-group-item">
                            <b>Phone :</b><?= $auth->phone?>
                        </li>
                        <li class="list-group-item">
                            <b>Address :</b><?= $auth->address?>
                        </li>
                    </ul>
                    <br>
                   <div class="text-center">
                   <a href="admin.php">Manage Users</a>
                   </div>
               <div class="text-center"><a href="action/logout.php" class="danger">Logout</a></div>
            </div>
        </div>
    </div>
</body>
</html>