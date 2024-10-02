@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Sửa Loại Phòng</h2>

            <!-- Hiển thị thông báo nếu có -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('roomTypes.update', $roomType->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="RoomTypeName">Tên Loại Phòng</label>
                    <input type="text" name="RoomTypeName" id="RoomTypeName" class="form-control" value="{{ old('RoomTypeName', $roomType->RoomTypeName) }}" required>
                </div>
                <div class="form-group">
                    <label for="Description">Mô Tả</label>
                    <textarea name="Description" id="Description" class="form-control">{{ old('Description', $roomType->Description) }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Cập Nhật</button>
                <a href="{{ route('roomTypes.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
</div>
@endsection
