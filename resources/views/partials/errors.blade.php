@if(session()->has('errors'))
<div class="alert alert-danger alert-dismissible" role="alert" style="margin-top:3rem">

    <strong>{!! session()->get('errors') !!}</strong>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif  