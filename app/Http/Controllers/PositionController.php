<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;

class PositionController extends Controller
{
    public function index()
    {
        $positions = Position::all();
        return view('admin.positions.index', compact('positions'));
    }

    public function create()
    {
        return view('admin.positions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'PositionName' => 'required|string|max:255',
            'Description' => 'nullable|string',
        ]);

        Position::create($request->all());

        return redirect()->route('positions.index')
                         ->with([
                             'flag' => 'alert-success',
                             'message' => 'Chức vụ đã được thêm thành công!'
                         ]);
    }

    public function edit(Position $position)
    {
        return view('admin.positions.edit', compact('position'));
    }

    public function update(Request $request, Position $position)
    {
        $request->validate([
            'PositionName' => 'required|string|max:255',
            'Description' => 'nullable|string',
        ]);

        $position->update($request->all());

        return redirect()->route('positions.index')
                         ->with([
                             'flag' => 'alert-success',
                             'message' => 'Chức vụ đã được cập nhật thành công!'
                         ]);
    }

    public function destroy(Position $position)
    {
        $position->delete();

        return redirect()->route('positions.index')
                         ->with([
                             'flag' => 'alert-success',
                             'message' => 'Chức vụ đã được xóa thành công!'
                         ]);
    }
}
