

@if (session('status'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    {{session('status')}}

    
</div>
  
@endif