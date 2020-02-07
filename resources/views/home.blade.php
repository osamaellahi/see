@extends('layouts.app')

@section('content')
@include('in.leftside')
<div class="col-md">
<div class="col-md" style="" >
    <div class="col-md-12">
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
            
             <!-------people-----------------------section----->
             @include('pages.minipeople')
             <!------------->
            <div class="justify-content-center ">
                <div class="">
                    <br>
    
                    <div class="">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                          
                        @include('posts.myposts')
                    </div>
                </div>
            </div>
           
         </div>
       
       
   
 </div>
</div>
@endsection
