@extends('layouts.app')
@section('content')
@include('in.leftside')
@include('in.messages')
<div class="row">



<div class="col-md-1" >

</div >
<div class="col-md-6 container" >
  
    <div class=" ">
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
                    <h5><a href="#" class="link">{{$post->title}}</a>
                        <a href="#" class="link" style="float:right"><small>Give solution <i class="fa fa-arrow-circle-right"></i></small></a></p>
                           
                    </h5>
                    
                        </div>
                        <div class="card-body" >
                            <p>{!! $post->body !!}
                                @if(strlen($post->body)>180)
                                <button class="btn btn-outline-info " style="float:right">Read more</button>
                                @endif
                            </p>
                               
                        </div>
                       <div style="display:inline-block;border-bottom:.2px solid rosybrown;">
                        
                     <i style="font-size:24px;padding:10px;color:rosybrown;width:35px;
                     cursor: pointer;
                     
                     
                     " class="fa fa-thumbs-up"></i><p style="display:inline-block;">2</p>
                                     
                     <i style="font-size:24px;margin-left:5px;
                                -webkit-transform: scaleX(-1);
                                  transform: scaleX(-1);
                     padding:10px;color:rosybrown;width:35px;cursor: pointer;" class="fa fa-thumbs-down"></i><p style="display:inline-block">22</p>

                  <p style="font-size:14px;margin-left:5px;display:inline-block;
                    padding:10px;color:rosybrown;cursor: pointer;">suggestion</p><p style="display:inline-block">14</p>
                        
                        <p style="font-size:14px;margin-left:5px;display:inline-block;
                          padding:10px;color:rosybrown;cursor: pointer;">solution</p><p style="display:inline-block">14</p>

                    </div>
                    <div class="card" style="border:0.1px solid white">
                        
                                <strong>Suggestions</strong>
                        
                        <div class="card-body" style="display:inline-block">
                            <div style="padding:2px;background:lightblue;margin-left:5px;1px solid lightblue;border-radius:2px;float:left;width:auto;display:inline-block;">
                                yoo check others..
                            </div>
                            <div style="padding:2px;background:lightblue;margin-left:5px;border:1px solid lightblue;border-radius:2px;float:left;width:auto;display:inline-block;">
                                yaa check it.
                            </div>
                            <br><hr>
                                    <div style="">
                                         <input style="float:left;display:inline-block;border:1px solid lightblue;border-radius:5px;width:70%" type="text"  placeholder="Enter your suggestion here" >
                                         <button style="display:inline-block;margin-left:5px;" type="submit" class="btn btn-light">suggest</button>
                                    </div>
                        </div>
                    </div>
                    </div>
                   
                    <br>
                    @endforeach
                    @endif
            </div>
        </div>
    </div>
</div>
<div class="col-md-3 " style="margin-top:1.7%">
    
    <div class="card"  >
                 
        <h5 class="card-header">Apply for Solution Provider</h5>
        <div class="card-body">
          <h6 style="color:tomato">What is Solution Provider ?</h6>
          <p>If you want to give solution for any problem which you are seeing. You must be a valid person 
              to give solution .</p>
           <button class="btn btn-outline-success" style="float:right">Click to apply</button><br>
       </div>

</div ><br >
<div class="card"  >
                 
    <h5 class="card-header">Apply for Solution Provider</h5>
    <div class="card-body">
      <h6 style="color:tomato">What is Solution Provider ?</h6>
      <p>If you want to give solution for any problem which you are seeing. You must be a valid person 
          to give solution .</p>
       <button class="btn btn-outline-success" style="float:right">Click to apply</button><br>
   </div>

</div ><br>
<div class="card"  >
                 
    <h5 class="card-header">Apply for Solution Provider</h5>
    <div class="card-body">
      <h6 style="color:tomato">What is Solution Provider ?</h6>
      <p>If you want to give solution for any problem which you are seeing. You must be a valid person 
          to give solution .</p>
       <button class="btn btn-outline-success" style="float:right">Click to apply</button><br>
   </div>

</div >
  </div >
  <div class="col-md-1">
  </div>

</div>


@endsection