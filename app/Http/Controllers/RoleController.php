<?php

// app/Http/Controllers/RoleController.php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'RoleName' => 'required|string|max:255',
            'Description' => 'nullable|string',
        ]);

        Role::create($request->all());

        return redirect()->route('roles.index')->with([
            'flag' => 'alert-success',
            'message' => 'Vai trò đã được thêm thành công!'
        ]);
    }

    public function edit(Role $role)
    {
        return view('admin.roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'RoleName' => 'required|string|max:255',
            'Description' => 'nullable|string',
        ]);

        $role->update($request->all());

        return redirect()->route('roles.index')->with([
            'flag' => 'alert-success',
            'message' => 'Vai trò đã được cập nhật thành công!'
        ]);
    }

    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('roles.index')->with([
            'flag' => 'alert-success',
            'message' => 'Vai trò đã được xóa thành công!'
        ]);
    }
}
