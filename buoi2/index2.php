<?php
    //cookie
    #lưu ở phía người dùng
    #dùng cho những thông tin ít quan trọng
    $cookieName = "user";
    $cookieValue = "HoangDuong";
    //86400 = 30ngay
    setcookie($cookieName, $cookieValue, time() + (86400), "/" );

     if(isset($_COOKIE[$cookieName]) ){
        echo "cookie da ton tai";
     }else{
        echo "cookie chua ton tai";
     }

    //session 
    #Thông tin đăng nhập,giỏ hàng....
    session_start();
    $_SESSION['name'] = "Hoang Duong";
    echo "<br>".$_SESSION['name'];
    
?>