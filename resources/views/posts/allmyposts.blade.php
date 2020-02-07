@extends('layouts.app')
@section('content')
@include('in.leftside')
    
<div class="col-md-12 row container" >
  
        
    <div class="col-md-2"></div>
    <div class="col-md-8 ">
        
        @include('posts.myposts')
    </div>
    
    <div class="col-md-2"></div>
</div>
@endsection
