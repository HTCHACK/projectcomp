@extends('layouts.app')

@section('content')



<div class="col-md-9 col-md-9 col-sm-9" style="padding-top:2rem">
    <h2 style="padding-bottom: 1rem">Create New Company</h2>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    
<form method="post" action="{{ route('companies.store')}}">

    {{ csrf_field() }}
    <!--<input type="hidden" name="_method" value="put">--->
    <div class="form-group">
        <label for="company-name">Name<span class="required">*</span></label>
        <input placeholder="Enter name"
               id="company-name"
               required
               name="name"
               spellcheck="false"
               class="form-control"
        />
    </div>
    <div class="form-group">
        <label for="company-content">Description<span class="required">*</span></label>
        <textarea placeholder="Description of Company"
               id="company-content"
               required 
               style="height:200px;"
               name="description"
               spellcheck="false"
               class="form-control" 
        ></textarea>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-primary" value="Submit" />
    </div>

</form>

</div>

    <div class="col-md-3 order-md-2 mb-4" style="padding-top:2rem">
       
          <ul class="list-group mb-3">
            
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0"><a href="/project.loc/public/companies">View Companies</a></h6>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0"><a href="/project.loc/public/companies">All Companies</a></h6>
                </div>
              </li>
          </ul>
      </div>


 @endsection