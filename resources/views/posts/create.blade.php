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

  <div class=" row" style="margin:1.7%;">
      <div class="col-md-8 card" style="    padding:20px;  box-shadow: .5px .5px 2px 1px #888888; ">
@include('in.messages')
<h1><a href="/see/public/posts">Post</a>->Create Post</h1>
{!! Form::open(['action' => 'PostsController@store' , 'method' => 'POST']) !!}
<div class="form-group">
        {{Form::label('title', 'Title',['style'=>'font-weight:bold'])}}
        <br><small>Ask any question(Relating to your projects / tasks ) ?</small>
        {{Form::text('title', '',['class'=>'form-control','placeholder'=>'Enter tite..'])}}
    </div>
    <div class="form-group">
        {{Form::label('catrgory', 'Select a category',['style'=>'font-weight:bold'])}}
        {{Form::select('size', array('1' => 'Education', '2' => 'Planting'), 'Education',['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body' ,['style'=>'font-weight:bold'])}}
        <br><small>Explain your question here .</small>
        {{Form::textarea('body', '',['class'=>'form-control','id'=>'article','placeholder'=>'Enter Body..'])}}
    </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    
{!! Form::close() !!}
</div>
<div class="col-md-4 col-md-offset-4" style="margin-top:2px;">
    <div class="card">
        <div class="card-header">
            Why/How to write a post ?
        </div>
        <div class="card-body">
            The community of solution providers is here to help you with any kind of problems relating to coding , software problems , math quiries and any non-educational question according with category.   
            <br><br>
            <div class="card-header">
                Try to make explaination on problem.
            </div>
            <ol>
                <li>Give details about your goal/goals.</li>
                <li>Add errors. </li>
                <li>Explain about your desired outcome.</li>
            </ol>
        
        <div class="card-header">
            Explain how you tried to solve it ?
        </div>
        <ol>
            <li>Details about your resources.</li>
            <li>Add some similar issues. </li>
            <li>If it had worked intially.</li>
        </ol>
    </div>
    </div>
    </div>
</div>
      
</div>
@endsection
