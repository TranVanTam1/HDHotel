@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <h2>Thêm Chức Vụ Mới</h2>

        <form action="{{ route('positions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="PositionName">Tên Chức Vụ:</label>
                <input type="text" class="form-control" id="PositionName" name="PositionName" required>
            </div>
            <div class="form-group">
                <label for="Description">Mô Tả:</label>
                <textarea class="form-control" id="Description" name="Description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</div>
@endsection
