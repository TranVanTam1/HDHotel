@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Danh Sách Nhân Viên</h2>

            <!-- Nút Thêm Mới -->
            <div class="mb-3">
                <a href="{{ route('staffs.create') }}" class="btn btn-primary">Thêm Nhân Viên Mới</a>
            </div>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Họ và Tên</th>
                        <th>Chức Vụ</th>
                        <th>Số Điện Thoại</th>
                        <th>Ngày Thuê</th>
                        <th>Lương</th>
                        <th>Ngày Tạo</th>
                        <th>Ngày Cập Nhật</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @isset($staff)
                        @foreach ($staff as $s)
                            <tr>
                                <td>{{ $s->id }}</td>
                                <td>{{ $s->FullName }}</td>
                                <td>{{ $s->position->PositionName }}</td> <!-- Mối quan hệ với bảng positions -->
                                <td>{{ $s->Phone }}</td>
                                <td>{{ $s->HireDate }}</td>
                                <td>{{ $s->Salary }}</td>
                                <td>{{ $s->created_at }}</td>
                                <td>{{ $s->updated_at }}</td>
                                <td>
                                    <a href="{{ route('staffs.edit', $s->id) }}" class="btn btn-warning btn-sm">Sửa</a>

                                    <form action="{{ route('staffs.destroy', $s->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa nhân viên này không?');" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
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
