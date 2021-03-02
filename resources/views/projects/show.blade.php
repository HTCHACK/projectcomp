@extends('layouts.app')

@section('content')

<div class="col-md-9 col-md-9 col-sm-9" style="margin-top:2rem">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-6">{{ $project->name }}</h1>
        <p>{{ $project->description }}</p>
        </div>
    </div>
</div>

    <div class="col-md-3 order-md-2 mb-4" style="padding-top:2rem">
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h4 class="my-3"><a href="">Actions</a></h4>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0"><a href="/project.loc/public/projects/{{$project->id}}/edit/">Edit</a></h6>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0"><a href="/project.loc/public/projects/create/{{$project->id}}">Add Project</a></h6>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0"><a href="{{ route('companies.index') }}">All Companies</a></h6>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0"><a href="{{ route('companies.show') }}">View Company</a></h6>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">
                <a href="" onclick="var result = confirm('Are you sure you want to delete');
                if(result){
                  event.preventDefault();
                  document.getElementById('logout-form').submit();
                }">
                  Delete
                </a>
                <form id="logout-form" action="{{ route('projects.destroy',[$project->id]) }}" method="post" style="display:none;background-color:#007bff;">
                  <input type="hidden" name="_method" value='delete'>
                  {{csrf_field()}}
                </form>
              </h6>
            </div>
          </li>
      </ul>
      </div>

@endsection