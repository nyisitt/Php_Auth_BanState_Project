<?php
 include ('vendor/autoload.php');
use Helpers\Auth;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;



$table = new UsersTable(new MySQL());
$all = $table->getAll();

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
        <div class="container">
            <div class="float-end">
                <a href="profile.php">Profile</a>
                <a href="action/logout.php" class="text-danger">
                    Logout
                </a>
            </div>

            <h1 class="my-5">Manage Users</h1>
            <span><?= count($all)?></span>
            <table class="table table-striped table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                <?php foreach($all as $user):?>
                    <tr>
                        <td><?= $user->id?></td>
                        <td><?= $user->name?></td>
                        <td><?= $user->email?></td>
                        <td><?= $user->phone?></td>
                        <td>
                            <?php if($user->value === '1'):?>
                   <span class="badge bg-secondary">
                                    <?= $user->role?>
                    </span>
                        <?php elseif($user->value === '2'):?>    
                                <span class="badge bg-primary">
                                    <?= $user->role?>
                                </span>
                       <?php else:?>
                            <span class="badge bg-success">
                                <?= $user->role?>
                            </span> 
                        <?php endif ?>            
                        </td>
                        <td>
                            <?php if($auth->value > 1) :?>
                                <div class="btn-group dropdown">
                                    <a href="#"class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
                                        Change Role
                                    </a>
                 <div class="dropdown-menu dropdown-menu-dark">
        <a href="action/role.php?id=<?= $user->id?>&role=1" class="dropdown-item">   User  </a>
        <a href="action/role.php?id=<?= $user->id?>&role=2" class="dropdown-item">   Admin  </a>
        <a href="action/role.php?id=<?= $user->id?>&role=3" class="dropdown-item">   Manager  </a>                    
                        </div> 
                <?php if($user->suspended): ?> 
                    <a href="action/unsusped.php?id=<?= $user->id?>" class="btn btn-sm btn-danger">Suspended</a>   
                <?php else:?>
                    <a href="action/suspend.php?id=<?= $user->id?>" class="btn btn-sm btn-outline-success">Active</a>  
                 <?php endif?>  
                 
                 <?php if($user->id !== $auth->id):?>
                    <a href="action/delete.php?id=<?= $user->id?>" class="btn btn-sm btn-outline-danger" onClick="return confirm ('Are you sure?')">Delete</a>
                    <?php endif?>
                                </div>
                      <?php else:?>
                        ###
                        <?php endif?>          
                        </td>
                    </tr>
                    <?php endforeach?>
            </table>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>