<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
<h1 style="text-align: center;">Webboard KakKak </h1>
    <hr>
    <div style="text-align: center;">
    <?php
    $login= $_POST['login'];
    $password= $_POST['password'];
        if ($login=="admin" && $password=="ad1234"){
            echo "ยินดีต้อoรับสำหรับคุณ ADMIN";
        }
        if ($login=="member" && $password=="mem1234"){
            echo "ยินดีต้อoรับสำหรับคุณ MEMBER";
        }
      else
      echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
        ?>
    </div>
    <br>
    <div style="text-align: center;"><a href="index.php"; >กลับไปยังหน้าหลัก</a></div>
</body>
</html>