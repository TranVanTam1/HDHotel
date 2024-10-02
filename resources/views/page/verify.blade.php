@extends('layout.master')

@section('content')
<div class="container">
    <div id="content">
        <form action="{{ route('verify.code') }}" method="POST" class="beta-form-checkout">
            @csrf
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h4>Xác thực mã</h4>
                    <div class="space20">&nbsp;</div>
                    <div id="timer" class="mt-3"></div> 
                    <div class="form-group">
                        <label for="email">Email address*</label>
                        <input class="form-control" type="email" name="email" id="email" value="{{ $email }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="verification_code">Mã xác thực*</label>
                        <input class="form-control @error('verification_code') is-invalid @enderror" type="text" name="verification_code" id="verification_code">
                        @error('verification_code')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Xác thực</button>
                    </div>

                    <!-- Thông báo hết hạn -->
                    <div id="expired-message" class="alert alert-danger mt-3" style="display: none;">
                        Mã xác thực đã hết hạn. Vui lòng đăng ký lại.
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        // Lấy thời gian hết hạn từ session
        var expiresAt = "{{ \Illuminate\Support\Carbon::parse(session('register_data')['expires_at'])->toDateTimeString() }}";

        function updateTimer() {
            var now = new Date();
            var expirationTime = new Date(expiresAt);
            var timeLeft = expirationTime - now;

            if (timeLeft <= 0) {
                document.getElementById('timer').innerText = 'Mã xác thực đã hết hạn.';
                document.getElementById('expired-message').style.display = 'block'; // Hiển thị thông báo hết hạn
                document.querySelector('form').style.display = 'none'; // Ẩn form khi mã hết hạn
                return;
            }

            var minutes = Math.floor(timeLeft / 60000);
            var seconds = Math.floor((timeLeft % 60000) / 1000);

            document.getElementById('timer').innerText = `Thời gian còn lại: ${minutes} phút ${seconds} giây`;
        }

        updateTimer(); // Cập nhật ngay lập tức khi tải trang
        setInterval(updateTimer, 1000); // Cập nhật mỗi giây
    });
</script>
@endsection
