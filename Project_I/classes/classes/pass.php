<?php 
include 'Dbconn.class.php';
include 'Query.class.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $Obj = new Query();
    $pas = md5('admin2123');
    //echo $Obj->setUsersStmt('admin3','admin3@gmail.com',$pas);
    echo $Obj->getUsers();
    echo $Obj->getUsersStmt('admin2','admin2@gmail.com');



?>
</body>
</html>