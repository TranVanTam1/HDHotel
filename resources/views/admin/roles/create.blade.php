<!-- resources/views/roles/create.blade.php -->

@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Thêm Vai Trò Mới</h2>

            <form action="{{ route('roles.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="RoleName">Tên Vai Trò</label>
                    <input type="text" name="RoleName" id="RoleName" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="Description">Mô Tả</label>
                    <textarea name="Description" id="Description" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection
