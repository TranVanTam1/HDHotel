@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Thêm Mới Loại Phòng</h2>

            <!-- Form Thêm Mới -->
            <form action="{{ route('roomTypes.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="RoomTypeName">Tên Loại Phòng</label>
                    <input type="text" name="RoomTypeName" id="RoomTypeName" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="Description">Mô Tả</label>
                    <textarea name="Description" id="Description" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Lưu</button>
                <a href="{{ route('roomTypes.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
