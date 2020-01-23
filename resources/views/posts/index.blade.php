@extends('layouts.app')
@section('content')
@include('in.leftside')
@include('in.messages')
<div class="col-md-8 col-md-offset-1" >
   
    <div class="justify-content-center ">
        <div class="">
            <br>

            <div class="">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                    @if (count($posts)<=0)
                        <p>No post yet</p>
                    @else
                        
                    @foreach ($posts as $post)
                    <div class="card">    
                        
                    <div class="card-header" style="background:rosybrown;">
                    <h5>{{$post->user->name}}</h5>
                            </div>
                    <div class="card-header">
                    <h5>{{$post->title}}</h5>
                        </div>
                        <div class="card-body" >
                            <p>{!! $post->body !!}</p>
                            <button class="btn btn-outline-info " style="float:right">Read more</button>
                        </div><hr>
                       <div style="display:inline-block;">
                        
                     <i style="font-size:24px;padding:10px;color:rosybrown;width:35px;
                     cursor: pointer;
                     
                     
                     " class="fa fa-thumbs-up"></i><p style="display:inline-block;">2</p>
                                     
                     <i style="font-size:24px;margin-left:40px;
                                -webkit-transform: scaleX(-1);
                                  transform: scaleX(-1);
                     padding:10px;color:rosybrown;width:35px;cursor: pointer;" class="fa fa-thumbs-down"></i><p style="display:inline-block">22</p>

                  <p style="font-size:14px;margin-left:40px;display:inline-block;
                    padding:10px;color:rosybrown;cursor: pointer;">suggestion</p><p style="display:inline-block">14</p>
                        
                        <p style="font-size:14px;margin-left:40px;display:inline-block;
                          padding:10px;color:rosybrown;cursor: pointer;">solution</p><p style="display:inline-block">14</p>

                    </div>
                    </div>
                    <br>
                    @endforeach
                    @endif
            </div>
        </div>
    </div>
   
 </div>

@endsection