@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Sửa Thông Tin Phòng</h2>

            <!-- Form sửa thông tin phòng -->
            <form action="{{ route('rooms.update', $room->id) }}"  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="RoomNumber" class="form-label">Số Phòng</label>
                    <input type="text" class="form-control" id="RoomNumber" name="RoomNumber" value="{{ $room->RoomNumber }}" required>
                </div>

                <div class="mb-3">
                    <label for="RoomTypeID" class="form-label">Loại Phòng</label>
                    <select class="form-control" id="RoomTypeID" name="RoomTypeID" required>
                        <option value="">Chọn loại phòng</option>
                        @foreach ($roomTypes as $roomType)
                            <option value="{{ $roomType->id }}" {{ $roomType->id == $room->RoomTypeID ? 'selected' : '' }}>
                                {{ $roomType->RoomTypeName }}
                            </option>
                        @endforeach
                    </select>
                </div>
                

                <div class="mb-3">
                    <label for="RoomPrice" class="form-label">Giá Phòng</label>
                    <input type="text" class="form-control" id="RoomPrice" name="RoomPrice" value="{{ $room->RoomPrice }}" required>
                </div>

                <div class="mb-3">
                    <label for="Status" class="form-label">Trạng Thái</label>
                    <select class="form-control" id="Status" name="Status">
                        <option value="Available" {{ $room->Status == 'Available' ? 'selected' : '' }}>Còn Trống</option>
                        <option value="Occupied" {{ $room->Status == 'Occupied' ? 'selected' : '' }}>Đã Đặt</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="Capacity" class="form-label">Sức Chứa</label>
                    <input type="number" class="form-control" id="Capacity" name="Capacity" value="{{ $room->Capacity }}" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Hình Ảnh Hiện Tại</label>
                    <div>
                        @if ($room->image)
                            <img id="currentImage" src="{{ asset('/images/room/' . $room->image) }}" alt="Room Image" width="200">
                        @else
                            <p>Không có hình ảnh</p>
                        @endif
                    </div>
                </div>
            
                <div class="mb-3">
                    <label for="image" class="form-label">Chọn Hình Ảnh Mới</label>
                    <input type="file" class="form-control" id="image" name="image" onchange="previewImage(event)">
                </div>
            
                <div class="mb-3">
                    <label for="Description" class="form-label">Mô Tả</label>
                    <textarea class="form-control" id="Description" name="Description" rows="3">{{ $room->Description }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Cập Nhật</button>
            </form>
        </div>
    </div>
</div>
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('currentImage');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
