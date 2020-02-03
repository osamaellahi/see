@extends('layouts.app')
@section('content')
@include('in.leftside')
<div class="col-md-12">
    <div class="col-md-1">
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                People who are near .
            </div>
            <div class="card-body" >
                <div class="row">
                    <?php
                $i=0; 
                ?>
                @foreach ($people as $p)
                <?php
                $i++; 
                ?>
                
                <div class="card col-md-5" style="float:left;margin-bottom:5px;" >
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
                          
                        <a href="" class="link" style="color:black">Lets chat <i class="fa fa-envelope " style="color:blueviolet"></i></a>
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
            
                @endforeach
                </div>
               
            </div>
        </div>
    </div>
    <div class="col-md-1">
    </div>
</div>

@endsection