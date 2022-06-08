<?php 
require('query/checkLogin.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>หน้าหลัก</title>
  <?php
  require('../boostrap5css.php');
  require('../boostrap5JS.php');
  ?>
</head>

<body>
<div class="container">
  </br></br>
  <div class="row">
    <div class="text-center mb-4">
      <img src="../assets/images/logo.png" class="rounded" alt="..." height="150px">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
      <div class="card text-center">
        <div class="card-header">
          Zombie
        </div>
        <div class="card-body">
          <div class="text-center mb-3">
            <img src="../assets/images/logo2.png" class="rounded" alt="..." height="150px">
          </div>
          <div class="">
            <a class="btn btn-primary" href="https://www.caf.co.th/index.html"><i class="fa fa-sign-in" aria-hidden="true"></i> ไปยังเว็บไซต์หลัก</a>
            <a class="btn btn-danger" href="query/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> ออกจากระบบ</a>
          </div> 
        </div>
          <div class="card-footer text-muted ">
            <p>Copyrights &copy; 2022.  by IT_Group & team</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    
</body>
</html>