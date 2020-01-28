@extends('layouts.app')
@section('content')
@include('in.leftside')
@include('in.messages')
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

                    @if (count($data[0])<=0)
                        <p>No post yet</p>
                    @else
                        
                    @foreach ($data[0] as $post)
                    <div class="card post">    
                        
                    <div class="card-header" style="background:rosybrown;">
                    <h5>{{$post->user->name}}</h5>
                            </div>
                    <div class="card-header">
                    <h5><a href="/see/public/posts/{{$post->id}}" class="link">{{$post->title}}</a>
                        <a href="/see/public/posts/{{$post->id}}" class="link" style="float:right"><small>Give solution <i class="fa fa-arrow-circle-right"></i></small></a></p>
                           
                    </h5>
                    
                        </div>
                        <div class="card-body" >
                            <p>{!! $post->body !!}
                                @if(strlen($post->body)>180)
                                <a href="/see/public/posts/{{$post->id}}" class="btn btn-outline-info " style="float:right">Read more</a>
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

                       <?php
                       $j=0;
                       $k=0;
                        foreach ($data[2] as $sugg)
                        {
                            if(($sugg->post_id)==($post->id))
                            {
                                $j++;
                            }
                        }

                        foreach ($data[1] as $sol)
                        {
                            if(($sol->post_id)==($post->id))
                            {
                                $k++;
                            }
                        }
                        ?>
                  <p style="font-size:14px;margin-left:5px;display:inline-block;
                    padding:10px;color:rosybrown;cursor: pointer;">suggestion</p><p style="display:inline-block"><?php echo $j; ?></p>
                        
                        <p style="font-size:14px;margin-left:5px;display:inline-block;
                          padding:10px;color:rosybrown;cursor: pointer;">solution</p><p style="display:inline-block"><?php echo $k; ?></p>

                    </div>
                    <div class="card" style="border:0.1px solid white">
                        
                                <strong>Suggestions</strong>
                        
                                <div class="card-body" style="display:inline-block">
                                  
                                  <!------suggestion getting from --->
                                    @include('suggestions.show', ['data' => [$data[2],$post]])
                                  <!------ending suggestion --->
           
                                <!------suggestion creating --->
                                  @include('suggestions.create', ['data' => $post->id])
                                <!------ending suggestion --->
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
              <button type="button" class="btn btn-outline-success"  data-toggle="modal" data-target="#basicExampleModal" style="float:right">Click to apply</button><br>
            </div>

</div ><br >
<div class="card"  >
                 
    <h5 class="card-header">Apply for Solution Provider</h5>
    <div class="card-body">
      <h6 style="color:tomato">What is Solution Provider ?</h6>
      <p>If you want to give solution for any problem which you are seeing. You must be a valid person 
          to give solution .</p>
          <button type="button" class="btn btn-outline-success"  data-toggle="modal" data-target="#basicExampleModal" style="float:right">Click to apply</button><br>
        </div>

</div ><br>
<div class="card"  >
                 
    <h5 class="card-header">Apply for Solution Provider</h5>
    <div class="card-body">
      <h6 style="color:tomato">What is Solution Provider ?</h6>
      <p>If you want to give solution for any problem which you are seeing. You must be a valid person 
          to give solution .</p>
          <button type="button" class="btn btn-outline-success"  data-toggle="modal" data-target="#basicExampleModal" style="float:right">Click to apply</button><br>
        </div>

</div >
  </div >
  <div class="col-md-1">
  </div>

</div>



@endsection
