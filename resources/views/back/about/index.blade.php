@extends('back.layout.app')
@section('title', 'About Page | Doctor Online Admin')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-file icon-gradient bg-happy-itmeo"></i>
            </div>
            <div>Edit About Page Content
                <div class="page-title-subheading">Fill the following form to edit the about page content.</div>
            </div>
        </div>
    </div>
</div>
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">About Form</h5>
        <form id="signupForm" method="post" action="{{route('admin.about.update', $about)}}" enctype="multipart/form-data" novalidate="novalidate">
        @csrf
        @method('PATCH')
            <div class="position-relative row form-group">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input name="title" id="title" type="text" class="form-control" value="{{$about->title}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('title')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="description" id="description" class="form-control tiny" required>{{$about->description}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('description')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="subtitle" class="col-sm-2 col-form-label">subtitle</label>
                <div class="col-sm-10">
                    <input type="text" name="subtitle" id="subtitle" value="{{$about->subtitle}}" class="form-control" required>
                    <span class="text-danger text-italic">{{$errors->first('subtitle')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-4">
                    <input name="image" id="image" type="file" class="form-control-file form-control">
                    <span class="text-danger text-italic">{{$errors->first('image')}}</span>
                    <small class="form-text text-muted">The width and height of the image must be taken into account.
                    </small>
                </div>
                <div class="col-sm-2 text-right">
                  <span class="d-inline-block mt-2 text-right">Current Image:</span>
                </div>
                <div class="col-sm-4">
                  <img src="{{asset('storage/images/about/' . $about->image)}}" alt="About Image" class="mw-100" style="border-radius: 10px;">
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