@extends('back.layout.app')
@section('title', 'Add faq | Doctor Online Admin')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-plus icon-gradient bg-sunny-morning"></i>
            </div>
            <div>Add Question
                <div class="page-title-subheading">Fill the following form to add a question</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{route('admin.faq.index')}}" type="button" class="btn-shadow btn btn-info"
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
        <h5 class="card-title">FAQ Form</h5>
        <form id="signupForm" method="post" action="{{route('admin.faq.store')}}" enctype="multipart/form-data" novalidate="novalidate">
        @csrf
            <div class="position-relative row form-group">
                <label for="question" class="col-sm-2 col-form-label">Question</label>
                <div class="col-sm-10">
                    <input name="question" id="question" placeholder="When are you available?" type="text" class="form-control" value="{{old('question')}}" required>
                    <span class="text-danger text-italic">{{$errors->first('question')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="answer" class="col-sm-2 col-form-label">Answer</label>
                <div class="col-sm-10">
                    <textarea name="answer" id="answer" class="form-control" placeholder="Everyday" required>{{old('answer')}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('answer')}}</span>
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
