@extends('layouts.app')
@section('content')
@include('in.messages')

@include('in.leftside')

    <div class="col-md row">
        <div class="col-md-1">
        </div>
        <div class="col-md-7">
            <div class="card post">    
                        
                <div class="card-header" style="border-bottom:0px;">
                <h5>
                    <img src="
                    https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRckzeL7ufOox9b3vTrzwDBzFSMXmWqMaEJ8B7r2hV4kEcmHKM8&s
                    "  class="rounded-circle img-fluid zoom"  height="45px" width="50px" alt="{{$data[0]->user->name}}">
                    <a href="/see/public/pages/{{$data[0]->user->id}}" class="link" > {{$data[0]->user->name}}</a><small style="float:right">{{$data[0]->created_at}}</small></h5>
                        
                    <h5 style="display:inline-block;width:100%;"><p class="link" style="float:left;">{{$data[0]->title}}</p>
                      
                    </h5>
                    
                    </div>
                    <div class="card-body" >
                        {!! $data[0]->body !!}
                    </div>
                   <div style="display:inline-block;border-bottom:.2px solid rosybrown;">
                    
              <p style="font-size:14px;margin-left:5px;display:inline-block;
                padding:10px;color:rosybrown;cursor: pointer;">suggestion</p><p style="display:inline-block">{{count($data[2])}}</p>
                    

                    <!-------------counting solutions----------->
                  
                    <p style="font-size:14px;margin-left:5px;display:inline-block;
                      padding:10px;color:rosybrown;cursor: pointer;">solution</p><p style="display:inline-block">{{count($data[1])}}</p>

                </div>
                <div class="card" style="border:0.1px solid white">
                    
                            <strong>Suggestions</strong>
                    
                    <div class="card-body" style="display:inline-block">

                      <!------suggestion getting from --->
                      @include('suggestions.show', ['data' => [$data[2],$data[0]]]) 
                      <!------ending suggestion --->
                      
                        <!------suggestion creating --->
                        @include('suggestions.create', ['data' => $data[0]->id ])
                        <!------ending suggestion --->
                          
                    </div>
                </div>
                <div class="card" style="border:0.1px solid white">
                    <strong>Solution</strong>
            
            <div class="card-body" style="display:inline-block">
             
              <!------showing solutions --->
              @include('solution.show',['data'=>$data[1]]) 
              <!------ending  --->   
                 <!------creating solutions --->
                 @if(count($data[3])>0)
                 @foreach ($data[3] as $sp)
                 @if (((auth()->user()->id)==($sp->user_id))&&($sp->status=="verified"))
                 @include('solution.create',['post'=>$data[0]])
                 @endif   
                 @endforeach
                 @endif
                 <!------ending  --->   
                        
            </div>
            <br>
        </div>
                </div>
        </div>
        
        <div class="col-md-4"  style="
            z-index: 1;
            transition: 1s;">
            <div class="card">
                <div class="card-header">
                    <div class="container" style="float:left;display:inline-block;" >
                        <img src="
                        https://www.stickpng.com/assets/images/585e4bcdcb11b227491c3396.png
                        " class="rounded" height="45px" width="50px" alt="{{$data[0]->user->name}}">
                        
                  <h4 style="float:right;display:inline-block">  About Author</h4> 
                        </div>
                    
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-light table-striped">
                        <tbody>
                          
                            <hr />
                            <tr>
                              <td>Name</td>
                            <td>{{$data[0]->user->name}}</td>
                            </tr>
                          </tbody>
                          <tbody>
                            <tr>
                              <td>Email</td>
                            <td>{{$data[0]->user->email}}</td>
                            </tr>
                          
                          </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection