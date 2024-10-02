@extends('layout.master')

@section('content')



<section class="main">
    <div class="container">
        <div class="main_space"></div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
			    <div class="room-title">
				   <h1 class="title-name"> @isset($roomTypeModel)
                    {{$roomTypeModel->RoomTypeName}}
                @endisset</h1>
				</div>
                
                <div class="block_text">
                    <div class="block_title">
                        <h2 class="block_title-name">Ảnh phòng</h2>
                    </div>
                    <div class="block_content">
                        <div class="image-roomSingle">
                            <div class="slider-roomSingle owl-carousel owl-theme">
                    <div class="item" data-hash="6051">
                        <img src="/images/img/Bedroom-Apartment-3.jpg" alt="No picture">
                    </div>                    <div class="item" data-hash="6052">
                        <img src="/images/img/Bedroom-Apartment-4.jpg" alt="No picture">
                    </div>                    <div class="item" data-hash="6053">
                        <img src="/images/img/Bedroom-Apartment-5.jpg" alt="No picture">
                    </div>                    <div class="item" data-hash="6054">
                        <img src="/images/img/Bedroom-Boos-Apartmen3t.jpg" alt="No picture">
                    </div>                    <div class="item" data-hash="6055">
                        <img src="/images/img/Bedroom-Boos-Apartment.jpg" alt="No picture">
                    </div>                    <div class="item" data-hash="6056">
                        <img src="/images/img/Senior-Deluxe-Room.jpg" alt="No picture">
                    </div>                            </div>
                            <div class="small_image_roomSingle">
                    <a class="button secondary url" href="#6051">
                        <img src="/images/img/Bedroom-Apartment-3.jpg" alt="No picture">
                    </a>                    <a class="button secondary url" href="#6052">
                        <img src="/images/img/Bedroom-Apartment-4.jpg" alt="No picture">
                    </a>                    <a class="button secondary url" href="#6053">
                        <img src="/images/img/Bedroom-Apartment-5.jpg" alt="No picture">
                    </a>                    <a class="button secondary url" href="#6054">
                        <img src="/images/img/Bedroom-Boos-Apartmen3t.jpg" alt="No picture">
                    </a>                    <a class="button secondary url" href="#6055">
                        <img src="/images/img/Bedroom-Boos-Apartment.jpg" alt="No picture">
                    </a>                    <a class="button secondary url" href="#6056">
                        <img src="/images/img/Senior-Deluxe-Room.jpg" alt="No picture">
                    </a>                            </div>

                        </div>
                    </div>
                </div>
				
				<div class="block_text">
                    <div class="block_title">
                        <h2 class="block_title-name">Chi tiết phòng</h2>
                    </div>
                    <div class="block_content">
                        <div style="text-align:justify">
<div style="text-align:justify">Ph&ograve;ng Senior được trang bị nội thất tiện nghi đầy đủ. C&aacute;c chi tiết trong ph&ograve;ng được thiết kế h&agrave;i h&ograve;a, nhẹ nh&agrave;ng. Đặc biệt, một số ph&ograve;ng được thiết kế th&ocirc;ng nhau rất ph&ugrave; hợp với c&aacute;c gia đ&igrave;nh đ&ocirc;ng th&agrave;nh vi&ecirc;n, tạo kh&ocirc;ng gian li&ecirc;n kết chung c&aacute;c th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh khi vui chơi, v&agrave; c&oacute; được kh&ocirc;ng gian ri&ecirc;ng khi nghỉ ngơi thư gi&atilde;n.</div>
</div>

                    </div>
                </div>


                <div class="nav_room-single">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">Tổng quan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">Đặc trưng</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane container active" id="home">
                            <div class="room-single-text ">
                                <div class="room-single-text "><strong>Diện t&iacute;ch ph&ograve;ng</strong>:30m<sup>2</sup>&nbsp;&nbsp;<br />
<strong>Loại giường:&nbsp;</strong>1 Giường đ&ocirc;i<br />
​<strong>Tiện &iacute;ch:</strong> 02 tr&agrave;, 02 c&agrave; ph&ecirc;, 02 nước lọc&nbsp; miễn ph&iacute; trong ph&ograve;ng</div>

<div class="room-single-text " style="margin-left: 40px;">&nbsp; &nbsp; &nbsp;Bữa s&aacute;ng h&agrave;ng ng&agrave;y</div>

                            </div>
                        </div>
                        <div class="tab-pane container fade" id="menu1">
                            <strong>Ch&iacute;nh s&aacute;ch trẻ em:&nbsp;</strong>Tối đa hai trẻ em dưới 6 tuổi được miễn ph&iacute; lưu tr&uacute; v&agrave; ăn s&aacute;ng (điều kiện &aacute;p dụng: lưu tr&uacute; c&ugrave;ng ph&ograve;ng với bố mẹ, kh&ocirc;ng k&ecirc; giường phụ).<br />
<strong>Giờ nhận ph&ograve;ng:&nbsp;</strong>Sau 14:00 PM<br />
<strong>Giờ trả ph&ograve;ng:&nbsp;</strong>Trước 12:00 AM<br />
<strong>Trả ph&ograve;ng muộn:&nbsp;</strong>Trước 18:00 PM: 50% tiền ph&ograve;ng
<div style="margin-left: 80px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Sau 18:00 PM: 100% tiền ph&ograve;ng</div>

<div style="margin-left: 120px;">&nbsp;</div>

                        </div>
                    </div>
                </div>

                <div class="block_text">
                    <div class="block_title">
                        <h2 class="block_title-name">Tiện ích</h2>
                    </div>
                    <div class="block_content">
                        <table border="0" cellpadding="5" cellspacing="5" style="width:100%">
	<tbody>
		<tr>
			<td style="width:33%"><img alt="" src="/images/img/wifi.jpg" style="height:35px; width:35px" />&nbsp;Miễn ph&iacute; Wifi</td>
			<td><img alt="" src="/images/img/an-sansg.jpg" style="height:35px; width:35px" />&nbsp;Miễn ph&iacute; ăn s&aacute;ng</td>
			<td><img alt="" src="/images/img/be-boi.jpg" style="height:35px; width:35px" />&nbsp;Hồ bơi</td>
		</tr>
		<tr>
			<td><img alt="" src="/images/img/Group-40.jpg" style="height:35px; width:35px" />&nbsp;B&atilde;i đỗ xe</td>
			<td><img alt="" src="/images/img/gym.jpg" style="height:35px; width:35px" />&nbsp;Gym</td>
			<td style="width:33%"><img alt="" src="/images/img/kets.jpg" style="height:35px; width:35px" />&nbsp;K&eacute;t sắt an to&agrave;n</td>
		</tr>
		<tr>
			<td><img alt="" src="/images/img/Untitled-1.jpg" style="height:35px; width:35px" />&nbsp;B&agrave;n l&agrave;m việc</td>
			<td><img alt="" src="/images/img/spa.jpg" style="height:35px; width:35px" />&nbsp;Spa</td>
			<td><img alt="" src="/images/img/ico_booking.jpg" style="height:35px; width:35px" />&nbsp;Tivi</td>
		</tr>
	</tbody>
</table>
<img alt="" src="/images/img/black-wifi-icon-hi.jpg" style="width:30px" /><br />
<br />
<br />
<br />
<br />
<br />
<br />
&nbsp;
                    </div>
                </div>

                

                

                <div class="main_space-mg30"></div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="reservation">
                    <div class="reservation_title">
                        <h5 class="reservation_title-name">
                            Thông tin đặt phòng
                        </h5>
                    </div>
                    <div class="reservation_form">
                        <div class="res_checkin">
                            <div class="res_checkin">
                                <form action="/phong" id="book-room" method="get">
                                    <input type="text" name="ID" value="13" hidden />

                                    <label for="check_in">
                                        Ngày nhận phòng
                                    </label>
                                    <div class="form-control">
                                        <input type="text" name="CheckIn" class="res_checkin-input">
                                        <i class="far fa-calendar-minus"></i>
                                    </div>

                                    <label for="check_out">
                                        Ngày trả phòng
                                    </label>
                                    <div class="form-control">
                                        <input type="text" name="CheckOut" class="res_checkout-input">
                                        <i class="far fa-calendar-minus"></i>
                                    </div>

                                    <label for="Adult">Người lớn</label>
                                    <div class="Adult form-control">
                                        <select name="Adult" id="Adult">
                                            <option value="adult">-số lượng-</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>

                                    <label for="children">Trẻ em</label>
                                    <div class="children form-control">
                                        <select name="Child" id="children">
                                            <option value="children">-số lượng-</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>

                                    <button class="button_sb">Tìm kiếm</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    

                    <div class="reservation_hotel">
                        <div class="reservation_title">
                            <h5 class="reservation_title-name">
                                Tại sao lại chọn Hotel Luxe
                            </h5>
                        </div>
                        <div class="hotel_content">
                            <ul>
                                <li>
                                    <i class="fa fa-gavel"></i> Tính minh bạch - Không có phí ẩn
                                </li>
                                <li>
                                    <i class="fa fa-plane"></i> Tính minh bạch - Không có phí ẩn
                                </li>
                                <li>
                                    <i class="fas fa-dollar-sign"></i> Giá tiền hợp lý
                                </li>
                                <li>
                                    <i class="fa fa-bed"></i> Phòng sang trọng cho bạn thoải mái
                                </li>
                                <li>
                                    <i class="fa fa-user-secret"></i> Hoàn tiền dễ dàng khi đặt phòng trực tuyến
                                </li>
                                <li>
                                    <i class="fab fa-tripadvisor"></i> Khách sạn từng đoạt giải thưởng trên TripAdviosr
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section>
    <div class="other_rooms">
<div class="main_lodging">
    <div class="container lodging_container">
        <div class="lodging_title">
            <h2 class="title" style="color:#111111;font-weight: 400;">Các phòng khác</h2>
        </div>
    </div>
    <div class="main_space-mg30"></div>
    <div class="carousel_lod">
        <div class="container car_container">
            <div class="carousel_lod--room owl-carousel">

<div class="item">
    <div class="col-lg-12 col-md-12">
        <a href="/phong-nghi/2014/phong-deluxe">
            <div class="item_content">
                <div class="item_img">
                    <img src="/images/img/Deluxe-Room-1.jpg" alt="phong-deluxe">
                </div>
                <div class="item_text">
                    <h3>Ph&#242;ng Deluxe</h3>
                    <div class="item_text-price">
                        Starting from 900,000/night
                    </div>
                </div>
            </div>
        </a>
    </div>
</div><div class="item">
    <div class="col-lg-12 col-md-12">
        <a href="/phong-nghi/12/phong-triple">
            <div class="item_content">
                <div class="item_img">
                    <img src="/images/img/Triple-Room-with-Balcony.jpg" alt="phong-triple">
                </div>
                <div class="item_text">
                    <h3>Ph&#242;ng Triple</h3>
                    <div class="item_text-price">
                        Starting from 1,500,000/night
                    </div>
                </div>
            </div>
        </a>
    </div>
</div><div class="item">
    <div class="col-lg-12 col-md-12">
        <a href="/phong-nghi/1013/phong-connecting">
            <div class="item_content">
                <div class="item_img">
                    <img src="/images/img/Bedroom-Apartment-4.jpg" alt="phong-connecting">
                </div>
                <div class="item_text">
                    <h3>Ph&#242;ng Connecting</h3>
                    <div class="item_text-price">
                        Starting from 1,650,000/night
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>            </div>
        </div>
    </div>
</div>    </div>
</section>

<div id="wraploadding">
    <div id="imgloadding"><img src="/images/img/ajax-loader.gif" alt="loading" /></div>
</div>




   

    <!-- Vendor JS Files -->


    <!-- <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="Dp8TmuKp"></script>
    <script src="/Content/Js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript " src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js "></script>
    <script src="/Plugins/bootstrap-4.5.2/js/bootstrap.min.js"></script>
    <script src="/Plugins/owlcarousel/owl.carousel.min.js"></script>
    <script src="/Plugins/slick/slick.min.js"></script>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js "></script>
    <script src="/Plugins/daterangepicker/daterangepicker.js"></script>
    <script src="/Plugins/validation1.19.3/jquery.validate.min.js"></script>
    <script src="/Plugins/rating/rating.js"></script>

    
    <script src="/Content/Js/main.js"></script> -->

    @endsection

