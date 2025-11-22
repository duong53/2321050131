<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1 php</title>
</head>
<body>
    <?php 
        //1. In ra màn hình
        echo "Hello World!<br> ";

        echo "Hi ";

        //2. Biến trong PHP
        // Cú pháp: $+ tên biến = giá trị của biến;
        $ten = "Hoang Duong";
        $tuoi = 20;

        echo $ten . " ". $tuoi . " tuổi<br>";//Nối chuỗi trong PHP sử dụng dấu .
        //3. Hằng
        define("soPi", "3.14");
        echo soPi;

        //4. Phân biệt '' và ""
        echo '$ten'."<br>"; 
        echo "$ten"."<br>";

        //5.Chuỗi
        #5.1 Kiểm tra độ dài chuỗi
        echo strlen($ten)."<br>";
        #5.2 Đếm số từ
        echo str_word_count($ten)."<br>";
        #5.3 Tìm kiếm ký tự trong chuỗi
        echo strpos($ten, "D")."<br>";
        #5.4 Thay thế ký tự trong chuỗi
        echo str_replace("Duong", "Dương", $ten)."<br>";

        //6 Toán tử
        $soThuNhat = 10;
        $soThuHai = 5;
        # +-*/
        # += -= *= /=
        # so sanh == != > < >= <= ===
        echo $soThuNhat < $soThuHai ;

        //7 Câu điều kiện
        // if("điều kiện"){
            //logic
        //} 
        // elseif ("điều kiện"){
            //logic
        //}
        // else{
            //logic
        //}

        //Kiểm tra tổng số thứ nhất và số thứ 2
        // (nếu<15 thì in ra nhỏ hơn 15)
        // (nếu=15 thì in ra bằng 15)
        // (còn lại in ra lớn hơn 15)
        if($soThuNhat + $soThuHai < 15){
            echo "<br>Nhỏ hơn 15";
        }
        elseif($soThuNhat + $soThuHai == 15){
            echo "<br>Bằng 15";
        }
        else{
            echo "<br>Lớn hơn 15";
        }

        //8 switch case
        $color = "red";
        switch($color){
            case "red":
                echo "<br>is red";
                break;
            case "blue":
                echo "<br>is blue";
                break;
            default:
                echo "<br>no color";
                break;
        }
       
        //9.for
        // for($i=0; $i<100; $i++){
        //     echo $i."<br> ";
        // }

        //10 Mảng
        $mang = ["Anh", "Đức", "Dương"];

        //Đếm phần tử
        echo count($mang);
        //Lấy phần tử trong mảng
        echo $mang[0] . "<br>";
        print_r($mang);
        $mang[0] = "Hoàng";
        print_r($mang);
        $mang[] = "Tuấn";
        print_r($mang);
        #xóa
        unset($mang[1]);
        print_r($mang);
        
    ?>
    
</body>
</html>