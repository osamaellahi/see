@extends('layouts.app')
@section('content')
@include('in.leftside')
<div class="col-md-12">
    <div class="col-md-1">
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
               Profile
            </div>
            <div class="card-body" >
              
                
                <div class="card col-md-5" style="float:left;margin-bottom:5px;border:none" >
                    <div class="card-header"   style="border:none;background:white">
                      <div class="image"  style="float:left;display:inline-block;"> 
                           <img src="
                        https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRckzeL7ufOox9b3vTrzwDBzFSMXmWqMaEJ8B7r2hV4kEcmHKM8&s
                     " class="rounded " height="250" width="300" alt="{{Auth::user()->name}}">
                      </div>
                      
                    </div>
                    <div class="card-body" style="margin-bottom:5px ">
                        <div class="name" >
                            <h4> {{Auth::user()->name}} </h4>
                          </div>
                        <p style="float:left;display:inline-block;">Posts 12 </p>
                        <p style="float:right;display:inline-block;">Solution provider yes</p>
                           <br /> <hr />
                    </div>
                
            </div>
            
            
                
                </div>
               
        </div>
    </div>
    <div class="col-md-1">
    </div>
</div>

@endsection