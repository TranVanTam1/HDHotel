@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Thêm Người Dùng Mới</h2>

            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Nhập email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mật Khẩu</label>
                    <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu" required>
                </div>
                <div class="form-group">
                    <label for="RoleID">Vai Trò</label>
                    <select name="RoleID" class="form-control" required>
                        <option value="1" >Admin</option>
                        <option value="2" >Editor</option>
                        <option value="3" >User</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Thêm Người Dùng</button>
            </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
