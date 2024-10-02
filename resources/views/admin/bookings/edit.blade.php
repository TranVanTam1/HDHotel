@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Sửa Đặt Phòng</h2>

            <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="CustomerID">Khách Hàng</label>
                    <select name="CustomerID" id="CustomerID" class="form-control" required>
                        @foreach($customers as $customer)
                            <option value="{{ $customer->id }}" {{ $customer->id == $booking->CustomerID ? 'selected' : '' }}>{{ $customer->FullName }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="RoomID">Phòng</label>
                    <select name="RoomID" id="RoomID" class="form-control" required>
                        @foreach($rooms as $room)
                            <option value="{{ $room->id }}" {{ $room->id == $booking->RoomID ? 'selected' : '' }}>{{ $room->RoomName }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="BookingDate">Ngày Đặt</label>
                    <input type="date" name="BookingDate" id="BookingDate" class="form-control" value="{{ $booking->BookingDate }}" required>
                </div>

                <div class="form-group">
                    <label for="CheckInDate">Ngày Nhận Phòng</label>
                    <input type="date" name="CheckInDate" id="CheckInDate" class="form-control" value="{{ $booking->CheckInDate }}" required>
                </div>

                <div class="form-group">
                    <label for="CheckOutDate">Ngày Trả Phòng</label>
                    <input type="date" name="CheckOutDate" id="CheckOutDate" class="form-control" value="{{ $booking->CheckOutDate }}" required>
                </div>

                <div class="form-group">
                    <label for="TotalAmount">Tổng Số Tiền</label>
                    <input type="number" name="TotalAmount" id="TotalAmount" class="form-control" value="{{ $booking->TotalAmount }}" required>
                </div>

                <div class="form-group">
                    <label for="BookingStatus">Trạng Thái Đặt Phòng</label>
                    <input type="text" name="BookingStatus" id="BookingStatus" class="form-control" value="{{ $booking->BookingStatus }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Cập Nhật Đặt Phòng</button>
                <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
</div>
@endsection
