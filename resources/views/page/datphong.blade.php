

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Date</title>
    <link type="image/x-icon" href="/Files/files/favicon.ico" rel="shortcut icon" />
    <link href="/Content/css/jquery-ui.css" rel="stylesheet" />
    <link href="/Content/css/jquery-ui.theme.css" rel="stylesheet" />
    <link href="/Content/css/Custom-jquery.css" rel="stylesheet" />
    <link href="/Content/css/Style.css" rel="stylesheet" />
    <link href="/Content/css/Style-mobile.css" rel="stylesheet" />
    <link href="/Content/css/booking.css" rel="stylesheet" />
    <script src="/Content/js/jquery-1.9.1.js"></script>
    <script src="/Content/js/jquery-ui-1.10.0.min.js"></script>
    <script src="/Content/js/booking.js"></script>
    <script src="/Content/js/moment.min.js"></script>
    <script src="/Content/js/Angular/angular.min.js"></script>
    <script src="/Content/js/Angular/angular-sanitize.min.js"></script>
    <script src="/Content/js/Angular/angular-route.min.js"></script>
    <script src="/Content/js/Angular/angular-animate.min.js"></script>
    <script src="/Content/js/Angular/angular-modal-service.js"></script>
    <script src="/Content/js/ui-bootstrap-tpls.min.js"></script>    
    <script src="/Content/js/jquery.flot.min.js"></script>
    <script src="/Content/js/jquery.flot.resize.min.js"></script>
    <script src="/Content/js/jquery.peity.min.js"></script>
    <script src="/Content/js/jquery.validate.min.js"></script>
    <script src="/Content/js/toastr.min.js"></script>
    <script src="/Content/js/bootbox.min.js"></script>
    <script src="/Content/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/Content/js/layout.js"></script>
    <style>
        #loader {
            border: 5px solid #d1d8f0;
            border-radius: 50%;
            border-top: 5px solid #7f7159;
            border-bottom: 5px solid #7f7159;
            width: 40px;
            height: 40px;
            animation: spin 2s linear infinite;
            z-index: 10005;
            top: 40%;
            left: 50%;
            position: fixed;
            display: none;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

</head>

<body ng-app="app" ng-controller="controller">
    <header id="page-header">
        <div class="site-width">
            <div class="logo" style="text-align: center;">
                <a href="http://asiky.com" id="logoHotel">
                    <img src="/files/files/logoiit.png" alt="T?n kh?ch s?n" style="width: auto;max-width: 300px;max-height: 100px;">
                </a>
            </div>
        </div>
    </header>
    <div class="wrap-main-content">
        <div id="main">
            <div class="width-container">
                

<script src="/Content/js/Home/selectdate.js"></script>
<input type="hidden" id="hotelId" value="1" />
<header>
    <div id="whyBook">
    <span>Ch&#250;ng t&#244;i cam kết</span><br>
    <img src="/FileDefault/image/check.jpg" width="12" height="9">Gi&#225; tốt nhất  &emsp;
    <img src="/FileDefault/image/check.jpg" width="12" height="9">Gi&#225; trị vượt trội  &emsp;
    <img src="/FileDefault/image/check.jpg" width="12" height="9">H&#244;̃ trợ 24/7  &emsp;
    <img src="/FileDefault/image/check.jpg" width="12" height="9">Nh&#226;n vi&#234;n th&#226;n thiện  &emsp;
    <img src="/FileDefault/image/check.jpg" width="12" height="9">Nh&#226;̣n phòng sớm  &amp; Trả ph&#242;ng muộn (k&#232;m điều khoản v&#224; điều kiện)
</div>
</header>
<div class="content-checkavail">
    <div id="header-avail">
        <div id="left-header-avail">
            
<h1 class="hotelname">Asiky Boooking Engine</h1>
<span class="hotel-address">Đi&#234;̣n thoại: <a href="tel:+84(0)242 2420 777">+84(0)242 2420 777</a> | Email: <a href="info@asiky.com">info@asiky.com</a></span>
<br />
<span class="hotel-address">147 Mai Dich, Cau Giay, Ha Noi, Vietnam</span>

        </div>
        <div id="right-header-avail">
            
<ul class="list-language list-curentcy">
    <li>
        <div class="language-current">
            <div ng-repeat="item in currencies">
                <a ng-if="currency == item.CurrencyCode" ng-cloak> </a>
            </div>
        </div>
        <ul class="sublist-lang">
            <li ng-repeat="item in currencies">
                <a ng-click="changeCurrency(item.CurrencyCode)"> </a>
            </li>
        </ul>
    </li>
</ul>
            <style>
    .sublist-lang li {
        cursor: pointer
    }
</style>
<ul class="list-language">
    <li>
        <div class="language-current">
            <div ng-repeat="item in languages">
                <div ng-if="lang==item.Key">
                    <img class="LangImg" ng-src="" style="border-width: 0px;">
                    <span ng-cloak></span>
                </div>
            </div>
        </div>
        <ul class="sublist-lang">
            <li ng-click="changeLanguage(item.Key)" ng-repeat="item in languages"><img ng-src="" /></li>
        </ul>
    </li>
</ul>
        </div>
    </div>
    <div class="full-width wrap-selectdate">
        <div class="wrap-item-sidebar">
            <div id="wrap-check-one">
                <div>
                    <span>
                        Khách sạn:
                    </span>
                    <select ng-model="hotelId" style="padding: 5px;width:100%" ng-change="changeHotel()" >
                        <option value="" ng-repeat="item in hotels"></option>
                    </select>
                </div>
                <div class="av-check-time">
                    <span>NGÀY Đ&#202;́N:</span>
                    <input type="text" id="Arrive" name="Arrive" class="checkdate" />
                </div>
                <div class="av-check-time">
                    <span>NGÀY ĐI: </span>
                    <input type="text" id="Depart" name="Depart" class="checkdate" />
                </div>
                <div class="av-persion">
                    <div class="av-item-pertion">
                        <span>NGƯỜI LỚN:</span>
                        <select ng-model="filter.adult" convert-to-number>
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
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                        </select>
                    </div>
                    <div class="av-item-pertion">
                        <span>TRẺ EM (6-11 tu&#244;̉i):</span>
                        <select ng-model="filter.child" convert-to-number>
                                <option value="0">0</option>
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
                                <option value="11">11</option>
                        </select>
                    </div>
					<div class="av-item-pertion">
                        <span>TRẺ EM (0-5 tu&#244;̉i):</span>
                        <select ng-model="filter.infant" convert-to-number>
                                <option value="0">0</option>
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
                                <option value="11">11</option>
                        </select>
                    </div>
                </div>
                <input id="av-buton" ng-click="selectRoom()" value="Tìm phòng tr&#244;́ng" class="buton-Check-availability" />
            </div>
        </div>

        <div class="content-booking w-content-select-date">
            <div id="date-CalendarAvailability"></div>
            <div class="botom-select-date">
                <div class="status-select-date">
                    <div class="square avail-true"></div>
                    <span>C&#225;c ng&#224;y c&#243; thể đặt</span>
                </div>
                <div class="status-select-date">
                    <div class="square avail-false"></div>
                    <span>Kh&#244;ng có sẵn</span>
                </div>
                <input type="button" ng-click="selectRoom()" value="Tìm phòng tr&#244;́ng" class="buton-Check-availability right" />
            </div>
        </div>
    </div>
</div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <footer class="footer-page">
        <div class="site-width">
            <span class="text-footer">Asiky Boooking Engine | 147 Mai Dich, Cau Giay, Ha Noi, Vietnam.</span>
            <span class="text-footer right">Powered by <a target="_blank" href="http://asiky.com/" rel="nofollow">Asiky</a> ? 2014-2023</span>
        </div>
    </footer>
    <div id="loader" style="display: none;"></div>
    </body>
</html>
