@extends('layouts.app')

@section('content')

<div class="col-md-9 col-md-9 col-sm-9" style="margin-top:2rem">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-6">{{ $company->name }}</h1>
        <p>{{ $company->description }}</p>
        </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        @foreach ($company->projects as $project)
            <div class="col-md-4" style="background-color:#fff ;margin:0.5rem;">
            <h2>{{ $project->name }}</h2>
            <p>{{ $project->description }}</p>
            <p><a class="btn btn-info" href="/project.loc/public/projects/{{ $project->id }}" role="button">View Project »</a></p>
            </div>
        @endforeach
      </div>

    </div> <!-- /container -->
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
              <h6 class="my-0"><a href="/project.loc/public/companies/{{$company->id}}/edit/">Edit</a></h6>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0"><a href="/project.loc/public/projects/create/{{$company->id}}">Add Project</a></h6>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0"><a href="/project.loc/public/companies/create/">Create New Company</a></h6>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0"><a href="/project.loc/public/companies/">All Companies</a></h6>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">
                <a href="" onclick="var result = confirm('Are you sure you want to delete');
                if(result){
                  event.preventDefault();
                  document.getElementById('index').submit();
                }">
                  Delete
                </a>
                <form id="index" action="{{ route('companies.destroy',[$company->id]) }}" method="post" style="display:none;background-color:#007bff;">
                  <input type="hidden" name="_method" value='delete'>
                  {{csrf_field()}}
                </form>
              </h6>
            </div>
          </li>
      </ul>
      </div>

@endsection