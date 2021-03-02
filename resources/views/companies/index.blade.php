@extends('layouts.app')

@section('content')
<div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3" style="padding-top:2rem">
    <div class="card">
        <div class="card-header bg-primary" style="color:#fff;font-size: 20px">
          Companies
          <a class="btn btn-danger" style="float: right;" href="/project.loc/public/companies/create/">Create New Company</a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

          <ul class="list-group">
            @foreach($companies as $company)
            <li class="list-group-item"><a href="/project.loc/public/companies/{{ $company->id }}">{{ $company->name }} - User ID <strong>{{ $company->user_id }}</strong></a></li>
            @endforeach
        </ul>

        </div>
      </div>
</div>


@endsection

