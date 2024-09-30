@extends('layout.master')

@section('content')

<section class="main">
    <div class="main_space"></div>
    <div class="container row_container">
        <div class="room_row">
            <form action="Booking/SendBooking"  id="check-room" method="post" class="row">
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="row_item" style="padding:10px">
                        <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-sx-12">
                                    <div class="row_item-img">
                                        <img src="/images/img/Triple-Room-with-Balcony.jpg" alt="No picture">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-12 col-sx-12 border-right" style="">
                                    <div class="booking_content" style="padding:0">
                                        <h3 class="booking_title">
                                            <a href="/phong-nghi/12/phong-triple">
                                                Ph&#242;ng Triple
                                            </a>
                                        </h3>
                                        <div class="user">
                                            <div class="user_item">
                                                <span>
                                                    <i class="fa fa-th-large"></i>
                                                </span>
                                                <span>3 Capacity</span>
                                            </div>
                                            <div class="user_item">
                                                <span>
                                                    <i class="fas fa-user"></i>
                                                </span>
                                                <span>1 Children</span>
                                            </div>
                                        </div>
                                        <div class="booking_text">
                                            <div style="text-align:justify">Ph&ograve;ng Triple c&oacute; ban c&ocirc;ng với thiết kế hiện đại, được trang bị nội thất tiện nghi. C&aacute;c chi tiết trong ph&ograve;ng được thiết kế h&agrave;i h&ograve;a, nhẹ nh&agrave;ng gi&uacute;p đưa bạn về trạng th&aacute;i thư gi&atilde;n tuyệt đối. Ph&ograve;ng được lắp đặt cửa sổ k&iacute;nh gi&uacute;p qu&yacute; kh&aacute;ch ngắm nh&igrave;n to&agrave;n cảnh khu nghỉ dưỡng xinh đẹp.<br />
&nbsp;</div>

                                        </div>
                                        <select class="form-control" name="" id="room-number-12">
                                            
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            
                                        </select>
                                        <div class="booking_icon">
                                            <a href="#" title="wifi">
                                                <i class="fa fa-wifi"></i>
                                            </a>
                                            <a href="#" title="television">
                                                <i class="fas fa-tv"></i>
                                            </a>
                                            <a href="#" title="Local NewsPaper">
                                                <i class="fas fa-newspaper"></i>
                                            </a>
                                            <a href="#" title="bathtub">
                                                <i class="fa fa-bath"></i>
                                            </a>
                                            <a href="#" title="Room Breakfast">
                                                <i class="fas fa-utensils"></i>
                                            </a>
                                            <a href="#" title="Spa">
                                                <i class="fa fa-bed"></i>
                                            </a>
                                            <a href="#" title="Wake Up Call">
                                                <i class="fa fa-phone"></i>
                                            </a>
                                            <a href="#" title="Mini Bar">
                                                <i class="fa fa-beer"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 col-md-12 col-sm-12 col-sx-12" style="display: flex;align-items: center;justify-content: center;">
                                    <div class="main_booking-price">
                                        <div class="booking_price-label">Price</div>
                                        <div class="booking_price">1,500,000</div>
                                        <div class="booking_select">
                                            <a href="javascript:;" class="button_booking" id="btn-select-12" onclick="SelectRoom(12)" style="color:#000;font-size:15px;text-decoration:underline">Select Room</a>
                                        </div>
                                    </div>
                                </div>
                           



                            
                        </div>
                    </div>
                    <div class="row_item" style="padding:10px">
                        <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-sx-12">
                                    <div class="row_item-img">
                                        <img src="/images/img/Bedroom-Boos-Apartmen3t.jpg" alt="No picture">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-12 col-sx-12 border-right" style="">
                                    <div class="booking_content" style="padding:0">
                                        <h3 class="booking_title">
                                            <a href="/phong-nghi/13/phong-senior">
                                                Ph&#242;ng Senior
                                            </a>
                                        </h3>
                                        <div class="user">
                                            <div class="user_item">
                                                <span>
                                                    <i class="fa fa-th-large"></i>
                                                </span>
                                                <span>2 Capacity</span>
                                            </div>
                                            <div class="user_item">
                                                <span>
                                                    <i class="fas fa-user"></i>
                                                </span>
                                                <span>1 Children</span>
                                            </div>
                                        </div>
                                        <div class="booking_text">
                                            <div style="text-align:justify">
<div style="text-align:justify">Ph&ograve;ng Senior được trang bị nội thất tiện nghi đầy đủ. C&aacute;c chi tiết trong ph&ograve;ng được thiết kế h&agrave;i h&ograve;a, nhẹ nh&agrave;ng. Đặc biệt, một số ph&ograve;ng được thiết kế th&ocirc;ng nhau rất ph&ugrave; hợp với c&aacute;c gia đ&igrave;nh đ&ocirc;ng th&agrave;nh vi&ecirc;n, tạo kh&ocirc;ng gian li&ecirc;n kết chung c&aacute;c th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh khi vui chơi, v&agrave; c&oacute; được kh&ocirc;ng gian ri&ecirc;ng khi nghỉ ngơi thư gi&atilde;n.</div>
</div>

                                        </div>
                                        <select class="form-control" name="" id="room-number-13">
                                            
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            
                                        </select>
                                        <div class="booking_icon">
                                            <a href="#" title="wifi">
                                                <i class="fa fa-wifi"></i>
                                            </a>
                                            <a href="#" title="television">
                                                <i class="fas fa-tv"></i>
                                            </a>
                                            <a href="#" title="Local NewsPaper">
                                                <i class="fas fa-newspaper"></i>
                                            </a>
                                            <a href="#" title="bathtub">
                                                <i class="fa fa-bath"></i>
                                            </a>
                                            <a href="#" title="Room Breakfast">
                                                <i class="fas fa-utensils"></i>
                                            </a>
                                            <a href="#" title="Spa">
                                                <i class="fa fa-bed"></i>
                                            </a>
                                            <a href="#" title="Wake Up Call">
                                                <i class="fa fa-phone"></i>
                                            </a>
                                            <a href="#" title="Mini Bar">
                                                <i class="fa fa-beer"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 col-md-12 col-sm-12 col-sx-12" style="display: flex;align-items: center;justify-content: center;">
                                    <div class="main_booking-price">
                                        <div class="booking_price-label">Price</div>
                                        <div class="booking_price">1,100,000</div>
                                        <div class="booking_select">
                                            <a href="javascript:;" class="button_booking" id="btn-select-13" onclick="SelectRoom(13)" style="color:#000;font-size:15px;text-decoration:underline">Select Room</a>
                                        </div>
                                    </div>
                                </div>
                           



                            
                        </div>
                    </div>
                    <div class="row_item" style="padding:10px">
                        <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-sx-12">
                                    <div class="row_item-img">
                                        <img src="/images/img/Bedroom-Apartment-4.jpg" alt="No picture">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-12 col-sx-12 border-right" style="">
                                    <div class="booking_content" style="padding:0">
                                        <h3 class="booking_title">
                                            <a href="/phong-nghi/1013/phong-connecting">
                                                Ph&#242;ng Connecting
                                            </a>
                                        </h3>
                                        <div class="user">
                                            <div class="user_item">
                                                <span>
                                                    <i class="fa fa-th-large"></i>
                                                </span>
                                                <span>2 Capacity</span>
                                            </div>
                                            <div class="user_item">
                                                <span>
                                                    <i class="fas fa-user"></i>
                                                </span>
                                                <span>1 Children</span>
                                            </div>
                                        </div>
                                        <div class="booking_text">
                                            <div style="text-align:justify">Ph&ograve;ng Connecting được trang bị nội thất tiện nghi đầy đủ. C&aacute;c chi tiết trong ph&ograve;ng được thiết kế h&agrave;i h&ograve;a, nhẹ nh&agrave;ng. Đặc biệt, một số ph&ograve;ng được thiết kế th&ocirc;ng nhau rất ph&ugrave; hợp với c&aacute;c gia đ&igrave;nh đ&ocirc;ng th&agrave;nh vi&ecirc;n, tạo kh&ocirc;ng gian li&ecirc;n kết chung c&aacute;c th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh khi vui chơi, v&agrave; c&oacute; được kh&ocirc;ng gian ri&ecirc;ng khi nghỉ ngơi thư gi&atilde;n.</div>

                                        </div>
                                        <select class="form-control" name="" id="room-number-1013">
                                            
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            
                                        </select>
                                        <div class="booking_icon">
                                            <a href="#" title="wifi">
                                                <i class="fa fa-wifi"></i>
                                            </a>
                                            <a href="#" title="television">
                                                <i class="fas fa-tv"></i>
                                            </a>
                                            <a href="#" title="Local NewsPaper">
                                                <i class="fas fa-newspaper"></i>
                                            </a>
                                            <a href="#" title="bathtub">
                                                <i class="fa fa-bath"></i>
                                            </a>
                                            <a href="#" title="Room Breakfast">
                                                <i class="fas fa-utensils"></i>
                                            </a>
                                            <a href="#" title="Spa">
                                                <i class="fa fa-bed"></i>
                                            </a>
                                            <a href="#" title="Wake Up Call">
                                                <i class="fa fa-phone"></i>
                                            </a>
                                            <a href="#" title="Mini Bar">
                                                <i class="fa fa-beer"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 col-md-12 col-sm-12 col-sx-12" style="display: flex;align-items: center;justify-content: center;">
                                    <div class="main_booking-price">
                                        <div class="booking_price-label">Price</div>
                                        <div class="booking_price">1,650,000</div>
                                        <div class="booking_select">
                                            <a href="javascript:;" class="button_booking" id="btn-select-1013" onclick="SelectRoom(1013)" style="color:#000;font-size:15px;text-decoration:underline">Select Room</a>
                                        </div>
                                    </div>
                                </div>
                           



                            
                        </div>
                    </div>
                    <div class="row_item" style="padding:10px">
                        <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-sx-12">
                                    <div class="row_item-img">
                                        <img src="/images/img/Deluxe-Room-1.jpg" alt="No picture">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-12 col-sx-12 border-right" style="">
                                    <div class="booking_content" style="padding:0">
                                        <h3 class="booking_title">
                                            <a href="/phong-nghi/2014/phong-deluxe">
                                                Ph&#242;ng Deluxe
                                            </a>
                                        </h3>
                                        <div class="user">
                                            <div class="user_item">
                                                <span>
                                                    <i class="fa fa-th-large"></i>
                                                </span>
                                                <span>2 Capacity</span>
                                            </div>
                                            <div class="user_item">
                                                <span>
                                                    <i class="fas fa-user"></i>
                                                </span>
                                                <span>0 Children</span>
                                            </div>
                                        </div>
                                        <div class="booking_text">
                                            <div style="text-align:justify">C&aacute;c ph&ograve;ng Deluxe được thiết kế h&agrave;i h&ograve;a, tinh tế v&agrave; tiện nghi. Ph&ograve;ng được trang bị hai giường đ&ocirc;i lớn c&ugrave;ng với bộ salon cao cấp v&agrave; khu vực b&agrave;n l&agrave;m việc rộng r&atilde;i, b&agrave;n trang điểm nhẹ nh&agrave;ng, sang trọng. Ph&ograve;ng tắm được trang bị&nbsp; bồn tắm nằm. Tất cả c&aacute;c ph&ograve;ng đều c&oacute; cửa sổ lớn. Từ đ&acirc;y bạn c&oacute; thể tận hưởng trọn vẹn khung cảnh khu nghỉ dưỡng rực rỡ sắc m&agrave;u.</div>

                                        </div>
                                        <select class="form-control" name="" id="room-number-2014">
                                            
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            
                                        </select>
                                        <div class="booking_icon">
                                            <a href="#" title="wifi">
                                                <i class="fa fa-wifi"></i>
                                            </a>
                                            <a href="#" title="television">
                                                <i class="fas fa-tv"></i>
                                            </a>
                                            <a href="#" title="Local NewsPaper">
                                                <i class="fas fa-newspaper"></i>
                                            </a>
                                            <a href="#" title="bathtub">
                                                <i class="fa fa-bath"></i>
                                            </a>
                                            <a href="#" title="Room Breakfast">
                                                <i class="fas fa-utensils"></i>
                                            </a>
                                            <a href="#" title="Spa">
                                                <i class="fa fa-bed"></i>
                                            </a>
                                            <a href="#" title="Wake Up Call">
                                                <i class="fa fa-phone"></i>
                                            </a>
                                            <a href="#" title="Mini Bar">
                                                <i class="fa fa-beer"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 col-md-12 col-sm-12 col-sx-12" style="display: flex;align-items: center;justify-content: center;">
                                    <div class="main_booking-price">
                                        <div class="booking_price-label">Price</div>
                                        <div class="booking_price">900,000</div>
                                        <div class="booking_select">
                                            <a href="javascript:;" class="button_booking" id="btn-select-2014" onclick="SelectRoom(2014)" style="color:#000;font-size:15px;text-decoration:underline">Select Room</a>
                                        </div>
                                    </div>
                                </div>
                           



                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">

                    <div class="reservation">
                        <div class="reservation_title">
                            <h5 class="reservation_title-name">
                                Đặt phòng khách sạn
                            </h5>
                        </div>
                        <div class="reservation_form">
                            <div class="res_checkin">
                                <input type="text" name="ID" value="1" hidden="">
                                <input type="hidden" name="ListRoomID" id="ListRoomID" value="" />

                                <div class="form-group">
                                    <label for="FullName">Tên</label>
                                    <input type="text" name="FullName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Address">Địa chỉ</label>

                                    <input type="text" name="Address" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Phone">Số điện thoại</label>

                                    <input type="text" name="Phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>

                                    <input type="text" name="Email" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="check_in">Ngày đến</label>
                                        <input type="text" id="start" name="CheckIn" class="form-control res_checkin-input">
                                    <i class="far fa-calendar-minus"></i>
                                </div>
                                <div class="form-group">
                                    <label for="check_out">Ngày đi</label>
                                        <input type="text" id="end" name="CheckOut" class="form-control res_checkout-input">

                                    <i class="far fa-calendar-minus"></i>
                                </div>

                                <div class="form-group">
                                    <label for="Adult"> Người lớn</label>
                                    <select class="form-control" name="Adult" id="Adult">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                                <input name="PriceNet" value="0" type="hidden"/>
                                <div class="form-group">
                                    <label for="children">Trẻ em</label>
                                    <select class="form-control" name="Child" id="Child">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="reservation_hotel">
                        <div class="reservation_title">
                            <h5 class="reservation_title-name">
                                Giỏ hàng
                            </h5>
                        </div>
                        <div class="hotel_content">
                            <p class="hb_mini_cart_empty">Chưa có phòng được chọn.</p>
                            <div class="list-room">
                            </div>
                            <div class="cart_bottom">
                                <button type="submit" class="hb_button hb_view_cart">Check Availability</button>
                            </div>
                        </div>
                    </div>
           

            <div class="reservation_hotel">
                <div class="reservation_title">
                    <h5 class="reservation_title-name">
                        Tại sao chọn MINH PHÁT
                    </h5>
                </div>
                <div class="hotel_content">
                    <ul>
                        <li>
                            <i class="fa fa-gavel"></i> Transparency – No hidden fees
                        </li>
                        <li>
                            <i class="fa fa-plane"></i> Complementary Airport pickup
                        </li>
                        <li>
                            <i class="fas fa-dollar-sign"></i> Value for money
                        </li>
                        <li>
                            <i class="fa fa-bed"></i> Luxurious rooms for your comfort
                        </li>
                        <li>
                            <i class="fa fa-user-secret"></i> Easy refund on online booking
                        </li>
                        <li>
                            <i class="fab fa-tripadvisor"></i> Award-winning hotel on TripAdviosr
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>


</section>


    <!-- Vendor JS Files -->


     <div id="fb-root"></div>
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

    
    <script src="/Content/Js/main.js"></script>

    
    <script src="/Plugins/Validate/jquery-validation-1.13.1/jquery.validate.min.js"></script>

    <script>
        var arrayIdRoomSelected = [{
            RoomID: 0,
            Number: 0
        }];
        var number = 1;

        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();

            let adultParam = $('#AdultParam').val();
            let childParam = $('#ChildParam').val();

            $('#Adult').val(adultParam);
            $('#Child').val(childParam);

            $("#wraploadding").hide();

            function LoadingSendEmail() {
                $("#wraploadding").show();
                $("#wraploadding").css("width", $(window).width());
                $("#wraploadding").css("height", $(window).height());
                $("#imgloadding").css("top", ($(window).height() / 2) - 80);
            }

            $(".close").click(function () {
                $("#myModal").css("display", "none");
            });

            $('body').click(function (event) {
                if (event.target.id == "myModal") {
                    $("#myModal").css("display", "none");
                }
            });

            $(document).ready(function () {
                jQuery.validator.setDefaults({
                    debug: true,
                    success: "valid"
                });
                $("#check-room").validate({
                    rules: {
                        'FullName': {
                            required: true,
                        },
                        'Address': {
                            required: true,
                        },
                        'Phone': {
                            required: true,
                        },
                        'Email': {
                            required: true,
                            email: true
                        }
                    },
                    messages: {
                        'Address': "Vui lòng nhập địa chỉ",
                        'FullName': "Vui lòng nhập họ tên",
                        'Email': "Vui lòng nhập địa chỉ email",
                        'Phone': "Vui lòng nhập số điện thoại",
                    },
                    submitHandler: function (form) {
                      
                        arrayIdRoomSelected.shift();
                        var temp = JSON.stringify(arrayIdRoomSelected);
                        $('#ListRoomID').val(temp);
                        form.submit();
                        LoadingSendEmail();
                        //LoadingSendEmail();

                        //var data_request = $('form').serialize();

                        //$.ajax({
                        //    type: "POST",
                        //    url: "/Booking/SendBooking",
                        //    data: data_request,
                        //    success: function (data) {
                        //        let modal = $("#myModal");
                        //        $("#wraploadding").hide();
                        //        $("#myModal").css("display", "block");
                        //        if (data == "success") {
                        //            $("#messages").text("Đặt phòng của bạn đã được xác nhận. Chúng tôi sẽ liên lạc với bạn trong vòng 24h.");
                        //        }
                        //        else {
                        //            $("#messages").text("Đặt phòng không thành công.");
                        //        }
                        //    }
                        //});

                    },
                });
            });


        });

        $(document).ready(function () {
            $('.hb_mini_cart_empty').show();
            $('.hb_mini_cart_item').hide();
            $('.cart_bottom').hide();
        });

        function SelectRoom(id) {
            GetInfoRoomSelected(id);

            //get number room selected
            let numberRoom = parseInt($('#room-number-' + id + '').val());

            setTimeout(function () {
                if (numberRoom == 0) {
                    let obj = { RoomID: id, Number: 1 };
                    $('#cart-number-room-' + id + '').text(1);
                    arrayIdRoomSelected.push(obj);
                }
                else {
                    let obj = { RoomID: id, Number: numberRoom };
                    $('#cart-number-room-' + id + '').text(numberRoom);
                    arrayIdRoomSelected.push(obj);
                }
            }, 300);

        };

        function GetInfoRoomSelected(id) {
            $.ajax({
                type: "post",
                url: '/get-detail-room',
                dataType: "json",
                data: { "RoomId": id },
                success: function (data) {
                    if (data != null) {
                        var res = data[0];
                        var html = '';

                        html += '<div class="hb_mini_cart_item" id="cart-item-' + id + '">';
                        html += '<div class="hb_mini_cart_top">';
                        html += '<h4 class="hb_title">';
                        html += '<a href="https://themebubble.com/demo/hotelluxe/rooms/double-bed/">' + res.Title + '</a>';
                        html += '</h4>';
                        html += '<button class="hb_mini_cart_remove" onclick="RemoveRoomSelected(' + id + ')" id="remove-item-' + id + '"><i class="fa fa-times"></i></button>';
                        html += '</div>';
                        html += '<div class="hb_mini_cart_number">';
                        html += '<label>Quantity:&nbsp;</label>';
                        html += '<span><strong>' + res.MaxPeople + '</strong></span>';
                        html += '</div>';
                        html += '<div class="hb_mini_cart_number">';
                        html += '<label>Number:&nbsp;</label>';
                        html += '<strong><span id="cart-number-room-' + id + '"></span></strong>';
                        html += '</div>';
                        //html += '<div class="hb_mini_cart_price">';
                        //html += '<label>Price:&nbsp;</label>';
                        //html += '<span class="text-brow"><strong>' + res.Price.toLocaleString('it-IT', { style: 'currency', currency: 'VND' }); + ' VND</strong></span>';
                        //html += '</div>';
                        html += '</div>';
                        //html += '</div>';

                        $('.hb_mini_cart_empty').hide();
                        $('.cart_bottom').show();
                        $('#btn-select-' + id + '').attr('disabled', 'disabled');
                        $('#room-number-' + id + '').attr('disabled', 'disabled');
                        $('.list-room').append(html);
                    }
                },
            });
        }

        function RemoveRoomSelected(id) {
            $('#cart-item-' + id + '').remove();

            removeByAttr(arrayIdRoomSelected, 'RoomID', id);

            if (arrayIdRoomSelected.length <= 1) {
                $('.hb_mini_cart_empty').show();
                $('.cart_bottom').hide();
            }
            $('#btn-select-' + id + '').removeAttr('disabled', 'disabled');
            $('#room-number-' + id + '').removeAttr('disabled', 'disabled');
            //console.log(arrayIdRoomSelected);
        }

        //function declared by stackoverflow
        function removeByAttr(arr, attr, value) {
            var i = arr.length;
            while (i--) {
                if (arr[i]
                    && arr[i].hasOwnProperty(attr)
                    && (arguments.length > 2 && arr[i][attr] === value)) {

                    arr.splice(i, 1);

                }
            }
            return arr;
        }

    </script> 
    @endsection
