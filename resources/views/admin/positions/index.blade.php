@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Danh Sách Chức Vụ</h2>

            <!-- Nút Thêm Mới -->
            <div class="mb-3">
                <a href="{{ route('positions.create') }}" class="btn btn-primary">Thêm Chức Vụ Mới</a>
            </div>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên Chức Vụ</th>
                        <th>Mô Tả</th>
                        <th>Ngày Tạo</th>
                        <th>Ngày Cập Nhật</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($positions as $position)
                        <tr>
                            <td>{{ $position->id }}</td>
                            <td>{{ $position->PositionName }}</td>
                            <td>{{ $position->Description }}</td>
                            <td>{{ $position->created_at }}</td>
                            <td>{{ $position->updated_at }}</td>
                            <td>
                                <a href="{{ route('positions.edit', $position->id) }}" class="btn btn-warning btn-sm">Sửa</a>

                                <form action="{{ route('positions.destroy', $position->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa chức vụ này không?');" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
