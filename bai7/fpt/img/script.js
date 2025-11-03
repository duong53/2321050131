let danhsachPhim=[
    
    {
        id:1,
        tenPhim: "Conan",
        namPhatHanh:2025,
        tuoi:16,
        thoiLuong:1.5,
        quocGia:"Nhat Ban",
        poster:"url('./img/phim/conan.jpg)",
        theLoai:"Phim hoat hinh"

    },
    {
        id:2,
        tenPhim: "Cuon bay",
        namPhatHanh:2025,
        tuoi:16,
        thoiLuong:2,
        quocGia:"Viet Nam",
        poster:"./img/phim/johnwi.jpg",

    },
    {
        id:3,
        tenPhim: "Sau bao nhieu nam",
        namPhatHanh:2024,
        tuoi:16,
        thoiLuong:1.8,
        quocGia:"Viet Nam",
        poster:"./img/phim/mai.jpg",
    },
    {
        id:4,
        tenPhim: "Sai hay hong sai",
        namPhatHanh:2024,
        tuoi:16,
        thoiLuong:1.7,
        quocGia:"Viet Nam",
        poster:"./img/phim/deptraithaysaisai.jpg",
    },
];
let phimHienTai = danhsachPhim[0];

let banner = document.getElementById("dmm");

function chonPhim(idPhim){
    for (let i=0;i< danhsachPhim.length;i++){
        if (danhsachPhim[i].id === idPhim){
            dmm.scr = danhsachPhim[i].poster;
        }
    }
}