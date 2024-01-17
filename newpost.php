<?php 
      session_start();
      if(!isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard KakKak </h1>
    <hr>
        ผู้ใช้ : <?php echo $_SESSION['username'];?>
<form >
    <table>
    หมวดหมู : 
        <select >
            <option value="genaral">เรื่องทั่วไป</option>
            <option value="study">เรื่องเรียน</option>
        </select>
        <br><tr><td>หัวข้อ :<input type="text"></td></tr>
        <tr><td>เนื้อหา :<textarea rows = "2" cols="20"></textarea></td></tr>
        <tr><td colspan = "2" align="center"><input type = "submit" value = "บันทึกข้อความ"></td></tr>
    </table>

    </form>
</body>
</html>