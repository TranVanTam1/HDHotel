@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Sửa Khách Hàng</h2>

            <form action="{{ route('customers.update', $customer->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="FullName">Họ Tên</label>
                    <input type="text" class="form-control" id="FullName" name="FullName" value="{{ $customer->FullName }}" required>
                </div>

                <div class="form-group">
                    <label for="Phone">Điện Thoại</label>
                    <input type="text" class="form-control" id="Phone" name="Phone" value="{{ $customer->Phone }}" required>
                </div>

                <div class="form-group">
                    <label for="Address">Địa Chỉ</label>
                    <input type="text" class="form-control" id="Address" name="Address" value="{{ $customer->Address }}">
                </div>

                <button type="submit" class="btn btn-primary">Cập Nhật</button>
                <a href="{{ route('customers.index') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
