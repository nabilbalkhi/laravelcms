@extends('back.layout.app')
@section('title', 'Add Service | Doctor Online Admin')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-plus icon-gradient bg-plum-plate"></i>
            </div>
            <div>Add Service
                <div class="page-title-subheading">Fill the following form to add a service</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{route('admin.service.index')}}" type="button" class="btn-shadow btn btn-info"
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
        <h5 class="card-title">Service Form</h5>
        <form id="signupForm" method="post" action="{{route('admin.service.store')}}" enctype="multipart/form-data" novalidate="novalidate">
        @csrf
            <div class="position-relative row form-group">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input name="title" id="title" placeholder="Cardiography Service" type="text" class="form-control" value="{{old('title')}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('title')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="description" id="description" class="form-control tiny" required placeholder="Description Of the Service ">{{old('description')}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('description')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                <div class="col-sm-10">
                    <input name="icon" id="icon" type="file" class="form-control-file form-control" required>
                    <span class="text-danger text-italic">{{$errors->first('icon')}}</span>
                    <small class="form-text text-muted">The width and height of the icon must be taken into account.
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
