@extends('layouts.app')

@section('content')
@include('in.leftside')

<div class="row" style="margin-left:2%;margin-right:2%" >
    <div class="col-md-11">
        <div class="card">
            <div class="card-header">
            <h5 style="float:left">
                <img src="
                https://www.stickpng.com/assets/images/585e4bcdcb11b227491c3396.png
                " class="rounded" height="45px" width="50px" alt="{{Auth::user()->name}}">
                
            </h5>
            <button class="btn btn-outline-info" style="float:right">edit your profile</button>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-light table-striped">
                    <tbody>
                        <hr />
                        <tr>
                          <td>Name</td>
                        <td>{{Auth::user()->name}}</td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr>
                          <td>Email</td>
                        <td>{{Auth::user()->email}}</td>
                        </tr>
                      
                      </tbody>
                </table>
            </div>

    </div >

    </div>
</div>
<br>
    <div class="row " style="margin-left:1.5%;margin-right:1.5%">
        <div class="col-md-4 " >
          @include('solutionprovider.apply')
         </div>
        <div class="col-md-7 col-md-offset-1" >
            <div class="card" style="border:1px solid mediumaquamarine;margin-left:2px;border:0px">
                 
                <h5 class="card-header" >People near you.<small><a href="./people" style="float:right" class="link">see all <i class="fa fa-arrow-circle-right"></i></small></a></h5>
                <?php 
                    $people=App\User::all();
                    $i=0;
                ?>
                <div class="card-body row">
                    @foreach ($people as $p)
                    <?php
                    $i++; 
                    ?>
                    <div class="card col-md-12" style="float:left;margin-bottom:5px;border-radius:0%" >
                        <div class="card-header" >
                          <div class="image"  style="float:left;display:inline-block;"> 
                               <img src="
                            https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRckzeL7ufOox9b3vTrzwDBzFSMXmWqMaEJ8B7r2hV4kEcmHKM8&s
                         " class="rounded-circle zoom" height="55" width="60" alt="{{$p->name}}">
                          </div>
                          <div class="name"  style="float:left;display:inline-block;padding-top:8px;padding-left:5px;">
                           <h4> {{$p->name}} </h4>
                          </div>
                          <div class="icons" style="float:right;display:inline-block;">
                              <a href="" class="link" style="color:black;">Lets chat <i style="color:blueviolet;"class="fa fa-envelope circle"></i></a>
                                @include('group.add')
                            </div>
                        </div>
                        <div class="card-body" style="margin-bottom:5px ">
                            <p style="float:left;display:inline-block;">Posts 12 </p>
                            <p style="float:right;display:inline-block;">Solution provider yes</p>
                               <br /> <hr />
                        </div>
                    
                </div>
                @if ($i%2!=0)
                <div class="col-md-2">
                </div>
                @endif
                @if($i>1)
                    @break;
                @endif
                    @endforeach    
               </div>

        </div >
            <div class="justify-content-center ">
                <div class="">
                    <br>
                    <div  style="border-bottom:1px solid sienna" >Your Posts</div><br>
    
                    <div class="">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                            @if (count($posts)>0)
                                
                            @foreach ($posts as $post)
                            @if((Auth::user()->name)==($post->user->name))
                            <div class="card">    
                                
                            <div class="card-header" style="background:rosybrown;">
                                <h5>{{$post->user->name}}</h5>
                                    </div>
                            <div class="card-header">
                            <h5>{{$post->title}}</h5>
                                </div>
                                <div class="card-body" >
                                    <p>{{$post->body}}</p>
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
                            @endif
                            @endforeach
                             @else
                            <p>No post yet</p>
                            @endif
                    </div>
                </div>
            </div>
           
         </div>
       
       
   
 </div>
   
@endsection
