<?php
include("include/config.php");
error_reporting(0);

if(isset($_POST['signup'])){
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['useremail'];
    $mobile = $_POST['usermobile'];
    $password = $_POST['loginpassword'];
    $hasedpassword = hash('sha256', $password);

    $ret = "SELECT * FROM userdata WHERE (username=:uname || useremail=:uemail)";
    $queryt = $dbh->prepare($ret);
    $queryt->bindParam(':uname', $username, PDO::PARAM_STR);
    $queryt->bindParam(':uemail', $email, PDO::PARAM_STR);
    $queryt->execute();
    $results = $queryt->fetchAll(PDO::FETCH_OBJ);

    if($queryt->rowCount() == 0){
        $sql = "INSERT INTO userdata(fullname, username, useremail, usermobile, loginpassword) VALUES (:fname, :uname, :uemail, :umobile, :upass)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':fname', $fullname, PDO::PARAM_STR);
        $query->bindParam(':uname', $username, PDO::PARAM_STR);
        $query->bindParam(':uemail', $email, PDO::PARAM_STR);
        $query->bindParam(':umobile', $mobile, PDO::PARAM_STR);
        $query->bindParam(':upass', $hasedpassword, PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();

        if($lastInsertId){
            // แสดงข้อความ "สมัครสมาชิกสำเร็จ"
            echo "<script>alert('สมัครสมาชิกสำเร็จ!'); window.location.href = 'login.php';</script>";
            exit();
        } else {
            echo "Something went wrong, please try again.";
        }
    } else {
        echo "Username or Email already exists, please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SignUp Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="stylesignup.css">

</head>
<body>

<div class="container">
  <h2>SignUp Page</h2>
  <form action="#" method="POST">

    <div class="form-group">
      <label for="fullname">FullName:</label>
      <input type="text" class="form-control" id="fullname" placeholder="Enter FullName" name="fullname">
    </div>

    <div class="form-group">
      <label for="username">UserName:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter UserName" name="username">
    </div>

    <div class="form-group">
      <label for="useremail">Email:</label>
      <input type="email" class="form-control" id="useremail" placeholder="Enter Email" name="useremail">
    </div>

    <div class="form-group">
      <label for="usermobile">Mobile:</label>
      <input type="text" maxlength="10" pattern="[0-9]{10}" title="ตัวเลข10หลักเท่านั้น" class="form-control" id="usermobile" placeholder="Enter Mobile" name="usermobile">
    </div>
    
    <div class="form-group">
      <label for="loginpassword">Password:</label>
      <input type="password" class="form-control" id="loginpassword" placeholder="Enter Password" name="loginpassword">
    </div>

    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>

    <button type="submit" class="btn btn-success" name="signup" id="signup">Submit</button>
  </form>
</div>

</body>
</html>
