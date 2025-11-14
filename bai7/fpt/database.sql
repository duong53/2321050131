CREATE DATABASE IF NOT EXISTS quan_ly_web_phim;
USE quan_ly_web_phim;

1.Thể loại phim
idTheloai int primary key
tenTheLoai varchar(255)
moTaTheLoai text

2.Thông tin phim
id int primary key
ten_phim nvarchar(255)
mo_ta text
nam_phat_hanh int
dao_dien_id text
dienVienChinh text
hinhAnh 
doTuoi int
quoc_gia id
-- dùng char khi biết trước độ dài
-- dùng varchar khi không biết trước độ dài
-- dùng text khi nội dung dài
-- dùng date cho ngày tháng năm
-- dùng int cho số nguyên,float cho số thực
-- dùng boolean cho đúng/sai
-- dùng primary key để đánh dấu khóa chính
-- dùng foreign key để đánh dấu khóa ngoại

3.người dùng
idNguoiDung int primary key
tenNguoiDung varchar(50)
matKhau varchar(50)
email varchar(50)
soDienThoai char(10)
vai_tro_id int
ngaySinh date


8.phim_dien_vien
id int
phim_id int
dien_vien_id int


4.Vai trò
 id
 ten_vai_tro varchar(50)

5.Quốc gia
id int primary key
ten_quoc_gia varchar(255)

6.Nhà sản xuất
idNhaSanXuat int primary key
tenNhaSanXuat varchar(255)

7.Tập phim
id int primary key
tenTapPhim varchar(255)


-- phim
id | tên    | ...
1  | connan |
2  | mưa đỏ |
-- người dùng
id | tên 7   | loai_tk
1  | abc 9   |  diễn viên   
2  | xyz 1   |  Đạo diễn
3  | abc 2   |  diễn viên   
4  | xyz 3   |  admin
5  | abc 4   |  diễn viên   
6  | xyz 6   |  user
--phim_dien_vien

id | phim_id    | dien_vien_id
1  | 1          | 5
2  | 1          | 1


