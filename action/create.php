<?php

use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
include('../vendor/autoload.php');

$data =[
    'name'=>$_POST['name'],
    'email'=> $_POST['email'],
    'phone'=>$_POST['phone'],
    'address'=>$_POST['address'],
    'password'=>md5($_POST['password']),
    'role_id'=> 1,
];
$table = new UsersTable(new MySQL());
if($table){
    $table->insert($data);
    HTTP::redirect("/index.php","registered=true");
}else{
    HTTP::redirect("/register.php","error=true");
}