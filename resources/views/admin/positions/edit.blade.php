@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <h2>Sửa Chức Vụ</h2>

        <form action="{{ route('positions.update', $position->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="PositionName">Tên Chức Vụ:</label>
                <input type="text" class="form-control" id="PositionName" name="PositionName" value="{{ $position->PositionName }}" required>
            </div>
            <div class="form-group">
                <label for="Description">Mô Tả:</label>
                <textarea class="form-control" id="Description" name="Description">{{ $position->Description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
        </form>
    </div>
</div>
@endsection
