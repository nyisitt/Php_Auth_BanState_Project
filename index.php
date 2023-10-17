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
            <div class="col-4 offset-4 mt-5">
                <h1 class="mb-3 text-center">Login</h1>
     

             <?php if(isset($_GET['incorrect'])) :?>  
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Incorrect Email or Password
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
                <?php endif?>

                <?php if(isset($_GET['registered'])) :?>  
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                Account created.Please Login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
              <?php endif?>

                <?php if(isset($_GET['suspended'])) :?>  
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Your account is suspended.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
                    <?php endif?>
                <form action="action/login.php" method="post">
                    <input type="email" name="email" placeholder="Email..."  class="form-control mb-3">
                    <input type="password" name="password" placeholder="Password.." class="form-control mb-3">
                    <input type="submit" value="login" class="w-100 btn btn-primary">
                </form>
                <div class="mt-3 text-center">
                <a href="register.php">Register</a>
                </div>
            </div>
        </div>
    </div>
</body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>