@extends('layouts.app')
@section('content')
@include('in.leftside')
<div class="col-md-12">
    <?php
    $user=App\User::find($id);
    $posts=App\Posts::where('user_id','=',$user->id)->get();
    ?>
    <div class="col-md-1">
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
               Profile
            </div>
            <div class="card-body" >
              
                
                <div class="card col-md-5" style="float:left;border-radius:0%;margin-bottom:5px;border:none;box-shadow:0px 0px 0px ;border-right:.9px solid mediumaquamarine" >
                    <div class="card-header"   style="border:none;background:white">
                      <div class="image"  style="float:left;display:inline-block;margin-left:0px;height:100%;width:95%"> 
                           <img src="
                        https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRckzeL7ufOox9b3vTrzwDBzFSMXmWqMaEJ8B7r2hV4kEcmHKM8&s
                     " class="rounded " height="100%" width="100%" alt="{{$user->name}}">
                      </div>
                      
                    </div>
                </div>
            
            <div class="card" style="border:none;box-shadow:0px 0px 0px ;float:left;width:auto;">
                <div class="card-body" style="margin-bottom:5px ">
                    <div class="name" >
                        <h4> {{$user->name}} </h4>
                      </div>
                    <p style="float:left;display:inline-block;">Posts 12 </p>
                    <p style="float:right;display:inline-block;">Solution provider yes</p>
                       <br />  
                       
                       <h6> <a href="mailto: {{$user->email}}" title="send mail" target="_top">{{$user->email}}</a> </h6>
                </div>
            </div>
                
          </div>
               
        </div>
    </div>
    <div class="col-md-1">
    </div>
</div><br>
<div class="col-md-12">
    <div class="card" style="box-shadow:0px 0px 0px;border:0px;">
        <div class="card-header">
            Posts by {{$user->name}} .
        </div>
        <div class="card-body">
            @include('posts.allotherposts',['posts',$posts])
        </div>
    </div>

</div>

@endsection