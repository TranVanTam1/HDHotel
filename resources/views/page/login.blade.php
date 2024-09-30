@extends('layout.master')

@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Đăng nhập</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="index.html">Home</a> / <span>Đăng nhập</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content">
        <form action="{{ route('login') }}" method="POST" class="beta-form-checkout">
            @csrf
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <p></p>
                    <br>

                    <h4>Đăng nhập</h4>
                    <div class="space20">&nbsp;</div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email address*</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Mật khẩu -->
                    <div class="form-group">
                        <label for="password">Password*</label>
                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Nút đăng nhập -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Đăng nhập</button>
                        <a href="{{ route('register') }}">Đăng ký tài khoản</a>
                        <p></p>
                  
                        <a href="">Quên mật khẩu ?</a>
                        <p></p>
                        <br>
                    </div>
                </div>
                <div class="col-sm-3"></div>
               
            </div>
        </form>
    </div>
</div>
@endsection
