@extends('layouts.app')
@section('content')
<script src="https://cdn.tiny.cloud/1/nt87b1kaammkt1auagr3fmrxdcuva64srnq71p7t72ttwhip/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: 'textarea',
        plugins:'link code',
        plugins:'table',
    auto_focus : "elm1",
    
      });
    </script>

@include('in.leftside')
  <div class="container">
@include('in.messages')
<h1><a href="/see/public/posts">Post</a>->Create Post</h1>
{!! Form::open(['action' => 'PostsController@store' , 'method' => 'POST']) !!}
<div class="form-group">
        {{Form::label('title', 'Name')}}
        {{Form::text('title', '',['class'=>'form-control','placeholder'=>'Enter tite..'])}}
    </div>
    <div class="form-group">
        {{Form::label('catrgory', 'Select a category')}}
        {{Form::select('size', array('1' => 'Education', '2' => 'Planting'), 'Education',['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '',['class'=>'form-control','id'=>'article','placeholder'=>'Enter Body..'])}}
    </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    
{!! Form::close() !!}
        
</div>
@endsection
