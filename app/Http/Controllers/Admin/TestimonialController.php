<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
  public function index()
  {
    $testimonials = Testimonial::all();
    return view('back.testimonial.index', compact('testimonials'));
  }

  public function create()
  {
    return view('back.testimonial.create');
  }

  public function store(TestimonialRequest $request)
  {
    $testimonial_data = $request->validated();
    Testimonial::create($testimonial_data);
    return redirect(route('admin.testimonial.index'));
  }

  public function edit(Testimonial $testimonial)
  {
    return view('back.testimonial.edit', compact('testimonial'));
  }

  public function update(TestimonialRequest $request, Testimonial $testimonial)
  {
    $testimonial_data = $request->validated();
    Testimonial::where('id', $testimonial['id'])->update($testimonial_data);
    return redirect(route('admin.testimonial.index'));
  }

  public function destroy(Testimonial $testimonial)
  {
    $testimonial->delete();
    return back();
  }
}
