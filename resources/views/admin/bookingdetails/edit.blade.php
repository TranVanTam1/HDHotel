@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Chỉnh Sửa Chi Tiết Đặt Phòng</h2>

            <form action="{{ route('bookingdetails.update', $bookingDetail->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="BookingID">Booking ID</label>
                    <input type="text" class="form-control" id="BookingID" name="BookingID" value="{{ $bookingDetail->BookingID }}" required>
                </div>

                <div class="form-group">
                    <label for="NumberOfPeople">Số Người</label>
                    <input type="number" class="form-control" id="NumberOfPeople" name="NumberOfPeople" value="{{ $bookingDetail->NumberOfPeople }}" required>
                </div>

                <div class="form-group">
                    <label for="CCCD">CCCD</label>
                    <input type="text" class="form-control" id="CCCD" name="CCCD" value="{{ $bookingDetail->CCCD }}" required>
                </div>

                <div class="form-group">
                    <label for="NumberOfNights">Số Đêm</label>
                    <input type="number" class="form-control" id="NumberOfNights" name="NumberOfNights" value="{{ $bookingDetail->NumberOfNights }}" required>
                </div>

                <div class="form-group">
                    <label for="RoomRate">Giá Phòng</label>
                    <input type="number" class="form-control" id="RoomRate" name="RoomRate" value="{{ $bookingDetail->RoomRate }}" required>
                </div>

                <div class="form-group">
                    <label for="Discount">Giảm Giá</label>
                    <input type="number" class="form-control" id="Discount" name="Discount" value="{{ $bookingDetail->Discount }}">
                </div>

                <div class="form-group">
                    <label for="TotalRoomCost">Tổng Chi Phí Phòng</label>
                    <input type="number" class="form-control" id="TotalRoomCost" name="TotalRoomCost" value="{{ $bookingDetail->TotalRoomCost }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Cập Nhật Chi Tiết Đặt Phòng</button>
                <a href="{{ route('bookingdetails.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
