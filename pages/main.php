<div class="main">
	<?php
	    if(isset($_GET['page']))
		{
			  $tam = $_GET['page'];
		}else{
			$tam ='';
		}
	    if($tam == 'tintuc')
		{
			include("main/tintuc.php");
		}else if($tam == 'tuyendung')
		{
			 include("main/tuyendung.php");
		}else if($tam == 'gioithieu')
		{
			 include("main/gioithieu.php");
		}else if($tam == 'baohanh')
		{
			 include("main/baohanh.php");
		}else if($tam == 'lienhe')
		{
			 include("main/lienhe.php");
		}else{
			include("main/index.php");
		}
	?>
</div>
	








<style>
	/* Phải thêm .chitietSanpham để không trùng với h1 của taikhoan */
.chitietSanpham h1 {
    display: block;
    margin: 0 0 0 10px;
    float: left;
    overflow: hidden;
    /*khi k đủ chứa text thì phần text bị dư sẽ giấu đi*/
    font-size: 24px;
    color: #333;
    line-height: 40px;
    /*tăng khoảng cách dòng*/
}

.rating {
    float: left;
    margin-left: 15px;
    line-height: 40px;
}

.fa-star,
.fa-star-o {
    color: orange;
}

.rowdetail {
    display: block;
    border-top: 1px solid #e5e5e5;
    padding: 15px 0;
    margin-top: 5px;
    clear: both;
}

.overlaycertainimg {
    z-index: 14;
    height: 100%;
    width: 100%;
    position: fixed;
    /*Định vị cho thành phần theo cửa sổ trình duyệt*/
    /*Cho nằm lên trên màn hình*/
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, .95);
    transform: scale(0);
    transition: .2s ease;
}

.overlaycertainimg .close {
    /*Nút tắt hình*/
    position: absolute;
    /*Định vị tuyệt đối theo thành phần bao ngoài (cửa sổ trình duyệt)*/
    top: 15px;
    right: 45px;
    font-size: 3rem;
    width: 1em;
    height: 1em;
    line-height: 1em;
    text-align: center;
    color: #ccc;
    cursor: pointer;
    transition: .2s ease;
}

.overlaycertainimg .close:hover {
    /* color: #fff; */
    background-color: #f33;
    border-radius: 50%;
}

.overlaycertainimg-content {
    width: 100%;
}

.overlaycertainimg-content img {
    background-color: #fff;
}

.overlaycertainimg-content img.bigimg {
    /*hình lớn ở certainimg*/
    height: 540px;
    display: block;
    margin: auto;
}

.overlaycertainimg-content .div_smallimg

/*hình nhỏ ở certainimg*/
    {
    display: block;
    margin-top: 25px;
    width: 100%;
    text-align: center;
}

.overlaycertainimg-content .div_smallimg:hover {
    background-color: #222;
}

.overlaycertainimg-content .div_smallimg img {
    width: 120px;
    height: 90px;
    transform: scale(0.95);
}

.overlaycertainimg-content .div_smallimg img:hover {
    transform: scale(1);
}

.picture {
    float: left;
    overflow: hidden;
    width: 33%;
    position: relative;
    /*định vị trí phụ thuộc vào thành phần bao ngoài*/
    display: block;
}

.picture img {
    display: block;
    height: auto;
    margin: auto;
    cursor: pointer;
    /*thay đổi trỏ chuột đi đưa vào*/
    max-width: 100%;
}

.price_sale {
    float: left;
    position: relative;
    width: 33%;
    display: block;
}

.area_price {
    display: block;
    overflow: hidden;
    line-height: 20px;
    padding: 0 10px 10px;
}

.area_price strong {
    display: inline-block;
    /*hối nội tuyến*/
    overflow: hidden;
    font-size: 24px;
    color: #e10c00;
    vertical-align: middle;
    /*thành phần sẽ đc canh giữa theo thành phần bao ngoài*/
    margin-right: 10px;
}

.area_price span {
    /* giá tiền gạch ngang */
    display: inline-block;
    vertical-align: middle;
    font-size: 20px;
    text-decoration: line-through;
    margin-left: 5px;
    color: #222;
}

.area_price label {
    display: inline-block;
    position: relative;
    font-size: 11px;
    color: #fff;
    font-weight: 600;
    /*hiển thị chữ đậm hay chữ thường*/
    border-radius: 3px;
    padding: 0 5px 0 8px;
    height: 18px;
}

.area_price label.tragop {
    background: #f28902;
    margin: 0 0 0 5px;
}

.area_price label.giamgia {
    background-image: -webkit-gradient(linear, left top, right top, from(#ff9c00), to(#ec1f1f));
    background-image: -webkit-linear-gradient(left, #ff9c00 0%, #ec1f1f 100%);
    background-image: -o-linear-gradient(left, #ff9c00 0%, #ec1f1f 100%);
    background-image: linear-gradient(90deg, #ff9c00 0%, #ec1f1f 100%);
    margin: 0 0 0 5px;
}

.area_price label.moiramat {
    background: #1191f8;
    margin: 0 0 0 5px;
}

.area_price label.giareonline {
    background: #3fb846;
    margin: 0 0 0 5px;
}

.ship {
    background-color: #ecf7ed;
    border-radius: 3px;
    border: 1px solid #c4ddc8;
    margin: 5px 10px 10px;
    padding: 0 10px;
    font-weight: bold;
    line-height: 30px;
}

.ship img {
    width: 19px;
    height: 21px;
    margin: 4px 10px 0 0;
    float: left;
}

.ship div {
    border-left: 1px solid #c4ddc8;
    display: block;
    line-height: 30px;
    padding-left: 10px;
    margin-left: 28px;
    color: #30a43b;
    max-width: 1200px;
}

.area_promo {
    border: 1px solid #ddd;
    display: block;
    overflow: hidden;
    border-radius: 4px;
    position: relative;
    margin: 5px 10px 12px;
    padding-bottom: 10px;
}

.area_promo strong {
    display: block;
    overflow: hidden;
    font-size: 15px;
    padding: 15px 15px 10px 15px;
    text-transform: uppercase;
    /*Viết thành chữ hoa*/
}

.area_promo .promo {
    display: block;
    overflow: hidden;
    font-size: 14px;
    padding: 0 15px 5px 40px;
}

.promo img {
    width: 14px;
    height: 14px;
    float: left;
    margin: 2px 0 0 -20px;
}

.area_order {
    display: block;
    overflow: hidden;
    margin: 10px;
}

.area_order .buy_now {
    display: block;
    overflow: hidden;
    padding: 7px 0;
    border-radius: 4px;
    font-size: 16px;
    line-height: normal;
    color: #fff;
    text-align: center;
    background: -webkit-linear-gradient(top, #f59000, #fd6e1d);
    text-decoration: none;
    cursor: pointer;
}

.area_order .buy_now:hover {
    background: -webkit-linear-gradient(top, #fd6e1d, #f59000);
}

.area_order .buy_now p {
    display: block;
    font-size: 13px;
    margin: 3px 0;
}

.policy {
    display: block;
    overflow: hidden;
    border: 1px solid #ddd;
    border-radius: 3px;
    padding-top: 10px;
    margin: 0 10px 10px 10px;
    padding-bottom: 5px;
}

.policy div {
    display: block;
    overflow: hidden;
    padding: 5px 0 5px 5px;
    font-size: 14px;
    line-height: 20px;
    margin: 0 10px;
    border-bottom: 1px solid #f0f0f0;
    position: relative;
}

.policy div img {
    background: #fff;
    display: block;
    width: 20px;
    height: 17px;
    float: left;
    margin: 3px;
}

.policy div p {
    margin: 0 0 0 28px;
    color: #288ad6;
}

.policy div.last {
    border-bottom: 0px;
}

.info_product {
    width: 33%;
    border: 1px solid #ddd;
    float: left;
    border-radius: 3px;
    display: block;
}

.info_product h2 {
    text-align: center;
    font-size: 20px;
    padding: 10px;
}

.info {
    display: block;
    position: relative;
    overflow: hidden;
    padding: 0 5px;
}

.info li {
    list-style: none;
    display: table;
    border-top: 1px solid #eee;
    width: 100%;
    padding: 5px 0;
}

.info li p {
    clear: both;
    float: left;
    margin: 5px 0;
    width: 40%;
    color: #666;
}

.info li div {
    width: 60%;
    float: left;
    margin: 5px 0;
    color: #333;
}
	</style>
	<script>
		var nameProduct, maProduct, sanPhamHienTai; // Tên sản phẩm trong trang này, 
// là biến toàn cục để có thể dùng ở bát cứ đâu trong trang
// không cần tính toán lấy tên từ url nhiều lần

window.onload = function () {
    khoiTao();

    // thêm tags (từ khóa) vào khung tìm kiếm
    var tags = ["Samsung", "iPhone", "Huawei", "Oppo", "Mobi"];
    for (var t of tags) addTags(t, "index.html?search=" + t, true);

    phanTich_URL_chiTietSanPham();

    // autocomplete cho khung tim kiem
    autocomplete(document.getElementById('search-box'), list_products);

    // Thêm gợi ý sản phẩm
    sanPhamHienTai && suggestion();
}

function khongTimThaySanPham() {
    document.getElementById('productNotFound').style.display = 'block';
    document.getElementsByClassName('chitietSanpham')[0].style.display = 'none';
}

function phanTich_URL_chiTietSanPham() {
    nameProduct = window.location.href.split('?')[1]; // lấy tên
    if(!nameProduct) return khongTimThaySanPham();

    // tách theo dấu '-' vào gắn lại bằng dấu ' ', code này giúp bỏ hết dấu '-' thay vào bằng khoảng trắng.
    // code này làm ngược lại so với lúc tạo href cho sản phẩm trong file classes.js
    nameProduct = nameProduct.split('-').join(' ');

    for(var p of list_products) {
        if(nameProduct == p.name) {
            maProduct = p.masp;
            break;
        }
    }

    
    sanPhamHienTai =  Product('masp', "C", "img/products/huawei-mate-20-pro-green-600x600.jpg", 130000, 8, 5.5, true);
    if(!sanPhamHienTai) return khongTimThaySanPham();

    var divChiTiet = document.getElementsByClassName('chitietSanpham')[0];

    // Đổi title
    document.title = nameProduct + ' - Thế giới điện thoại';

    // Cập nhật tên h1
    var h1 = divChiTiet.getElementsByTagName('h1')[0];
    h1.innerHTML += nameProduct;

    // Cập nhật sao
    var rating = "";
    if (sanPhamHienTai.rateCount > 0) {
        for (var i = 1; i <= 5; i++) {
            if (i <= sanPhamHienTai.star) {
                rating += `<i class="fa fa-star"></i>`
            } else {
                rating += `<i class="fa fa-star-o"></i>`
            }
        }
        rating += `<span> ` + sanPhamHienTai.rateCount + ` đánh giá</span>`;
    }
    divChiTiet.getElementsByClassName('rating')[0].innerHTML += rating;

    // Cập nhật giá + label khuyến mãi
    var price = divChiTiet.getElementsByClassName('area_price')[0];
    if (sanPhamHienTai.promo.name != 'giareonline') {
        price.innerHTML = `<strong>` + sanPhamHienTai.price + `₫</strong>`;
        price.innerHTML += new Promo(sanPhamHienTai.promo.name, sanPhamHienTai.promo.value).toWeb();
    } else {
        document.getElementsByClassName('ship')[0].style.display = ''; // hiển thị 'giao hàng trong 1 giờ'
        price.innerHTML = `<strong>` + sanPhamHienTai.promo.value + `&#8363;</strong>
					        <span>` + sanPhamHienTai.price + `&#8363;</span>`;
    }

    // Cập nhật chi tiết khuyến mãi
    document.getElementById('detailPromo').innerHTML = getDetailPromo(sanPhamHienTai);

    // Cập nhật thông số
    var info = document.getElementsByClassName('info')[0];
    var s = addThongSo('Màn hình', sanPhamHienTai.detail.screen);
    s += addThongSo('Hệ điều hành', sanPhamHienTai.detail.os);
    s += addThongSo('Camara sau', sanPhamHienTai.detail.camara);
    s += addThongSo('Camara trước', sanPhamHienTai.detail.camaraFront);
    s += addThongSo('CPU', sanPhamHienTai.detail.cpu);
    s += addThongSo('RAM', sanPhamHienTai.detail.ram);
    s += addThongSo('Bộ nhớ trong', sanPhamHienTai.detail.rom);
    s += addThongSo('Thẻ nhớ', sanPhamHienTai.detail.microUSB);
    s += addThongSo('Dung lượng pin', sanPhamHienTai.detail.battery);
    info.innerHTML = s;

    // Cập nhật hình
    var hinh = divChiTiet.getElementsByClassName('picture')[0];
    hinh = hinh.getElementsByTagName('img')[0];
    hinh.src = sanPhamHienTai.img;
    document.getElementById('bigimg').src = sanPhamHienTai.img;

    // Hình nhỏ
    addSmallImg("img/products/huawei-mate-20-pro-green-600x600.jpg");
    addSmallImg("img/chitietsanpham/oppo-f9-mau-do-1-org.jpg");
    addSmallImg("img/chitietsanpham/oppo-f9-mau-do-2-org.jpg");
    addSmallImg("img/chitietsanpham/oppo-f9-mau-do-3-org.jpg");
    addSmallImg("img/products/huawei-mate-20-pro-green-600x600.jpg");
    addSmallImg("img/chitietsanpham/oppo-f9-mau-do-3-org.jpg");
    addSmallImg("img/products/huawei-mate-20-pro-green-600x600.jpg");

    // Khởi động thư viện hỗ trợ banner - chỉ chạy sau khi tạo xong hình nhỏ
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 5,
        center: true,
        smartSpeed: 450,
    });
}

// Chi tiết khuyến mãi
function getDetailPromo(sp) {
    switch (sp.promo.name) {
        case 'tragop':
            var span = `<span style="font-weight: bold"> lãi suất ` + sp.promo.value + `% </span>`;
            return `Khách hàng có thể mua trả góp sản phẩm với ` + span + `với thời hạn 6 tháng kể từ khi mua hàng.`;

        case 'giamgia':
            var span = `<span style="font-weight: bold">` + sp.promo.value + `</span>`;
            return `Khách hàng sẽ được giảm ` + span + `₫ khi tới mua trực tiếp tại cửa hàng`;

        case 'moiramat':
            return `Khách hàng sẽ được thử máy miễn phí tại cửa hàng. Có thể đổi trả lỗi trong vòng 2 tháng.`;

        case 'giareonline':
            var del = stringToNum(sp.price) - stringToNum(sp.promo.value);
            var span = `<span style="font-weight: bold">` + numToString(del) + `</span>`;
            return `Sản phẩm sẽ được giảm ` + span + `₫ khi mua hàng online bằng thẻ VPBank hoặc tin nhắn SMS`;

        default:
            var span = `<span style="font-weight: bold">61 xe Wave Alpha</span>`;
            return `Cơ hội trúng ` + span + ` khi trả góp Home Credit`;
    }
}

function addThongSo(ten, giatri) {
    return `<li>
                <p>` + ten + `</p>
                <div>` + giatri + `</div>
            </li>`;
}

// add hình
function addSmallImg(img) {
    var newDiv = `<div class='item'>
                        <a>
                            <img src=` + img + ` onclick="changepic(this.src)" />
                        </a>
                    </div>`;
    var banner = document.getElementsByClassName('owl-carousel')[0];
    banner.innerHTML += newDiv;
}

// đóng mở xem hình
function opencertain() {
    document.getElementById("overlaycertainimg").style.transform = "scale(1)";
}

function closecertain() {
    document.getElementById("overlaycertainimg").style.transform = "scale(0)";
}

// đổi hình trong chế độ xem hình
function changepic(src) {
    document.getElementById("bigimg").src = src;
}

// Thêm sản phẩm vào các khung sản phẩm
function addKhungSanPham(list_sanpham, tenKhung, color, ele) {
	// convert color to code
	var gradient = `background-image: linear-gradient(120deg, ` + color[0] + ` 0%, ` + color[1] + ` 50%, ` + color[0] + ` 100%);`
	var borderColor = `border-color: ` + color[0];
	var borderA = `	border-left: 2px solid ` + color[0] + `;
					border-right: 2px solid ` + color[0] + `;`;

	// mở tag
	var s = `<div class="khungSanPham" style="` + borderColor + `">
				<h3 class="tenKhung" style="` + gradient + `">* ` + tenKhung + ` *</h3>
				<div class="listSpTrongKhung flexContain">`;

	for (var i = 0; i < list_sanpham.length; i++) {
		s += addProduct(list_sanpham[i], null, true);
		// truyền vào 'true' để trả về chuỗi rồi gán vào s
	}

	// thêm khung vào contain-khung
	ele.innerHTML += s;
}

/// gợi ý sản phẩm
function suggestion(){
    // ====== Lay ra thong tin san pham hien tai ====== 
    const giaSanPhamHienTai = stringToNum(sanPhamHienTai.price);

    // ====== Tìm các sản phẩm tương tự theo tiêu chí ====== 
    const sanPhamTuongTu = list_products
    // Lọc sản phẩm trùng
    .filter((_) => _.masp !== sanPhamHienTai.masp)
    // Tính điểm cho từng sản phẩm
    .map(sanPham => {
        // Tiêu chí 1: giá sản phẩm ko lệch nhau quá 1 triệu
        const giaSanPham = stringToNum(sanPham.price);
        let giaTienGanGiong = Math.abs(giaSanPham - giaSanPhamHienTai) < 1000000;

        // Tiêu chí 2: các thông số kỹ thuật giống nhau
        let soLuongChiTietGiongNhau = 0;
        for(let key in sanPham.detail) {
            let value = sanPham.detail[key];
            let currentValue = sanPhamHienTai.detail[key];

            if(value == currentValue) soLuongChiTietGiongNhau++;
        }
        let giongThongSoKyThuat  = soLuongChiTietGiongNhau >= 3;

        // Tiêu chí 3: cùng hãng sản xuất 
        let cungHangSanXuat = sanPham.company ===  sanPhamHienTai.company

        // Tiêu chí 4: cùng loại khuyến mãi
        let cungLoaiKhuyenMai = sanPham.promo?.name === sanPhamHienTai.promo?.name;
        
        // Tiêu chí 5: có đánh giá, số sao
        let soDanhGia = Number.parseInt(sanPham.rateCount, 10)
        let soSao = Number.parseInt(sanPham.star, 10);

        // Tính điểm cho sản phẩm này (càng thoả nhiều tiêu chí điểm càng cao => càng nên gợi ý)
        let diem = 0;
        if(giaTienGanGiong) diem += 20;
        if(giongThongSoKyThuat) diem += soLuongChiTietGiongNhau;
        if(cungHangSanXuat) diem += 15;
        if(cungLoaiKhuyenMai) diem += 10;
        if(soDanhGia > 0) diem += (soDanhGia + '').length;
        diem += soSao;

        // Thêm thuộc tính diem vào dữ liệu trả về
        return {
            ...sanPham,
            diem: diem
        };
    })
    // Sắp xếp theo số điểm cao xuống thấp
    .sort((a,b) => b.diem - a.diem)
    // Lấy ra 10 sản phẩm đầu tiên
    .slice(0, 10);

    console.log(sanPhamTuongTu)

    // ====== Hiển thị 5 sản phẩm lên web ====== 
    if(sanPhamTuongTu.length) {
        let div = document.getElementById('goiYSanPham');
        addKhungSanPham(sanPhamTuongTu, 'Bạn có thể thích', ['#434aa8', '#ec1f1f'], div);
    }
}
		</script>
<div id="productNotFound" style="min-height: 50vh; text-align: center; margin: 50px; display: none;">
            <h1 style="color: red; margin-bottom: 10px;">Không tìm thấy sản phẩm</h1>
            <a href="index.html" style="text-decoration: underline;">Quay lại trang chủ</a>
        </div>

        <div class="chitietSanpham" style="margin-bottom: 100px">
            <h1>Điện thoại </h1>
            <div class="rating"></div>
            <div class="rowdetail group">
                <div class="picture">
                    <img src="" onclick="opencertain()">
                </div>
                <div class="price_sale">
                    <div class="area_price"> </div>
                    <div class="ship" style="display: none;">
                        <img src="img/chitietsanpham/clock-152067_960_720.png">
                        <div>NHẬN HÀNG TRONG 1 GIỜ</div>
                    </div>
                    <div class="area_promo">
                        <strong>khuyến mãi</strong>
                        <div class="promo">
                            <img src="img/chitietsanpham/icon-tick.png">
                            <div id="detailPromo"> </div>
                        </div>
                    </div>
                    <div class="policy">
                        <div>
                            <img src="img/chitietsanpham/box.png">
                            <p>Trong hộp có: Sạc, Tai nghe, Sách hướng dẫn, Cây lấy sim, Ốp lưng </p>
                        </div>
                        <div>
                            <img src="img/chitietsanpham/icon-baohanh.png">
                            <p>Bảo hành chính hãng 12 tháng.</p>
                        </div>
                        <div class="last">
                            <img src="img/chitietsanpham/1-1.jpg">
                            <p>1 đổi 1 trong 1 tháng nếu lỗi, đổi sản phẩm tại nhà trong 1 ngày.</p>
                        </div>
                    </div>
                    <div class="area_order">
                        <!-- nameProduct là biến toàn cục được khởi tạo giá trị trong phanTich_URL_chiTietSanPham -->
                        <a class="buy_now" onclick="themVaoGioHang(maProduct, nameProduct);">
                            <b><i class="fa fa-cart-plus"></i> Thêm vào giỏ hàng</b>
                            <p>Giao trong 1 giờ hoặc nhận tại cửa hàng</p>
                        </a>
                    </div>
                </div>
                <div class="info_product">
                    <h2>Thông số kỹ thuật</h2>
                    <ul class="info">
                    </ul>
                </div>
            </div>
            <div id="overlaycertainimg" class="overlaycertainimg">
                <div class="close" onclick="closecertain()">&times;</div>
                <div class="overlaycertainimg-content">
                    <img id="bigimg" class="bigimg" src="img/chitietsanpham/oppo-f9-red-2-400x460.png">
                    <div class="div_smallimg owl-carousel">
                     
                    </div>
                </div>
            </div>
        </div>

        <div id="goiYSanPham"></div>