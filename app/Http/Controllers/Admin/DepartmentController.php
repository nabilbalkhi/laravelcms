<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DepartmentRequest;
use App\Models\Department;
use Illuminate\Support\Facades\Storage;

class DepartmentController extends Controller
{
    public function index()
    {
      $departments = Department::all();
      return view('back.department.index', compact('departments'));
    }

    public function create()
    {
      return view('back.department.create');
    }

    public function store(DepartmentRequest $request)
    {
      $department_data = $request->validated();
      $iconPath = $request->file('icon')->store('public/images/department');
      $icon = basename($iconPath);
      $department_data['icon'] = $icon;
      Department::create($department_data);
      return redirect(route('admin.department.index'));
    }

    public function edit(Department $department)
    {
      return view('back.department.edit', compact('department'));
    }

    public function update(DepartmentRequest $request, Department $department)
    {
      $department_data = $request->validated();
      if ($request->hasFile('icon')){
        $preIcon = Department::find($department['id'])['icon'];
        Storage::delete('public/images/department/' . $preIcon);
        $iconPath = $request->file('icon')->store('public/images/department');
        $icon = basename($iconPath);
        $department_data['icon'] = $icon;
      }
      Department::where('id', $department['id'])->update($department_data);
      return redirect(route('admin.department.index'));
    }

    public function destroy(Department $department)
    {
      $preIcon = Department::find($department['id'])['icon'];
      Storage::delete('public/images/department/' . $preIcon);
      $department->delete();
      return back();
    }
}
