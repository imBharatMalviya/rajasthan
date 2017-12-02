@if($errors->any())
<div class="alert alert-danger alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    @foreach($errors->all() as $error)
    {{ $error }} <br/>
    @endforeach
  </div>
@endif