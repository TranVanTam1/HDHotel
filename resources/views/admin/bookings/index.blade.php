@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Danh Sách Đặt Phòng</h2>

            <!-- Nút Thêm Mới -->
            <div class="mb-3">
                <a href="{{ route('bookings.create') }}" class="btn btn-primary">Thêm Đặt Phòng Mới</a>
            </div>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Khách Hàng</th>
                        <th>Phòng</th>
                        <th>Ngày Đặt</th>
                        <th>Ngày Nhận Phòng</th>
                        <th>Ngày Trả Phòng</th>
                        <th>Tổng Số Tiền</th>
                        <th>Trạng Thái Đặt Phòng</th>
                        <th>Ngày Tạo</th>
                        <th>Ngày Cập Nhật</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bookings as $booking)
                        <tr>
                            <td>{{ $booking->id }}</td>
                            <td>{{ $booking->customer->FullName }}</td> <!-- Giả định bạn đã có mối quan hệ với model Customer -->
                            <td>{{ $booking->room->RoomName }}</td> <!-- Giả định bạn đã có mối quan hệ với model Room -->
                            <td>{{ $booking->BookingDate }}</td>
                            <td>{{ $booking->CheckInDate }}</td>
                            <td>{{ $booking->CheckOutDate }}</td>
                            <td>{{ $booking->TotalAmount }}</td>
                            <td>{{ $booking->BookingStatus }}</td>
                            <td>{{ $booking->created_at }}</td>
                            <td>{{ $booking->updated_at }}</td>
                            <td>
                                <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                                
                                <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa đặt phòng này không?');" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="11">Không có đặt phòng nào.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
