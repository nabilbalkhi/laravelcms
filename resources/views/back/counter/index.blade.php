@extends('back.layout.app')
@section('title', 'Counters | Doctor Online Admin')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-building icon-gradient bg-malibu-beach"></i>
            </div>
            <div>Edit Counters
                <div class="page-title-subheading">Fill the following form to edit the Counters.</div>
            </div>
        </div>
    </div>
</div>
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Counter Form</h5>
        <form id="signupForm" method="post" action="{{route('admin.counter.update', 1)}}" novalidate="novalidate">
            @csrf
            @method('PATCH')
            <div class="position-relative row form-group">
                <label for="num1" class="col-sm-2 col-form-label">Counter 1</label>
                <div class="col-sm-4">
                    <input name="num1" id="num1" type="text" class="form-control-file form-control" value="{{$counter->num1}}" maxlength="16"  >
                    <span class="text-danger text-italic">{{$errors->first('num1')}}</span>
                </div>
                <label for="val1" class="col-sm-2 col-form-label text-right">Value One</label>
                <div class="col-sm-4">
                    <input name="val1" id="val1" type="text" class="form-control-file form-control" value="{{$counter->val1}}" maxlength="16"  >
                    <span class="text-danger text-italic">{{$errors->first('val1')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="description1" class="col-sm-2 col-form-label">Description 1</label>
                <div class="col-sm-10">
                    <textarea name="description1" id="description1" type="description1" class="form-control" required>{{$counter->description1}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('description1')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="num2" class="col-sm-2 col-form-label">Counter 2</label>
                <div class="col-sm-4">
                    <input name="num2" id="num2" type="text" class="form-control-file form-control" value="{{$counter->num2}}" maxlength="16"  >
                    <span class="text-danger text-italic">{{$errors->first('num2')}}</span>
                </div>
                <label for="val2" class="col-sm-2 col-form-label text-right">Value 2</label>
                <div class="col-sm-4">
                    <input name="val2" id="val2" type="text" class="form-control-file form-control" value="{{$counter->val2}}" maxlength="16"  >
                    <span class="text-danger text-italic">{{$errors->first('val2')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="description2" class="col-sm-2 col-form-label">Description 2</label>
                <div class="col-sm-10">
                    <textarea name="description2" id="description2" type="description1" class="form-control" required>{{$counter->description2}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('description2')}}</span>
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
