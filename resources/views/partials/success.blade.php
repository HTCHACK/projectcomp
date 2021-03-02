
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible" role="alert" style="margin-top:3rem">

    <strong>{!! session()->get('success') !!}</strong>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif  