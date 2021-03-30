@extends('back.layout.app')
@section('title', 'Edit Team Member | Doctor Online Admin')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-edit icon-gradient bg-happy-fisher"></i>
            </div>
            <div>Edit Team Member
                <div class="page-title-subheading">Fill the following form to edit the team member</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{route('admin.teamMember.index')}}" type="button" class="btn-shadow btn btn-info"
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
        <h5 class="card-title">Team Member Form</h5>
        <form id="signupForm" method="post" action="{{route('admin.teamMember.update', $teamMember)}}" enctype="multipart/form-data" novalidate="novalidate">
        @csrf
        @method('PATCH')
            <div class="position-relative row form-group">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input name="name" id="name" placeholder="Shawkat Mehran" type="text" class="form-control" value="{{$teamMember->name}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('name')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input name="title" id="title" placeholder="COO" type="text" value="{{$teamMember->title}}" class="form-control" maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('title')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="bio" class="col-sm-2 col-form-label">Bio</label>
                <div class="col-sm-10">
                    <textarea name="bio" id="bio" class="form-control" placeholder="Ben was born in..." required>{{$teamMember->bio}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('bio')}}</span>
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
                  <img src="{{asset('storage/images/team/' . $teamMember->image)}}" alt="teamMember Image" class="mw-100" style="border-radius: 10px;">
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
