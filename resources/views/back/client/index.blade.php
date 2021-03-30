@extends('back.layout.app')
@section('title', 'Clients | Doctor Online Admin')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-handshake-o icon-gradient bg-arielle-smile"></i>
            </div>
            <div>Clients
                <div class="page-title-subheading">You can manage the clients in this page.</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{route('admin.client.create')}}" type="button" class="btn-shadow btn btn-info" style="font-weight: bold;">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-plus fa-w-20"></i>
                    </span>
                    Add Client
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
  @forelse($clients as $client)
    <div class="col-md-4">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">{{$client->name}}</h5>
                <h6 class="card-subtitle">{{$client->link}}</h6>
                <img class="card-img-bottom" src="{{asset('storage/images/client/' . $client->image)}}" alt="">
            </div>
            <div class="d-block text-right card-footer">
                <form class="d-inline" action="{{route('admin.client.destroy', $client)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button data-type="question" type="submit" class="mr-2 btn-icon btn-icon-only btn btn-outline-danger" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this client?');">
                    <i class="fa fa-trash btn-icon-wrapper"> </i>
                </button>
                </form>

                <a href="{{route('admin.client.edit', $client)}}" type="button" class="btn btn-icon btn-icon-only btn-outline-success" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit">
                    <i class="fa fa-edit btn-icon-wrapper"> </i>
                </a>
            </div>
        </div>
    </div>
  @empty
    <h5 class="ml-3">No clients Added Yet</h5>
  @endforelse
</div>
@endsection
