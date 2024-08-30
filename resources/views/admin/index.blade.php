@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            
        <h2>Danh Sách Loại Phòng</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Loại Phòng</th>
                    <th>Mô Tả</th>
                    <th>Ngày</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @isset($roomTypes)
                    @foreach ($roomTypes as $roomType)
                        <tr>
                            <td>{{ $roomType->id }}</td>
                            <td>{{ $roomType->RoomTypeName }}</td>
                            <td>{{ $roomType->Description }}</td>
                            <td>{{ $roomType->ate }}</td>
                            <td>
                                <form action="}" method="POST" style="display:inline;">
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