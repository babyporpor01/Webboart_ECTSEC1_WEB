<?php
session_start();
if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src = "bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container-lg">
    <h1 style ="text-align: center;" class = "mt-3">Webboard KakKak</h1>
    <?php include "nav.php" ?>
    <div class = "row mt-2">
        <div class = "col-lg-4 col-md-3 col-sm-2 col-1"></div>
        <div class = "col-lg-4 col-md-6 col-sm-8 col-10">
            <?php 
                if(isset($_SESSION['error'])){
                    echo "<div class='alert alert-danger'>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</div>";
                    unset($_SESSION['error']);
                }
            ?>
            <div class="card bg-light text-dark">
                <div class="card-header">เข้าสู่ระบบ</div>
                <div class="card-body">
                <form action="verify.php" method="post">
                    <div class="form-group">
                        <label for="login" class = "form-label">Login : </label>
                        <input type="text" name = "login" id = "login" class = "form-control">
                    </div>
                    <div class="from-group mt-2">
                     <label for="pwd">Password</label>
                    <input type="password" name = "password" id = "pwd" class="form-control">

                    <div class="d-flex justify-content-center mt-3  ">
                        <button type="submit" class="btn btn-secondary btn-sm me-2">Login</button>
                        <button type="reset" class="btn btn-danger btn-sm">Reset</button> 
                    </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class = "col-lg-4 col-md-3 col-sm-2 col-1"></div>
        <div class="from-group mt-2">
        <p style = "text-align: center;">ถ้ายังไม่ได้เป็นสมาชิก <a href = "register.php" >กรุณาสมัครสมาชิก</a></p>
        </div>
    </div>
</div>
</body>
</html>