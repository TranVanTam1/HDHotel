<!-- resources/views/roles/index.blade.php -->

@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Danh Sách Vai Trò</h2>

            <!-- Nút Thêm Mới -->
            <div class="mb-3">
                <a href="{{ route('roles.create') }}" class="btn btn-primary">Thêm Vai Trò Mới</a>
            </div>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên Vai Trò</th>
                        <th>Mô Tả</th>
                        <th>Ngày Tạo</th>
                        <th>Ngày Cập Nhật</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->RoleName }}</td>
                            <td>{{ $role->Description }}</td>
                            <td>{{ $role->created_at }}</td>
                            <td>{{ $role->updated_at }}</td>
                            <td>
                                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                                
                                <form action="{{ route('roles.destroy', $role->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa vai trò này không?');" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">Không có vai trò nào.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
