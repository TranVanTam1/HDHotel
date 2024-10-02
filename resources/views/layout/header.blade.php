<section class="header">
    <div class="header_contact">
        <div class="container container_contact">
            <div class="header_phone">
                <a class="phone_link" href="#">
                    <i class="fas fa-phone-alt"></i>0332541965
                </a>
                <span>
                    <i class="fas fa-map-marker-alt"></i>
                    Số 04 Lê Sát, Hải Châu, Đà Nẵng.
                </span>
            </div>
            <div class="header_social">
                <a href="#"> 
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-dribbble"></i>
                </a>
                <a href="#">
                    <i class="fab fa-google-plus-g"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="header_nav">
        <div class="container nav_container">
            <div class="nav_logo_menu">
                <div class="nav_logo">
                    <img src="/images/img/logohotel.png" alt="No picture">
                </div>
                
            </div>
            <div class="nav">
                <div class="nav_menu">
                    <ul class="menu_list">

                                    <li class="list_item"><a href="/">Trang chủ</a></li>
                                    <li class="list_item"><a href="/gioithieu">Giới thiệu</a></li>
                                <li class="list_item">
                                    <a href="/phongnghi">Ph&#242;ng nghỉ</a>

                                    <ul class="sub_menu"> 
                                        @isset($roomTypes)
                                        @foreach ($roomTypes as $roomType )
                                            <li class="sub_menu-item"><a href="{{ route('rooms.filterByType', strtolower($roomType->RoomTypeName)) }}">{{$roomType->RoomTypeName}}</a></li>
                                            {{-- <li class="sub_menu-item"><a href="/phongtriple">Ph&#242;ng Triple</a></li>
                                            <li class="sub_menu-item"><a href="/phongconnecting">Ph&#242;ng Connecting</a></li>
                                            <li class="sub_menu-item"><a href="/phongdeluxe">Ph&#242;ng Deluxe</a></li> --}}
                                        @endforeach
                                   
                                        @endisset
                                                                   

                                    </ul>
                                </li>
                                    <li class="list_item"><a href="/dichvu">Dịch vụ</a></li>
                                    <li class="list_item"><a href="/tintuc">Tin tức</a></li>
                                    <li class="list_item"><a href="/hinhanh">H&#236;nh ảnh</a></li>
                                    <li class="list_item"><a href="/lienhe">Li&#234;n hệ</a></li>


                    </ul>
                </div>
            </div>
            <div class="menu_mobile">
                <i class="fas fa-bars"></i>
            </div>
            
            
            <div class="nav_button">
                
                @if (auth()->check())
                <a style="color:black;font-weight: bold;" href="/personal-information">Tài khoản</a>&nbsp;&nbsp;
            @endif
        
            @if(Auth::check())
            &nbsp;&nbsp;<a style="color:black;font-weight: bold;" href="/personal-information">Chào <g style="color:rgb(153, 60, 60);font-weight: bold;">{{ $customer->FullName }}</g></a>
            &nbsp;&nbsp;  <a href="{{ route('register') }}"> <button>Đăng xuất</button></a>

            @else
               <a href="{{ route('register') }}"> <button>Đăng kí</button></a>
               <a href="{{ route('login') }}"> <button>Đăng nhập</button></a>
            @endif
                
                
            
            </div>
            
        </div>
    </div>

    @if(session('success'))
    <div style="text-align: center" class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if(session('message'))
    <div style="text-align: center" class="alert alert-danger">
        {{ session('message') }}
    </div>
    @endif



</section>

