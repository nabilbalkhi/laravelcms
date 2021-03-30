<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceRequest;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
  public function index()
  {
    $services = Service::all();
    return view('back.service.index', compact(['services']));
  }

  public function create()
  {
    return view('back.service.create');
  }

  public function store(ServiceRequest $request)
  {
    $service_data = $request->validated();
    $iconPath = $request->file('icon')->store('public/images/service');
    $icon = basename($iconPath);
    $service_data['icon'] = $icon;
    Service::create($service_data);
    return redirect(route('admin.service.index'));
  }

  public function edit(Service $service)
  {
    return view('back.service.edit', compact(['service']));
  }

  public function update(ServiceRequest $request, Service $service)
  {
    $service_data = $request->validated();
    if ($request->hasFile('icon')){
      $preIcon = Service::find($service['id'])['icon'];
      Storage::delete('public/images/service/' . $preIcon);
      $iconPath = $request->file('icon')->store('public/images/service');
      $icon = basename($iconPath);
      $service_data['icon'] = $icon;
    }
    Service::where('id', $service['id'])->update($service_data);
    return redirect(route('admin.service.index'));
  }

  public function destroy(Service $service)
  {
    $preIcon = Service::find($service['id'])['icon'];
    Storage::delete('public/images/service/' . $preIcon);
    $service->delete();
    return back();
  }
}
