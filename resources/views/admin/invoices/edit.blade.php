@extends('admin.master')

@section('content')
<h1>Chỉnh sửa Hóa đơn</h1>
<form action="{{ route('invoices.update', $invoice->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label for="InvoiceDate">Ngày hóa đơn</label>
        <input type="date" name="InvoiceDate" class="form-control" value="{{ $invoice->InvoiceDate }}">
    </div>

    <div class="form-group">
        <label for="TotalAmount">Tổng tiền</label>
        <input type="number" name="TotalAmount" class="form-control" value="{{ $invoice->TotalAmount }}">
    </div>

    <div class="form-group">
        <label for="PaymentStatus">Trạng thái thanh toán</label>
        <select name="PaymentStatus" class="form-control">
            <option value="Paid" {{ $invoice->PaymentStatus == 'Paid' ? 'selected' : '' }}>Đã thanh toán</option>
            <option value="Pending" {{ $invoice->PaymentStatus == 'Pending' ? 'selected' : '' }}>Chờ thanh toán</option>
            <option value="Cancelled" {{ $invoice->PaymentStatus == 'Cancelled' ? 'selected' : '' }}>Đã hủy</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
@endsection
