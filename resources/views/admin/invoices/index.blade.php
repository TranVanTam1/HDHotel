<!-- resources/views/invoices/index.blade.php -->

@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Danh Sách Hóa Đơn</h2>

            <!-- Nút Thêm Mới -->
            <div class="mb-3">
                <!-- <a href="{{ route('invoices.create') }}" class="btn btn-primary">Thêm Hóa Đơn Mới</a> -->
            </div>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Booking ID</th>
                        <th>Ngày Tạo Hóa Đơn</th>
                        <th>Tổng Tiền</th>
                        <th>Trạng Thái Thanh Toán</th>
                        <th>Ngày Tạo</th>
                        <th>Ngày Cập Nhật</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($invoices as $invoice)
                        <tr>
                            <td>{{ $invoice->id }}</td>
                            <td>{{ $invoice->BookingID }}</td>
                            <td>{{ $invoice->InvoiceDate }}</td>
                            <td>{{ $invoice->TotalAmount }}</td>
                            <td>{{ $invoice->PaymentStatus }}</td>
                            <td>{{ $invoice->created_at }}</td>
                            <td>{{ $invoice->updated_at }}</td>
                            <td>
                                <a href="{{ route('invoices.edit', $invoice->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                                
                                <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa hóa đơn này không?');" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">Không có hóa đơn nào.</td>
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
