@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Thêm Phòng Mới</h2>

            <!-- Form thêm mới phòng -->
            <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="RoomNumber" class="form-label">Số Phòng</label>
                    <input type="text" class="form-control" id="RoomNumber" name="RoomNumber" required>
                </div>

                <div class="mb-3">
                    <label for="RoomTypeID" class="form-label">Loại Phòng</label>
                    <select class="form-control" id="RoomTypeID" name="RoomTypeID" required>
                        <option value="">Chọn loại phòng</option>
                        @foreach ($roomTypes as $roomType)
                            <option value="{{ $roomType->id }}">{{ $roomType->RoomTypeName }}</option>
                        @endforeach
                    </select>
                </div>
                

                <div class="mb-3">
                    <label for="RoomPrice" class="form-label">Giá Phòng</label>
                    <input type="text" class="form-control" id="RoomPrice" name="RoomPrice" required>
                </div>

                <div class="mb-3">
                    <label for="Status" class="form-label">Trạng Thái</label>
                    <select class="form-control" id="Status" name="Status">
                        <option value="Available">Còn Trống</option>
                        <option value="Occupied">Đã Đặt</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="Capacity" class="form-label">Sức Chứa</label>
                    <input type="number" class="form-control" id="Capacity" name="Capacity" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Hình Ảnh</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="mb-3">
                    <label for="Description" class="form-label">Mô Tả</label>
                    <textarea class="form-control" id="Description" name="Description" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection
