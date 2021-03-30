@extends('back.layout.app')
@section('title', 'Add Slider | Doctor Online Admin')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-plus icon-gradient bg-amy-crisp"></i>
            </div>
            <div>Add Slider
                <div class="page-title-subheading">Fill the following form to add a slider</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{route('admin.slider.index')}}" type="button" class="btn-shadow btn btn-info"
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
        <h5 class="card-title">Slider Form</h5>
        <form id="signupForm" method="post" action="{{route('admin.slider.store')}}" enctype="multipart/form-data" novalidate="novalidate">
        @csrf
            <div class="position-relative row form-group">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input name="title" id="title" placeholder="You health is important to us" type="text" class="form-control" value="{{old('title')}}" required minlength="6" maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('title')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="subtitle" class="col-sm-2 col-form-label">Subtitle</label>
                <div class="col-sm-10">
                    <input name="subtitle" id="subtitle" placeholder="We will do everything in our ablities ..." type="text" class="form-control" value="{{old('subtitle')}}" required maxlength="600">
                    <span class="text-danger text-italic">{{$errors->first('subtitle')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input name="image" id="image" type="file" class="form-control-file form-control" required>
                    <span class="text-danger text-italic">{{$errors->first('image')}}</span>
                    <small class="form-text text-muted">The width and height of the image must be taken into account.
                    </small>
                </div>
                
            </div>
            <div class="position-relative row form-check">
                <div class="col-sm-10 offset-sm-2 pl-0">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
