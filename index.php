<?php
  include("db.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./index.css" />
    <link rel="website icon" type="png" href="./images/logo.png" />
    <title>Shop nick Anh Pháp</title>
  </head>
  <body>
    <div class="header">
      <div class="logo"><img src="./images/logo.png" alt="" /></div>
      <div class="menu">
        <ul>
          <li><a href="#">NẠP THẺ</a></li>
          <li><a href="#">NẠP ATM/MOMO</a></li>
          <li><a href="#">BÀI VIẾT</a></li>
          <li><a href="#">ĐÁNH GIÁ</a></li>
        </ul>
      </div>
      <div class="login">
        <a href="./signup.php"><button>ĐĂNG NHẬP</button></a>
      </div>
    </div>
    <div class="container">
      <div class="banner-text">
        <div class="text-1">DANH MỤC:</div>
        <div class="text-2">NICK LIÊN QUÂN SALE</div>
        <div class="text-3">
          SHOP CHUYÊN MUA BÁN ACC LIÊN QUÂN UY TÍN 100% TRẮNG THÔNG TIN
        </div>
        <div class="text-4">
          *THANH TOÁN THẺ CÀO <a href="#">NẠP THẺ</a> - CHUYỂN KHOẢN/MOMO
          <a href="#">NẠP NGAY</a>
        </div>
        <div class="text-5">
          Lưu Ý: Nếu Acc Mua Tại Shop Gặp Lỗi Thì Hãy Liên Hệ Để Được
          <a href="#">HỖ TRỢ NGAY</a>
        </div>
        <div class="text-6">BỘ LỌC TÌM KIẾM</div>
      </div>
      <div class="banner-search">
        <div class="search">
          <input type="text" placeholder="ID - Ví dụ: 00001" />
        </div>
        <div class="search">
          <select>
            <option value="">-- Giá tiền --</option>
            <option value="">Dưới 50k</option>
            <option value="">Từ 50k - 500k</option>
            <option value="">Trên 500k</option>
          </select>
        </div>
        <div class="search loc"><button>Lọc</button></div>
        <div class="search xoa"><button>Xóa</button></div>
      </div>
      <div class="banner-nick">
        <div class="nick">
          <div class="image-nick">
            <a href="#"><img src="./images/image-1.jpg" alt="" /></a>
          </div>
          <div class="infor-nick">
            <ul>
              <li>
                <a href=""> Cam Kết 100% Trắng Thông Tin, Như Ảnh 100% :</a>
              </li>
              <li><a href="#"> Số Tướng: 65</a></li>
              <li><a href="#"> Số Trang Phục: 48</a></li>
              <li><a href="#"> Rank Hiện Tại: CT</a></li>
            </ul>
          </div>
          <div class="gia-nick"><a href="#">120.000đ</a></div>
          <div class="more"><a href="#">XEM CHI TIẾT</a></div>
        </div>
        <div class="nick">
          <div class="image-nick">
            <a href="#"><img src="./images/image-1.jpg" alt="" /></a>
          </div>
          <div class="infor-nick">
            <ul>
              <li>
                <a href=""> Cam Kết 100% Trắng Thông Tin, Như Ảnh 100% :</a>
              </li>
              <li><a href="#"> Số Tướng: 65</a></li>
              <li><a href="#"> Số Trang Phục: 48</a></li>
              <li><a href="#"> Rank Hiện Tại: CT</a></li>
            </ul>
          </div>
          <div class="gia-nick"><a href="#">120.000đ</a></div>
          <div class="more"><a href="#">XEM CHI TIẾT</a></div>
        </div>
        <div class="nick">
          <div class="image-nick">
            <a href="#"><img src="./images/image-1.jpg" alt="" /></a>
          </div>
          <div class="infor-nick">
            <ul>
              <li>
                <a href=""> Cam Kết 100% Trắng Thông Tin, Như Ảnh 100% :</a>
              </li>
              <li><a href="#"> Số Tướng: 65</a></li>
              <li><a href="#"> Số Trang Phục: 48</a></li>
              <li><a href="#"> Rank Hiện Tại: CT</a></li>
            </ul>
          </div>
          <div class="gia-nick"><a href="#">120.000đ</a></div>
          <div class="more"><a href="#">XEM CHI TIẾT</a></div>
        </div>
        <div class="nick">
          <div class="image-nick">
            <a href="#"><img src="./images/image-1.jpg" alt="" /></a>
          </div>
          <div class="infor-nick">
            <ul>
              <li>
                <a href=""> Cam Kết 100% Trắng Thông Tin, Như Ảnh 100% :</a>
              </li>
              <li><a href="#"> Số Tướng: 65</a></li>
              <li><a href="#"> Số Trang Phục: 48</a></li>
              <li><a href="#"> Rank Hiện Tại: CT</a></li>
            </ul>
          </div>
          <div class="gia-nick"><a href="#">120.000đ</a></div>
          <div class="more"><a href="#">XEM CHI TIẾT</a></div>
        </div>
        <div class="nick">
          <div class="image-nick">
            <a href="#"><img src="./images/image-1.jpg" alt="" /></a>
          </div>
          <div class="infor-nick">
            <ul>
              <li>
                <a href=""> Cam Kết 100% Trắng Thông Tin, Như Ảnh 100% :</a>
              </li>
              <li><a href="#"> Số Tướng: 65</a></li>
              <li><a href="#"> Số Trang Phục: 48</a></li>
              <li><a href="#"> Rank Hiện Tại: CT</a></li>
            </ul>
          </div>
          <div class="gia-nick"><a href="#">120.000đ</a></div>
          <div class="more"><a href="#">XEM CHI TIẾT</a></div>
        </div>
        <div class="nick">
          <div class="image-nick">
            <a href="#"><img src="./images/image-1.jpg" alt="" /></a>
          </div>
          <div class="infor-nick">
            <ul>
              <li>
                <a href=""> Cam Kết 100% Trắng Thông Tin, Như Ảnh 100% :</a>
              </li>
              <li><a href="#"> Số Tướng: 65</a></li>
              <li><a href="#"> Số Trang Phục: 48</a></li>
              <li><a href="#"> Rank Hiện Tại: CT</a></li>
            </ul>
          </div>
          <div class="gia-nick"><a href="#">120.000đ</a></div>
          <div class="more"><a href="#">XEM CHI TIẾT</a></div>
        </div>
        <div class="nick">
          <div class="image-nick">
            <a href="#"><img src="./images/image-1.jpg" alt="" /></a>
          </div>
          <div class="infor-nick">
            <ul>
              <li>
                <a href=""> Cam Kết 100% Trắng Thông Tin, Như Ảnh 100% :</a>
              </li>
              <li><a href="#"> Số Tướng: 65</a></li>
              <li><a href="#"> Số Trang Phục: 48</a></li>
              <li><a href="#"> Rank Hiện Tại: CT</a></li>
            </ul>
          </div>
          <div class="gia-nick"><a href="#">120.000đ</a></div>
          <div class="more"><a href="#">XEM CHI TIẾT</a></div>
        </div>
        <div class="nick">
          <div class="image-nick">
            <a href="#"><img src="./images/image-1.jpg" alt="" /></a>
          </div>
          <div class="infor-nick">
            <ul>
              <li>
                <a href=""> Cam Kết 100% Trắng Thông Tin, Như Ảnh 100% :</a>
              </li>
              <li><a href="#"> Số Tướng: 65</a></li>
              <li><a href="#"> Số Trang Phục: 48</a></li>
              <li><a href="#"> Rank Hiện Tại: CT</a></li>
            </ul>
          </div>
          <div class="gia-nick"><a href="#">120.000đ</a></div>
          <div class="more"><a href="#">XEM CHI TIẾT</a></div>
        </div>
        <div class="nick">
          <div class="image-nick">
            <a href="#"><img src="./images/image-1.jpg" alt="" /></a>
          </div>
          <div class="infor-nick">
            <ul>
              <li>
                <a href=""> Cam Kết 100% Trắng Thông Tin, Như Ảnh 100% :</a>
              </li>
              <li><a href="#"> Số Tướng: 65</a></li>
              <li><a href="#"> Số Trang Phục: 48</a></li>
              <li><a href="#"> Rank Hiện Tại: CT</a></li>
            </ul>
          </div>
          <div class="gia-nick"><a href="#">120.000đ</a></div>
          <div class="more"><a href="#">XEM CHI TIẾT</a></div>
        </div>
        <div class="nick">
          <div class="image-nick">
            <a href="#"><img src="./images/image-1.jpg" alt="" /></a>
          </div>
          <div class="infor-nick">
            <ul>
              <li>
                <a href=""> Cam Kết 100% Trắng Thông Tin, Như Ảnh 100% :</a>
              </li>
              <li><a href="#"> Số Tướng: 65</a></li>
              <li><a href="#"> Số Trang Phục: 48</a></li>
              <li><a href="#"> Rank Hiện Tại: CT</a></li>
            </ul>
          </div>
          <div class="gia-nick"><a href="#">120.000đ</a></div>
          <div class="more"><a href="#">XEM CHI TIẾT</a></div>
        </div>
        <div class="nick">
          <div class="image-nick">
            <a href="#"><img src="./images/image-1.jpg" alt="" /></a>
          </div>
          <div class="infor-nick">
            <ul>
              <li>
                <a href=""> Cam Kết 100% Trắng Thông Tin, Như Ảnh 100% :</a>
              </li>
              <li><a href="#"> Số Tướng: 65</a></li>
              <li><a href="#"> Số Trang Phục: 48</a></li>
              <li><a href="#"> Rank Hiện Tại: CT</a></li>
            </ul>
          </div>
          <div class="gia-nick"><a href="#">120.000đ</a></div>
          <div class="more"><a href="#">XEM CHI TIẾT</a></div>
        </div>
        <div class="nick">
          <div class="image-nick">
            <a href="#"><img src="./images/image-1.jpg" alt="" /></a>
          </div>
          <div class="infor-nick">
            <ul>
              <li>
                <a href=""> Cam Kết 100% Trắng Thông Tin, Như Ảnh 100% :</a>
              </li>
              <li><a href="#"> Số Tướng: 65</a></li>
              <li><a href="#"> Số Trang Phục: 48</a></li>
              <li><a href="#"> Rank Hiện Tại: CT</a></li>
            </ul>
          </div>
          <div class="gia-nick"><a href="#">120.000đ</a></div>
          <div class="more"><a href="#">XEM CHI TIẾT</a></div>
        </div>
        <div class="nick">
          <div class="image-nick">
            <a href="#"><img src="./images/image-1.jpg" alt="" /></a>
          </div>
          <div class="infor-nick">
            <ul>
              <li>
                <a href=""> Cam Kết 100% Trắng Thông Tin, Như Ảnh 100% :</a>
              </li>
              <li><a href="#"> Số Tướng: 65</a></li>
              <li><a href="#"> Số Trang Phục: 48</a></li>
              <li><a href="#"> Rank Hiện Tại: CT</a></li>
            </ul>
          </div>
          <div class="gia-nick"><a href="#">120.000đ</a></div>
          <div class="more"><a href="#">XEM CHI TIẾT</a></div>
        </div>
        <div class="nick">
          <div class="image-nick">
            <a href="#"><img src="./images/image-1.jpg" alt="" /></a>
          </div>
          <div class="infor-nick">
            <ul>
              <li>
                <a href=""> Cam Kết 100% Trắng Thông Tin, Như Ảnh 100% :</a>
              </li>
              <li><a href="#"> Số Tướng: 65</a></li>
              <li><a href="#"> Số Trang Phục: 48</a></li>
              <li><a href="#"> Rank Hiện Tại: CT</a></li>
            </ul>
          </div>
          <div class="gia-nick"><a href="#">120.000đ</a></div>
          <div class="more"><a href="#">XEM CHI TIẾT</a></div>
        </div>
        <div class="nick">
          <div class="image-nick">
            <a href="#"><img src="./images/image-1.jpg" alt="" /></a>
          </div>
          <div class="infor-nick">
            <ul>
              <li>
                <a href=""> Cam Kết 100% Trắng Thông Tin, Như Ảnh 100% :</a>
              </li>
              <li><a href="#"> Số Tướng: 65</a></li>
              <li><a href="#"> Số Trang Phục: 48</a></li>
              <li><a href="#"> Rank Hiện Tại: CT</a></li>
            </ul>
          </div>
          <div class="gia-nick"><a href="#">120.000đ</a></div>
          <div class="more"><a href="#">XEM CHI TIẾT</a></div>
        </div>
        <div class="nick">
          <div class="image-nick">
            <a href="#"><img src="./images/image-1.jpg" alt="" /></a>
          </div>
          <div class="infor-nick">
            <ul>
              <li>
                <a href=""> Cam Kết 100% Trắng Thông Tin, Như Ảnh 100% :</a>
              </li>
              <li><a href="#"> Số Tướng: 65</a></li>
              <li><a href="#"> Số Trang Phục: 48</a></li>
              <li><a href="#"> Rank Hiện Tại: CT</a></li>
            </ul>
          </div>
          <div class="gia-nick"><a href="#">120.000đ</a></div>
          <div class="more"><a href="#">XEM CHI TIẾT</a></div>
        </div>
      </div>
      <div class="next-web">
        <div class="button">
          <a href="#"><button class="next-1">1</button></a>
          <button class="next-2">2</button>
          <button class="next-3">3</button>
          <button class="next-4">></button>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="logo-footer">
        <div class="logo-1">
          anhphasp.com Acc Roblox Uy Tín Giá Rẻ Chất Lượng.
        </div>
        <div class="logo-2">
          Privacy Policy | Terms of Service | Delete user data
        </div>
      </div>
      <div class="ve-chung-toi">
        <div class="ve-chung-toi-1">VỀ CHÚNG TÔI</div>
        <div class="ve-chung-toi-2">
          Chúng tôi luôn lấy uy tín đặt trên hàng đầu đối với khách hàng, hy
          vọng chúng tôi sẽ được phục vụ các bạn. Cảm ơn!
        </div>
        <div class="ve-chung-toi-3">Thời gian hỗ trợ:</div>
        <div class="ve-chung-toi-4">
          Sáng: 8h00 -> 11h30 | Chiều: 13h00 -> 19h00
        </div>
      </div>
      <div class="kho-game">
        <div class="kho-game-1">anhphasp.com</div>
        <div class="kho-game-2">HỆ THỐNG BÁN ACC TỰ ĐỘNG</div>
        <div class="kho-game3">ĐẢM BẢO UY TÍN VÀ CHẤT LƯỢNG.</div>
      </div>
    </div>
  </body>
</html>
