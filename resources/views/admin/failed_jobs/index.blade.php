

@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Danh Sách Job Bị Lỗi</h2>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>UUID</th>
                        <th>Kết Nối</th>
                        <th>Hàng Đợi</th>
                        <th>Dữ Liệu</th>
                        <th>Ngoại Lệ</th>
                        <th>Thời Gian Bị Lỗi</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($failedJobs as $job)
                        <tr>
                            <td>{{ $job->id }}</td>
                            <td>{{ $job->uuid }}</td>
                            <td>{{ $job->connection }}</td>
                            <td>{{ $job->queue }}</td>
                            <td>{{ $job->payload }}</td>
                            <td>{{ $job->exception }}</td>
                            <td>{{ $job->failed_at }}</td>
                            <td>
                                <form action="{{ route('failed_jobs.destroy', $job->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa job này không?');" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">Không có job nào bị lỗi.</td>
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
