<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="text-center">
    <div class="container-fulid">
        <div class="row mt-5">
            <div class="col-4 offset-4 bg-success rounded">
        <h1 class="mt-3">Register</h1>

        <?php if(isset($_GET['error'])):?>
            <div class="alert alert-warning">
                Cannot create account.Please Try again.
            </div>
            <?php endif?>

            <form action="action/create.php" method="post">
                <input type="text" name="name" class="form-control mb-3 px-3" required placeholder="Name">

                <input type="email" name="email" class="form-control mb-3 px-3" required placeholder="Email">

                <input type="text" name="phone" class="form-control mb-3 px-3" required placeholder="Phone">

                <input type="text" name="address" class="form-control mb-3 px-3" required placeholder="Address">

                <input type="password" name="password" class="form-control mb-3 px-3" required placeholder="password">

                <input type="submit" value="Register" class="btn btn-primary my-3">
            </form>
         
            <div class="mb-3 ">
            <a href="index.php" class="text-white">Login</a>
            </div>
            </div>
        </div>
    </div>
</body>
<script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</script>
</html>