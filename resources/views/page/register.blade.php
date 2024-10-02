@extends('layout.master')
@section('content')

<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Đăng kí</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="index.html">Home</a> / <span>Đăng kí</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
               
        
        <form action="" method="post" class="beta-form-checkout">
            @csrf
                            <div class="row">
                                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h4>Đăng kí</h4>
                    <div class="space20">&nbsp;</div>

                    <div class="form-group">
                        <label for="email">Email address*</label>
                        <input class="form-control  @error('email') is-invalid @enderror " type="email" name="email" id="email" >
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="form-group">
                        <label for="FullName">Fullname*</label>
                        <input class="form-control  @error('FullName') is-invalid @enderror " type="text" name="FullName" id="FullName">
                        @error('FullName')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="form-group">
                        <label for="Address">Address*</label>
                        <input type="text" class="form-control  @error('Address') is-invalid @enderror " name="Address" id="Address" placeholder="Street Address" >
                        @error('Address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>


                    <div class="form-group">
                        <label for="Phone">Phone*</label>
                        <input class="form-control  @error('Phone') is-invalid @enderror " type="text" name="Phone" id="phone" >
                        @error('Phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password*</label>
                        <input class="form-control  @error('password') is-invalid @enderror " type="password" name="password" id="password" >
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="repassword">Re password*</label>
                        <input type="password" class="form-control  @error('repassword') is-invalid @enderror " name="repassword" id="repassword">
                        @error('repassword')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
    </div> <!-- #content -->
</div> <!-- .container -->
<p></p>
@endsection

@section('js')
<script type="text/javascript">
    $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;

        // passes on every "a" tag
        $(".main-menu a").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("li").addClass("active");
				$(this).parents('li').addClass('parent-active');
            }
        });
    });   


</script>
<script>
	 jQuery(document).ready(function($) {
                'use strict';
				
// color box

//color
      jQuery('#style-selector').animate({
      left: '-213px'
    });

    jQuery('#style-selector a.close').click(function(e){
      e.preventDefault();
      var div = jQuery('#style-selector');
      if (div.css('left') === '-213px') {
        jQuery('#style-selector').animate({
          left: '0'
        });
        jQuery(this).removeClass('icon-angle-left');
        jQuery(this).addClass('icon-angle-right');
      } else {
        jQuery('#style-selector').animate({
          left: '-213px'
        });
        jQuery(this).removeClass('icon-angle-right');
        jQuery(this).addClass('icon-angle-left');
      }
    });
				});
	</script>
@endsection