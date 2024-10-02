<?php

namespace App\Http\Controllers;

use App\Models\FailedJobs;
use Illuminate\Http\Request;

class FailedjobController extends Controller
{
    // Hiển thị danh sách job bị lỗi
    public function index()
    {
        $failedJobs = Failedjobs::all();
        return view('admin.failed_jobs.index', compact('failedJobs'));
    }

    // Xóa job bị lỗi
    public function destroy($id)
    {
        $failedJob = FailedJobs::find($id);
        
        if (!$failedJob) {
            return redirect()->route('failed_jobs.index')->with('error', 'Không tìm thấy job.');
        }

        $failedJob->delete();

        // Thêm thông báo xóa thành công
        session()->flash('flag', 'alert-success');
        session()->flash('message', 'Job đã được xóa thành công!');

        return redirect()->route('failed_jobs.index');
    }
}
