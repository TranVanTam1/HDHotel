<!-- resources/views/roles/edit.blade.php -->

@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Sửa Vai Trò</h2>

            <form action="{{ route('roles.update', $role->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="RoleName">Tên Vai Trò</label>
                    <input type="text" name="RoleName" id="RoleName" class="form-control" value="{{ $role->RoleName }}" required>
                </div>

                <div class="form-group">
                    <label for="Description">Mô Tả</label>
                    <textarea name="Description" id="Description" class="form-control">{{ $role->Description }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Cập Nhật</button>
            </form>
        </div>
    </div>
</div>
@endsection
