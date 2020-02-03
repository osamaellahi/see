<button type="button" style="float:left;" class="btn btn-outline-primary"  data-toggle="modal" data-target="#basicExampleModal2" style="float:right">
    Edit request <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
<!---------- Modal------------------->
<div class="modal fade " id="basicExampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">  Edit your reference Information</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <?php
        foreach($sp as $it)
        {
            if($it->user_id==auth()->user()->id)
            {
                $solutionP=$it->id;
            }
        }
        $ref=App\reference::all();
        ?>
        @foreach ($ref as $it)
        @if($solutionP==($it->soloution_provider))
        {!! Form::open(['action' => ['SproviderController@update', $it->id] ,'method' => 'POST']) !!}
   
  {{Form::hidden('_method','PUT')}}
<div class="form-group">
    {{Form::label('name','Name',['style'=>'font-weight:bold'])}}
    {{Form::text('name',$it->name,['required','class'=>'form-control','placeholder'=>'Enter reference name..'])}}
</div><div class="form-group">
    {{Form::label('email', 'Email',['style'=>'font-weight:bold'])}}
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text"   id="btnGroupAddon">@</div>
      </div>
    {{Form::email('email', $it->email,['required','class'=>'form-control','placeholder'=>'Enter reference email..','aria-label'=>'Input group example','aria-describedby'=>'btnGroupAddon'])}}
</div>
</div>
<div class="form-group">
    {{Form::label('qualification', 'Qualification',['style'=>'font-weight:bold'])}}
    {{Form::text('qualification', $it->qualification,['required','class'=>'form-control','placeholder'=>'Enter reference qualification..'])}}
</div>
@if ($it->permission =="yes")
<div class="form-group">
  {{Form::label('yes', 'Have you asked for permission ?',['style'=>'font-weight:bold'])}} 
  {{Form::label('yes', 'yes',['style'=>'margin-left:10px;'])}}
  {{Form::radio('per', 'yes', true,['style'=>'color:blue;'])}}
  {{Form::label('per', 'no',['style'=>'color:red'])}}
  {{Form::radio('per', 'per' )}}
</div>

@else
<div class="form-group">
  {{Form::label('yes', 'Have you asked for permission ?',['style'=>'font-weight:bold'])}} 
  {{Form::label('yes', 'yes',['style'=>'margin-left:10px;'])}}
  {{Form::radio('per', 'yes', ['style'=>'color:blue;'])}}
  {{Form::label('per', 'no',['style'=>'color:red'])}}
  {{Form::radio('per', 'no',true )}}
</div>
@endif
<div class="form-group">
  {{Form::label('Links', 'Social media links' ,['style'=>'font-weight:bold'])}}
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text"  id="btnGroupAddon"><i class="fa fa-facebook-square"></i></div>
    </div>
  {{Form::text('facebook', $it->facebook,['required','class'=>'form-control','placeholder'=>'Enter facebook url here..','aria-label'=>'Input group example','aria-describedby'=>'btnGroupAddon'])}}
</div>
<div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text"   id="btnGroupAddon"><i class="fa fa-twitter-square"></i></div>
    </div>
  {{Form::text('twitter', $it->twitter,['required','class'=>'form-control','placeholder'=>'Enter twitter url here..','aria-label'=>'Input group example','aria-describedby'=>'btnGroupAddon'])}}
</div>
  <div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text" id="btnGroupAddon"><i class="fa fa-github-square"></i></div>
  </div>
  {{Form::text('github', $it->github,['required','class'=>'form-control','placeholder'=>'Enter github url here..','aria-label'=>'Input group example','aria-describedby'=>'btnGroupAddon'])}}
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
{{Form::submit('Save request',['class'=>'btn btn-primary'])}}
  </div>
  
{!! Form::close() !!}
@endif
@endforeach
    </div>
   
  </div>
</div>
</div>
<!------------------------------------------------------------>