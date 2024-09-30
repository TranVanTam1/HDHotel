@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Thêm Nhân Viên Mới</h2>

            <form action="{{ route('staffs.store') }}" method="POST">
                @csrf
                  <!-- Email -->
                  <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" id="Email" name="Email" value="{{ old('Email') }}" placeholder="Nhập email">
                    @error('Email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="Password">Mật Khẩu</label>
                    <input type="password" class="form-control" id="Password" name="Password" placeholder="Nhập mật khẩu">
                    @error('Password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Full Name -->
                <div class="form-group">
                    <label for="FullName">Họ và Tên</label>
                    <input type="text" class="form-control" id="FullName" name="FullName" value="{{ old('FullName') }}" placeholder="Nhập họ và tên">
                    @error('FullName')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Position -->
                <div class="form-group">
                    <label for="PositionID">Chức Vụ</label>
                    <select name="PositionID" id="PositionID" class="form-control">
                        <option value="">Chọn chức vụ</option>
                        @foreach ($positions as $position)
                            <option value="{{ $position->id }}" {{ old('PositionID') == $position->id ? 'selected' : '' }}>{{ $position->PositionName }}</option>
                        @endforeach
                    </select>
                    @error('PositionID')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Phone -->
                <div class="form-group">
                    <label for="Phone">Số Điện Thoại</label>
                    <input type="text" class="form-control" id="Phone" name="Phone" value="{{ old('Phone') }}" placeholder="Nhập số điện thoại">
                    @error('Phone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Hire Date -->
                <div class="form-group">
                    <label for="HireDate">Ngày Thuê</label>
                    <input type="date" class="form-control" id="HireDate" name="HireDate" value="{{ old('HireDate') }}">
                    @error('HireDate')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Salary -->
                <div class="form-group">
                    <label for="Salary">Lương</label>
                    <input type="text" class="form-control" id="Salary" name="Salary" value="{{ old('Salary') }}" placeholder="Nhập lương">
                    @error('Salary')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

              
            
                <button type="submit" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection
