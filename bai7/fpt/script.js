let danhsachPhim=[
    {
        id:1,
        tenPhim: "Mua do",
        namPhatHanh:2025,
        tuoi:16,
        thoiLuong:2,
        quocGia:"Viet Nam",
        poster:"url('img/mua-do-1122/jpg')",


    },
    {
        id:2,
        tenPhim: "Conan",
        namPhatHanh:2025,
        tuoi:16,
        thoiLuong:1.5,
        quocGia:"Nhat Ban",
        poster:"url('img/poster/conan-banner/jpg')",
        theLoai:"Phim hoat hinh"

    }
];
let phimHienTai = danhsachPhim[0];

let banner = document.getElementsByClassName('banner')[0];

function chonPhim(idPhim){
    for (let i=0;i< danhsachPhim.length;i++){
        if (danhsachPhim[i].id === idPhim){
            banner.style.backgroundImage = danhsachPhim[i].poster;
        }
    }
}