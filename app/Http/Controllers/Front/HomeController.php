<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ContactRequest;
use App\Models\About;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\Department;
use App\Models\Faq;
use App\Models\Service;
use App\Models\Slider;
use App\Models\TeamMember;
use App\Models\Testimonial;

class HomeController extends Controller
{
  public function index(){
    $sliders = Slider::all();
    $about = About::where('id', 1)->first();
    $departments = Department::all();
    $services = Service::all();
    $faq = Faq::all();
    $members = TeamMember::all();
    $testimonials = Testimonial::all();
    $counter = Counter::where('id', 1)->first();
    return view('front.home', compact(['sliders', 'about', 'testimonials', 'departments', 'services', 'faq', 'members', 'counter']));
  }
}
