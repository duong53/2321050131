<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php- Buổi2</title>
</head>
<body>

    <form action="index.php" method="post"> 
        <h1>Đăng nhập</h1>
        <div>
            <input type="text" name="username" placeholder="Tên đăng nhập">
        </div>
        <div>
            <input type="password" name="password" placeholder="Mật khẩu">
        </div>
        <input type="submit" value="Đăng nhập">
    </form>
    <?php
        if(isset($_POST['username']) && isset($_POST['password'])){
            $tenDangNhap = $_POST['username'];
            $matKhau = $_POST['password'];
            // echo  $matKhau;

            //Nếu tên đăng nhập =admin
            //Mật khẩu =123 thì cho phép người dùng đăng nhập thành công
            if($tenDangNhap == 'admin' && $matKhau == '123'){
                $_SESSION["username"] = $tenDangNhap;
                header("Location: trangchu.php");
            }else{
                echo "<p class='warning'>Sai thông tin đăng nhập</p>";
            }
        }
    ?>
</body>
</html>