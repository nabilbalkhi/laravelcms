@extends('back.layout.app')
@section('title', 'Edit department | Doctor Online Admin')
@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-edit icon-gradient bg-plum-plate"></i>
            </div>
            <div>Edit department
                <div class="page-title-subheading">Fill the following form to edit the department</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{route('admin.department.index')}}" type="button" class="btn-shadow btn btn-info" style="font-weight: bold;">
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
        <h5 class="card-title">Department Form</h5>
        <form id="signupForm" method="post" action="{{route('admin.department.update', $department)}}"
            enctype="multipart/form-data" novalidate="novalidate">
            @csrf
            @method('PATCH')
            
            <div class="position-relative row form-group">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input name="title" id="title" placeholder="type department name" type="text"
                        class="form-control" value="{{$department->title}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('title')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="description" id="description" class="form-control" required
                        placeholder="Description Of the department">{{$department->description}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('description')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                <div class="col-sm-4">
                    <input name="icon" id="icon" type="file" class="form-control-file form-control">
                    <span class="text-danger text-italic">{{$errors->first('icon')}}</span>
                    <small class="form-text text-muted">The width and height of the icon must be taken into account.
                    </small>
                </div>
                <div class="col-sm-2 text-right">
                    <span class="d-inline-block mt-2 text-right">Current Icon:</span>
                </div>
                <div class="col-sm-4">
                    <img src="{{asset('storage/images/department/' . $department->icon)}}" alt="department Icon"
                        class="mw-100 border" style="border-radius: 10px;">
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
