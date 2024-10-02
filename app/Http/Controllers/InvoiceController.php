<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoices;

class InvoiceController extends Controller
{
    // Hiển thị danh sách hóa đơn
    public function index()
    {
        $invoices = Invoices::all();
        return view('admin.invoices.index', compact('invoices'));
    }

    // Hiển thị form chỉnh sửa hóa đơn
    public function edit($id)
    {
        $invoice = Invoice::find($id);
        return view('admin.invoices.edit', compact('invoice'));
    }

    // Cập nhật hóa đơn
    public function update(Request $request, $id)
    {
        $invoice = Invoice::find($id);

        // Cập nhật các trường có thể chỉnh sửa
        $invoice->InvoiceDate = $request->InvoiceDate;
        $invoice->TotalAmount = $request->TotalAmount;
        $invoice->PaymentStatus = $request->PaymentStatus;

        $invoice->save();

        // Thêm thông báo cập nhật thành công
        session()->flash('flag', 'alert-success');
        session()->flash('message', 'Hóa đơn đã được cập nhật thành công!');

        return redirect()->route('invoices.index');
    }

    // Xóa hóa đơn
    public function destroy($id)
    {
        $invoice = Invoice::find($id);

        if (!$invoice) {
            return redirect()->route('invoices.index')->with('error', 'Không tìm thấy hóa đơn.');
        }

        $invoice->delete();

        // Thêm thông báo xóa thành công
        session()->flash('flag', 'alert-success');
        session()->flash('message', 'Hóa đơn đã được xóa thành công!');

        return redirect()->route('invoices.index');
    }
}
