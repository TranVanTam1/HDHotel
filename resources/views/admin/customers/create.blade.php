@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Thêm Khách Hàng Mới</h2>

            <form action="{{ route('customers.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="UserID">User ID</label>
                    <input type="text" class="form-control" id="UserID" name="UserID" required>
                </div>

                <div class="form-group">
                    <label for="FullName">Họ Tên</label>
                    <input type="text" class="form-control" id="FullName" name="FullName" required>
                </div>

                <div class="form-group">
                    <label for="Phone">Điện Thoại</label>
                    <input type="text" class="form-control" id="Phone" name="Phone" required>
                </div>

                <div class="form-group">
                    <label for="Address">Địa Chỉ</label>
                    <input type="text" class="form-control" id="Address" name="Address">
                </div>

                <button type="submit" class="btn btn-primary">Thêm Khách Hàng</button>
                <a href="{{ route('customers.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
