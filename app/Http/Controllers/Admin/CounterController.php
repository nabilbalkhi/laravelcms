<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CounterRequest;
use App\Models\Counter;

class CounterController extends Controller
{
    public function index()
    {
      $counter = Counter::where('id', 1)->first();
      return view('back.counter.index', compact('counter'));
    }

    public function update(CounterRequest $request, Counter $counter)
    {
      $counter_data = $request->validated();
      Counter::where('id', 1)->update($counter_data);
      return back();
    }

}
