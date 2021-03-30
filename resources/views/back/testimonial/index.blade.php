@extends('back.layout.app')
@section('title', 'Testimonials | Doctor Online Admin')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-comments icon-gradient bg-sunny-morning"></i>
            </div>
            <div>testimonials
                <div class="page-title-subheading">You can manage the testimonials in this page.</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{route('admin.testimonial.create')}}" type="button" class="btn-shadow btn btn-info"
                    style="font-weight: bold;">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-plus fa-w-20"></i>
                    </span>
                    Add Testimonial
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    @forelse($testimonials as $testimonial)
    <div class="col-md-4">
        <div class="card-shadow-primary card-border mb-3 card bg-default">
            <div class="dropdown-menu-header">
                <div class="dropdown-menu-header-inner bg-default">
                    <div class="menu-header-content">
                        <div style="color: #495057 !important;">
                            <h5 class="menu-header-title">{{$testimonial->name}}</h5>
                            <h6 class="menu-header-subtitle">{{$testimonial->title}}</h6>
                            <q class="mt-3 d-inline-block">{{$testimonial->saying}}</q>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center d-block card-footer">
            <form class="d-inline" action="{{route('admin.testimonial.destroy', $testimonial)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button data-type="question" type="submit" class="mr-2 btn-icon btn-icon-only btn btn-outline-danger" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this testimonial?');">
                    <i class="fa fa-trash btn-icon-wrapper"> </i>
                </button>
                </form>

                <a href="{{route('admin.testimonial.edit', $testimonial)}}" type="button" class="btn btn-icon btn-icon-only btn-outline-success" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit">
                    <i class="fa fa-edit btn-icon-wrapper"> </i>
                </a>
            </div>
        </div>
    </div>
    @empty
    <h5 class="ml-3">No Testimonials Added Yet</h5>
    @endforelse
</div>
@endsection
