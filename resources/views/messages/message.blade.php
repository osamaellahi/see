@extends('layouts.app')
@section('content')
@include('in.leftside')
<div class="container card">
    <h4 class="card-header" style="background:white">
        <img src="
        https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRckzeL7ufOox9b3vTrzwDBzFSMXmWqMaEJ8B7r2hV4kEcmHKM8&s
        "  class="rounded-circle img-fluid "  height="45px" width="50px" alt="{{$data[0]->name}}">
        <a href="#">{{$data[0]->name}}</a></h4> 
    <div style="overflow:scroll;height:450px;background:white;"  class="card-body"> 
    @foreach ($data[1] as $i)
    @if($i->from_user_id!=auth()->user()->id)
    
    <div  style="width:100%;"><p style="float: left;width:100%;" ><div style="float:left;margin-right:10%" class="message">{{$i->message}}</div></p></div>
        
  @endif
  @if(($i->from_user_id)==(auth()->user()->id))
  
    <div  style="width:100%;"><p style="float: right;width:100%;"><div style="float:right;margin-left:10%" class="message">{{$i->message}}</div></p></div>

@endif
   
    @endforeach
    
    </div>
    {!! Form::open(['action' => 'messageController@store' , 'method' => 'POST']) !!}
    <div class="card-footer">
        <div class="input-group mb-3">
            {{Form::text('toid', $data[0]->id,['style'=>'display:none'])}}
            
            {{Form::text('message', '',['class'=>'form-control','placeholder'=>'Enter message..','aria-label'=>'message','aria-describedby'=>'basic-addon2'])}}
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2">
                  {{Form::submit('>',['class'=>'btn btn-primary'])}}
                </span>
            </div>
          </div>
   </div> 
       
{!! Form::close() !!}
    
</div>

@endsection