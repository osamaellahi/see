@extends('layouts.app')

@section('content')
@include('in.leftside')
<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Fill Information and send your request</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        {!! Form::open([ 'method' => 'POST']) !!}
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
    {{Form::text('body', '',['class'=>'form-control','id'=>'article','placeholder'=>'Enter Body..'])}}
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
{{Form::submit('Submit request',['class'=>'btn btn-primary'])}}

  </div>
  
{!! Form::close() !!}
    </div>
   
  </div>
</div>
</div>
<!------------------------------------------------------------>
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
        <div class="col-md-3 col-md-offset-1" >
            <div class="card" >
                 
                      <h5 class="card-header">Apply for Solution Provider</h5>
                      
                      <div class="card-body">
                        <h6 style="color:tomato">What is Solution Provider ?</h6>
                        <p>If you want to give solution for any problem which you are seeing. You must be a valid person 
                            to give solution .</p>

                         <button type="button" class="btn btn-outline-success"  data-toggle="modal" data-target="#basicExampleModal" style="float:right">Click to apply</button><br>
                     </div>
                     
              </div >
         </div>
        <div class="col-md-8 col-md-offset-1" >
            <div class="card" style="border:1px solid mediumaquamarine">
                 
                <h5 class="card-header" >People near you</h5>
                <div class="card-body">
                  
                  <p>New letter for you</p>
                  <p>New letter for you</p>
                  <p>New letter for you</p>
                  <p>New letter for you</p>
                   
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
