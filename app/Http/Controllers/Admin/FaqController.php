<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FaqRequest;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
      $faq = Faq::all();
      return view('back.faq.index', compact('faq'));
    }

    public function create()
    {
      return view('back.faq.create');
    }

    public function store(FaqRequest $request)
    {
      $question_data = $request->validated();
      Faq::create($question_data);
      return redirect(route('admin.faq.index'));
    }

    public function edit(Faq $faq)
    {
      return view('back.faq.edit', compact('faq'));
    }

    public function update(FaqRequest $request, Faq $faq)
    {
      $question_data = $request->validated();
      Faq::where('id', $faq->id)->update($question_data);
      return redirect(route('admin.faq.index'));
    }

    public function destroy(Faq $faq)
    {
      $faq->delete();
      return back();
    }
}
