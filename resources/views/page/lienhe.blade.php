@extends('layout.master')

@section('content')
<style>
    .contact_form input {
            margin: 0 0 20px 0;
        }

        .submit_form {
            background-color: #c7b39a;
            border: none;
            border-radius: 3px;
            color: #fff;
            display: inline-block;
            text-transform: uppercase;
            padding: 8px 20px;
            margin: 20px 20px 20px 0;
        }

            .submit_form:focus {
                outline: none;
            }
    </style>
<section class="banner banner-contact" style="background-image: url(/images/slide/slide-03.jpg)">
     
</section>
<section class="main">
    <div id="wraploadding">
        <div id="imgloadding"><img src="/Areas/Administrator/Content/img/ajax-loader.gif" alt="loading" /></div>
    </div>
    <div class="main_space"></div>
    <div class="container">
        <div class="contact_title" style="text-align: center;margin: 0 0 30px 0;">
            <span class="contact_subtitle" style="color:#666666;"></span>
            <h2 class="contact_title-name" style="color:#111111;font-weight: 400;">Liên hệ</h2>
        </div>
        <div class="row" style="justify-content: center;">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <form action="/Contact/SubmitContact" method="post" id="contact-form">
                    <div class="contact_form">
                        <input type="hidden" name="Discount" value=": 0%" class="form-control">
                        <input type="text" required name="FullName" class="form-control" placeholder="T&#234;n của bạn">
                        <input type="text" required name="Tel" class="form-control" placeholder="Số điện thoại">
                        <input type="text" required name="Email" class="form-control" placeholder="Địa chỉ h&#242;m thư">
                        <textarea class="form-control" required name="Request" id="mess_contact" rows="10" placeholder="Nội dung"></textarea>
                        <div class="submit_message">
                            <button class="submit_form">
                                Gửi Email
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="main_space"></div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.808719195436!2d105.77227431467809!3d21.040338292759436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454c563dba4eb%3A0xc3161d468d77f9aa!2zSUlUIFRFQ0hDT00gLSBDw7RuZyB0eSBUTkhIIEPDtG5nIG5naOG7hyB2w6AgdHJ1eeG7gW4gdGjDtG5nIElJVA!5e0!3m2!1svi!2s!4v1663151146793!5m2!1svi!2s"
                width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

    <!-- Vendor JS Files -->
<!-- 

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
    <script src="/Plugins/Validate/jquery-validation-1.13.1/additional-methods.min.js"></script>
    


    <script type="text/javascript">

        //jQuery(document).ready(function () {
        //    jQuery("#contactform").validate();
        //});
        $("#wraploadding").hide();

        function LoadingSendEmail() {
            $("#wraploadding").show();
            $("#wraploadding").css("width", $(window).width());
            $("#wraploadding").css("height", $(window).height());
            $("#imgloadding ").css("top", ($(window).height() / 2) - 80);
        }
        //validate
        jQuery.validator.setDefaults({
            debug: true,
            success: "valid"
        });
        $("#contact-form").validate({
            rules: {
                Request: {
                    required: true,
                },
                FullName: {
                    required: true,
                },
                Email: {
                    required: true,
                    email: true
                },
                Tel: {
                    required: true,
                }
            },
            messages: {
                FullName: "Please enter Full Name",
                Request: "Please enter Request",
                Email: "Please enter Email Adress",
                Tel: "Please enter Phone Number",
            },
            submitHandler: function (form) {
                form.submit();
                LoadingSendEmail();
            }
        });

    </script> -->

@endsection
