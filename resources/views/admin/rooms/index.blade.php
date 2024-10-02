@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Danh Sách Phòng</h2>

            <!-- Nút Thêm Mới -->
            <div class="mb-3">
                <a href="{{ route('rooms.create') }}" class="btn btn-primary">Thêm Phòng Mới</a>
            </div>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Số Phòng</th>
                        <th>Loại Phòng</th>
                        <th>Giá Phòng</th>
                        <th>Trạng Thái</th>
                        <th>Sức Chứa</th>
                        <th>Mô Tả</th>
                        <th>Hình Ảnh</th>
                        <th>Ngày Tạo</th>
                        <th>Ngày Cập Nhật</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @isset($rooms)
                        @foreach ($rooms as $room)
                            <tr>
                                <td>{{ $room->id }}</td>
                                <td>{{ $room->RoomNumber }}</td>
                                <td>{{ $room->roomType->RoomTypeName }}</td> <!-- Mối quan hệ với loại phòng -->
                                <td>{{ $room->RoomPrice }}</td>
                                <td>{{ $room->Status }}</td>
                                <td>{{ $room->Capacity }}</td>
                                <td>{{ $room->Description }}</td>
                                <td>
                                    
                                    @if ($room->image)
                                        <img src="{{ asset('images/room/'.$room->image) }}" alt="Room Image" width="100">
                                    @else
                                        Không có hình ảnh
                                    @endif
                                </td>
                                
                                <td>{{ $room->created_at }}</td>
                                <td>{{ $room->updated_at }}</td>
                                <td>
                                    <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-warning btn-sm">Sửa</a>

                                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa phòng này không?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                    </form>
                                    
                                    
                                </td>
                            </tr>
                        @endforeach
                    @endisset
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
