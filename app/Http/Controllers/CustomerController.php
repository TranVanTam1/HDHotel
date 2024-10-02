<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Hiển thị danh sách khách hàng
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customers.index', compact('customers'));
    }

    // Hiển thị form thêm khách hàng
public function create()
{
    return view('admin.customers.create');
}

// Lưu thông tin khách hàng mới
public function store(Request $request)
{
    $request->validate([
        'UserID' => 'required|string|max:255',
        'FullName' => 'required|string|max:255',
        'Phone' => 'required|string|max:15',
        'Address' => 'nullable|string|max:255',
    ]);

    Customer::create($request->all());

    return redirect()->route('customers.index')->with('success', 'Khách hàng đã được thêm thành công.');
}


    // Hiển thị form chỉnh sửa khách hàng
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('admin.customers.edit', compact('customer'));
    }

    // Cập nhật thông tin khách hàng
    public function update(Request $request, $id)
    {
        $request->validate([
            'FullName' => 'required|string|max:255',
            'Phone' => 'required|string|max:15',
            'Address' => 'nullable|string|max:255',
        ]);

        $customer = Customer::findOrFail($id);
        $customer->update($request->all());

        return redirect()->route('customers.index')->with('success', 'Khách hàng đã được cập nhật thành công.');
    }

    // Xóa khách hàng
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'Khách hàng đã được xóa thành công.');
    }
}
