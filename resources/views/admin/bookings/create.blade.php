@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Thêm Đặt Phòng Mới</h2>

            <form action="{{ route('bookings.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="CustomerID">Khách Hàng</label>
                    <select name="CustomerID" id="CustomerID" class="form-control" required>
                        <option value="">Chọn Khách Hàng</option>
                        @foreach($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->FullName }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="RoomID">Phòng</label>
                    <select name="RoomID" id="RoomID" class="form-control" required>
                        <option value="">Chọn Phòng</option>
                        @foreach($rooms as $room)
                            <option value="{{ $room->id }}">{{ $room->RoomName }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="BookingDate">Ngày Đặt</label>
                    <input type="date" name="BookingDate" id="BookingDate" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="CheckInDate">Ngày Nhận Phòng</label>
                    <input type="date" name="CheckInDate" id="CheckInDate" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="CheckOutDate">Ngày Trả Phòng</label>
                    <input type="date" name="CheckOutDate" id="CheckOutDate" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="TotalAmount">Tổng Số Tiền</label>
                    <input type="number" name="TotalAmount" id="TotalAmount" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="BookingStatus">Trạng Thái Đặt Phòng</label>
                    <input type="text" name="BookingStatus" id="BookingStatus" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Lưu Đặt Phòng</button>
                <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
</div>
@endsection
