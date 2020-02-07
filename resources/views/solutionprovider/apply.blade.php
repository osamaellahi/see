<!-- Modal apply-->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">  Enter reference Information</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        {!! Form::open([ 'action'=>'SproviderController@store','method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name', 'Name',['style'=>'font-weight:bold'])}}
    {{Form::text('name', '',['required','class'=>'form-control','placeholder'=>'Enter reference name..'])}}
</div><div class="form-group">
    {{Form::label('email', 'Email',['style'=>'font-weight:bold'])}}
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text"   id="btnGroupAddon">@</div>
      </div>
    {{Form::email('email', '',['required','class'=>'form-control','placeholder'=>'Enter email..','aria-label'=>'Input group example','aria-describedby'=>'btnGroupAddon'])}}
</div>
</div>
<div class="form-group">
    {{Form::label('qualification', 'Qualification',['style'=>'font-weight:bold'])}}
    {{Form::text('qualification', '',['required','class'=>'form-control','placeholder'=>'Enter reference qualification..'])}}
</div>
<div class="form-group">
    {{Form::label('yes', 'Have you asked for permission ?',['style'=>'font-weight:bold'])}}
    
    {{Form::label('yes', 'yes',['style'=>'margin-left:10px;color:blue;'])}}
    {{Form::radio('per', 'yes', true)}}
    {{Form::label('no', 'no',['style'=>'color:red'])}}
    {{Form::radio('per', 'no' )}}
</div>

<div class="form-group">
    {{Form::label('Links', 'Social media links' ,['style'=>'font-weight:bold'])}}
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text"  id="btnGroupAddon"><i class="fa fa-facebook-square"></i></div>
      </div>
    {{Form::text('facebook', '',['required','class'=>'form-control','placeholder'=>'Enter facebook url here..','aria-label'=>'Input group example','aria-describedby'=>'btnGroupAddon'])}}
  </div>
  <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text"   id="btnGroupAddon"><i class="fa fa-twitter-square"></i></div>
      </div>
    {{Form::text('twitter', '',['required','class'=>'form-control','placeholder'=>'Enter twitter url here..','aria-label'=>'Input group example','aria-describedby'=>'btnGroupAddon'])}}
  </div>
    <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text" id="btnGroupAddon"><i class="fa fa-github-square"></i></div>
    </div>
    {{Form::text('github', '',['required','class'=>'form-control','placeholder'=>'Enter github url here..','aria-label'=>'Input group example','aria-describedby'=>'btnGroupAddon'])}}
  </div>
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

    <?php
use App\solutionprovider;
            $sp=solutionprovider::all();
            $chk=0;
?>
          @foreach ($sp as $m)
        @if (($m->user_id)==(auth()->user()->id))
        
        @if($m->status=="verified")
            <div class="card"  >      
              <h5 class="card-header">Solution Provider <i style="float:right;color:blue;" class="fa fa-check" aria-hidden="true"></i></h5>
              <div class="card-body">
              <h6 style="display:inline-block;">Status : </h6>
              <h4 style="color:blue;display:inline-block;">{{$m->status}}</h4>
              </div>
            </div>
            <br>
              @endif

        @if($m->status=="applied") 
        <div class="card"  >             
               <h5 class="card-header" >Solution Provider <i style="float:right;color:gray;" class="fa fa-clock-o"></i></h5>   
              <div class="card-body" >
              <h6 style="display:inline-block;">Status : </h6>
              <h4 style="display:inline-block;color:grey">Applied</h4> <hr />
              @include('solutionprovider.edit',['sp',$m->id])
              @include('solutionprovider.delete',['sp',$m->id])
              </div>
        </div>
        <br>
        @endif

        @if($m->status=="rejected")
            <div class="card">
            <h5 class="card-header">Apply for Solution Provider</h5>
            <div class="card-body">
            <h6 style="color:tomato">What is Solution Provider ?</h6>
            <p>If you want to give solution for any problem which you are seeing. You must be a valid person 
            to give solution .</p>
            <hr />
            <h6 style="color:red;">Previously : Rejected <i class="fa fa-ban" aria-hidden="true"></i></h6><hr />
            <button type="button" class="btn btn-outline-success"  data-toggle="modal" data-target="#basicExampleModal" style="float:right">
              Click to apply</button><br>
            </div>
            </div>
            <br>
        @endif
        
        <?php $chk=1; ?>
        @endif
        @endforeach  
        @if($chk==0)
          <div class="card"  >      
           <h5 class="card-header">Apply for Solution Provider</h5>
          <div class="card-body">
              <h6 style="color:tomato">What is Solution Provider ?</h6>
               <p>If you want to give solution for any problem which you are seeing. You must be a valid person 
              to give solution .</p>
               <button type="button" class="btn btn-outline-success"  data-toggle="modal" data-target="#basicExampleModal" style="float:right">
             Click to apply</button><br>
          </div>
          </div>
          <br>
        @endif    
    