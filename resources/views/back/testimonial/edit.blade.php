@extends('back.layout.app')
@section('title', 'Edit Testimonial | Doctor Online Admin')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-edit icon-gradient bg-sunny-morning "></i>
            </div>
            <div>Edit Testimonial
                <div class="page-title-subheading">Fill the following form to edit the testimonial</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{route('admin.testimonial.index')}}" type="button" class="btn-shadow btn btn-info"
                    style="font-weight: bold;">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-arrow-left fa-w-20"></i>
                    </span>
                    Go Back
                </a>
            </div>
        </div>
    </div>
</div>
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Testimonial Form</h5>
        <form id="signupForm" method="post" action="{{route('admin.testimonial.update', $testimonial)}}" enctype="multipart/form-data" novalidate="novalidate">
        @csrf
        @method('PATCH')
            <div class="position-relative row form-group">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input name="name" id="name" placeholder="USAID" type="text" class="form-control" value="{{$testimonial->name}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('name')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input name="title" id="title" placeholder="http://www.usaid.org" type="text" value="{{$testimonial->title}}" class="form-control" maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('title')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="saying" class="col-sm-2 col-form-label">Saying</label>
                <div class="col-sm-10">
                    <textarea name="saying" id="saying" class="form-control" placeholder="Binary is the BEST" required>{{$testimonial->saying}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('saying')}}</span>
                </div>
            </div>
            <div class="position-relative row form-check">
                <div class="col-sm-4 offset-sm-2 pl-0">
                    <button class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
